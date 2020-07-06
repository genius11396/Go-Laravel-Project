<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\City;
use App\User;


class Driver extends Model
{
    use SoftDeletes;


    protected $fillable=['name','photo','phone','cartype','carno','cardetail','price','hometown','travelablecity','noofseats','busy','status','city_id'];

    public function cities()
     {
     	return $this->belongsToMany('App\City','cantraveldriver','driver_id','city_id')->withTimestamps();
     }

     public function user()
     {
     	return $this->hasOne('App\User');

     }
}
 