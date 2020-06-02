<?php

namespace App\Http\Controllers;
use DB;
use App\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
      return view('reserve.show',
      [
        'page_title' => 'Separa el Tuyo',
        'apartment' => $apartment->load('type'),
      ]);
    }
    
    public function selectFloor(){
      $floors = \DB::table('apartments')->select('floor', DB::raw('count(*) as available'))
      ->where('available', 1)
      ->groupBy('floor')->get();
      
      $all = collect([2,3,4,5,6,7]);
      $availableIndexes = $floors->map(function($f){ return $f->floor; });
      $emptyIndexes = $all->diff( $availableIndexes )->all();
      
      foreach ($emptyIndexes as $emptyIndex) {
        $floors->push( collect(['floor'=>$emptyIndex, 'available'=>0]) );
      }
      
      return view('reserve.select-floor',
      [
        'floors' => $floors->sortBy('floor')->values(),
        'page_title' => 'Separa el Tuyo'
      ]);
    }
    
    public function selectApartment(Request $request){
      $request->validate([
        'floor' => 'required|numeric|min:2|max:7'
      ]);
      $apartments = Apartment::whereFloor($request->floor)->with('type')->get();
      return view('reserve.select-apartment',
      [
        'page_title' => 'Separa el Tuyo',
        'apartments' => $apartments,
        'floor'      => $request->floor
      ]);
    }
    
    public function getByLocation(Request $request){
      $apt = Apartment::whereFloor( $request->floor )->whereTypeId( $request->type )->first();
      return redirect()->route('apartments.show', ['apartment'=>$apt->id]);
    }
}
