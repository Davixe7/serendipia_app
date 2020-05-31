<?php

namespace App\Http\Controllers;
use DB;
use App\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
        'page_title' => 'Seleccionar Apartamento',
        'apartment' => $apartment->load('type'),
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        //
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
        'page_title' => 'Separa tu Apartamento'
      ]);
    }
    
    public function selectApartment(Request $request){
      $request->validate([
        'floor' => 'required|numeric|min:2|max:7'
      ]);
      $apartments = Apartment::whereFloor($request->floor)->with('type')->get();
      return view('reserve.select-apartment',
      [
        'page_title' => 'Seleccionar Apartamento',
        'apartments' => $apartments,
        'floor'      => $request->floor
      ]);
    }
}
