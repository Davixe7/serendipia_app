<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $appends = ['available_in'];
  
  public function apartments(){
    return $this->hasMany('App\Apartment');
  }
  
  public function getAvailableInAttribute(){
    return $this->apartments()
                ->whereAvailable(1)
                ->groupBy('floor')
                ->get(['floor'])->map(function($apt){ return (int) $apt->floor; })->toArray();
  }
}
