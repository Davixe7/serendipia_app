<?php

namespace App;

use Carbon;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
  protected $fillable = [
    'number', 'floor', 'type', 'initial_quota', 'monthly_quota', 'apt_value', 'finance_value', 'instalment', 'release_date', 'available'
  ];
  
  protected $casts = [
    'available' => 'integer'
  ];
  
  protected $appends = [
    'releases'
  ];
  
  public function type(){
    return $this->belongsTo('App\Type');
  }
  
  public function getReleasesAttribute(){
    setlocale(LC_TIME, 'Spanish');
    return ucfirst(Carbon\Carbon::parse( $this->release_date )->formatLocalized('%B %Y'));
  }
}

// $activeFloors = Apartment::groupBy('floor')->where('available', 1)->get(['floor'])->map(function($f){ return $f->floor; })->toArray();
// $availableIn  = Apartment::groupBy('floor')->whereAvailable(1)->whereType(1)->get(['floor'])->map(function($f){ return $f->floor; })->toArray();