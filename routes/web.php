<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
  return view('index');
});

Route::get('/quienes-somos', function(){
  return view('about-us');
})->name('about');

Route::get('/sitios-cercanos', function(){
  return view('near');
})->name('near');

Route::get('explorar-apartamentos/renders', function(){
  $types = App\Type::all();
  return view('explore.renders', ['page_title'=>'Explorar Apartamentos', 'types'=>$types]);
})->name('explore.renders');

Route::get('explorar-apartamentos/planos', function(){
  $types = App\Type::all();
  return view('explore.planes', ['page_title'=>'Explorar Apartamentos', 'types'=>$types]);
})->name('explore.planes');

Route::get('zonas-sociales', function(){
  return view('explore.shared', ['page_title'=>'Zonas Sociales']);
})->name('shared');

Route::get('zonas-sociales-360', function(){
  return view('360');
});

Route::get('mapa', function(){
  return view('map');
})->name('mapa');

Route::get('get-360', function(){
  return view('360');
});

Route::get('cinco', function(){
  return view('cinco', ['page_title'=>'cinco']);
});

Route::post('reserve-apartment', 'ApartmentController@reserve')->name('reserve-apartment');
Route::get('detalle-apartamento','ApartmentController@getByLocation');
Route::get('separar-apartamento/seleccionar-apartamento', 'ApartmentController@selectApartment')->name('reserve.selectApartment');
Route::get('separar-apartamento/seleccionar-piso', 'ApartmentController@selectFloor')->name('reserve.selectFloor');
Route::get('separar-apartamento/{apartment}/detalle', 'ApartmentController@show')->name('apartments.show');
Route::get('separar-apartamento/gracias', 'ApartmentController@thankyou')->name('apartments.thankyou');

Route::get('tipos', function(){
  return response()->json(['data'=>App\Type::all()]);
  return App\Http\Resources\Type::collection( App\Type::all() );
});


Route::get('rejected', function(){
  return view('reserve.rejected', ['apartment'=>App\Apartment::find(1)]);
});

Route::post('validate-checkout-form', 'PaymentController@validateForm');
Route::get('checkout-response', 'PaymentController@checkoutResponse');
Route::post('checkout-confirm', 'PaymentController@checkoutConfirm');