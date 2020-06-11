<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Apartment;
use App\Order;
use App\Owner;
use App\Mail\OrderDetails;
use App\Http\Requests\StartWebCheckout as RequestWebCheckout;

class PaymentController extends Controller
{
  public function validateForm(RequestWebCheckout $request){
    $apartment = Apartment::findOrFail( $request->apartment );
    if( !$apartment->available || $apartment->owner_id != null ){
      return redirect()->route('reserve.selectApartment');
    }
    
    if( !Owner::whereEmail( $request->email )->exists() ){
      Owner::create([
        'name'  => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
      ]);
    }
    
    $accountId      = '512321';
    $merchantId     = '508029';
    $apiKey         = '4Vj8eK4rloUd272L48hsrarnUA';
    $referenceCode  = "TestPayU" . time();
    $amount         = 10000000;
    $currency       = "COP";
    
    $order = Order::create([
      'apartment_id'   => $apartment->id,
      'buyer_email'    => $request->email,
      'reference_code' => $referenceCode
    ]);
    
    // $accountId      = env('PAYU_ACCOUNT_ID');
    // $merchantId     = env('PAYU_MERCHANT_ID');
    // $apiKey         = env('PAYU_API_KEY');
    // $referenceCode  = "R" . time();
    // $amount         = 10000000;
    // $currency       = "COP";
    
    $data = [
      "formUrl" => "https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu",
      
      "order" => [
        "accountId"       => $accountId,
        "merchantId"      => $merchantId,
        "ApiKey"          => $apiKey,
        
        "usuarioId"       => $accountId,
        "refVenta"        => $referenceCode,
        
        "description"     => "Reservación de apartamento {$apartment->number} en Serendipia",
        "referenceCode"   => $referenceCode,
        "amount"          => $amount,
        "currency"        => $currency,
        "signature"       => md5("$apiKey~$merchantId~$referenceCode~$amount~$currency"),
        
        "tax"             => 0,
        "taxReturnBase"   => 0,
        
        "test"            => 1,
        
        "buyerEmail"      => $request->email,
        "telephone"       => $request->phone,
        "buyerFullName"   => $request->name,
        "responseUrl"     => 'https://serendipia.espartadevs.co.ve/checkout-response',
        "confirmationUrl" => 'https://serendipia.espartadevs.co.ve/checkout-confirm'
      ]
    ];
    
    return response()->json(['data'=>$data]);
  }
  
  public function checkoutResponse(Request $request){
    $order = Order::where('reference_code', $request->referenceCode )->first();
    if( $order->id ){
      $order->update([
        'status' => $request->transactionState
      ]);
      if( $request->transactionState == 4 ){
        return view('reserve.thankyou', ['apartment'=>$order->apartment]);
      }
      else {
        return view('reserve.rejected', ['apartment'=>$order->apartment]);
      }
    }
  }
  
  public function checkoutConfirm(Request $request){
    Storage::append('file.log', $request->state_pol . ' ' . $request->reference_sale);
    $order = Order::where('reference_code', $request->reference_sale )->first();
    if( $order->id ){
      $order->update([
        'status' => $request->state_pol
      ]);
      
      if( $request->state_pol == 4 ){
        $owner = Owner::whereEmail( $order->buyer_email )->first();
        $order->apartment->update([
          'owner_id' => $owner->id,
          'available' => 0
        ]);
        Mail::to( $owner->email )->send(new OrderDetails);
      }
    }
  }
}
