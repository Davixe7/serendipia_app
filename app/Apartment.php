<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
  protected $fillable = [
    'number', 'floor', 'type', 'initial_quota', 'monthly_quota', 'apt_value', 'finance_value', 'instalment', 'release_date', 'available'
  ];
  
  public function type(){
    return $this->belongsTo('App\Type');
  }
}

// $activeFloors = Apartment::groupBy('floor')->where('available', 1)->get(['floor'])->map(function($f){ return $f->floor; })->toArray();
// $availableIn  = Apartment::groupBy('floor')->whereAvailable(1)->whereType(1)->get(['floor'])->map(function($f){ return $f->floor; })->toArray();