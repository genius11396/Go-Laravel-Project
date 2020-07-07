<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable=['user_id','driver_id','pickup_place','dropoff_place','pickup_date','dropoff_date','pickup_time','price','cartype'];

    public function user()
     {
     	return $this->hasOne('App\User');
     }

}
