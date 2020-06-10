<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Order;
use App\Owner;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StartWebCheckout as RequestWebCheckout;

class PaymentController extends Controller
{
  public function validateForm(RequestWebCheckout $request){
    $apartment = Apartment::findOrFail( $request->apartment );
    
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
      'apartment_id' => $apartment->id,
      'buyer_email'  => $request->email,
      'reference_code' => $referenceCode
    ]);
    
    // $apiKey         = env('PAYU_API_KEY');
    // $merchantId     = env('PAYU_MERCHANT_ID');
    // $accountId      = env('PAYU_ACCOUNT_ID');
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
    $order = Order::whereReferenceCode( $request->referenceCode )->first();
    if( $order ){
      $owner = Owner::whereEmail($order->buyer_email)->get();
      $order->update([
        'status' => $request->transactionStatus
      ]);
      if( $request->transactionStatus == 7 ){
        $order->apartment->update([
          'owner_id' => $owner->id,
          'available' => 0
        ]);
      }
    }
    return view('response', ['data'=>$request]);
  }
  
  public function checkoutConfirm(Request $request){
    return view('response', ['data'=>$request]);
  }
  
  public function checkoutConfirmx(Request $request){
    $owner = App\Owner::whereEmail($request->buyerEmail)->get();
    if( $owner ){
      
    }
    else{
      App\Owner::create([
        'email' => $request->buyerEmail
      ]);
    }
  }
}
