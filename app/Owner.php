<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
  public function apartments(){
    return $this->hasMany('App\Apartment');
  }
}
