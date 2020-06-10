<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['buyer_email', 'status', 'apartment_id', 'reference_code', 'transaction_id'];
  
  public function apartment(){
    return $this->belongsTo('App\Apartment');
  }
}
