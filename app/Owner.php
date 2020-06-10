<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
  protected $fillable = ['name', 'email', 'phone'];
  
  public function apartments(){
    return $this->hasMany('App\Apartment');
  }
}
