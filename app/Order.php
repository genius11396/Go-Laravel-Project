<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Driver;


class Order extends Model
{
    use SoftDeletes;

    protected $fillable=['user_id','driver_id','pickup_division','pickup_city','dropoff_division','dropoff_city','pickup_date','dropoff_date','pickup_time','pickup_time_am','price','cartype','status'];

    public function user()
     {
     	return $this->belongsTo('App\User');
     }
   public function driver()
     {
     	return $this->hasOne('App\Driver');
     }
}
