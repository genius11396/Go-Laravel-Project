<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\City;
use App\User;
use App\Division;


class Driver extends Model
{
    use SoftDeletes;

<<<<<<< HEAD
    protected $fillable=['name','photo','phone','cartype','carno','cardetail','price','travelablecity','noofseats','busy','city_id','division_id'];
 
=======
    protected $fillable=['name','driverphoto','licencephoto','carphoto','phone','cartype','carno','cardetail','price','travelablecity','noofseats','busy','city_id','division_id'];
>>>>>>> a240d956d8d410c8bc92375c1c35284e9df28145

    public function divisions()
     {
     	return $this->belongsToMany('App\Division','cantraveldriver','driver_id','division_id')->withTimestamps();
     }

     public function user()
     {
     	return $this->hasOne('App\User');

     }
}
 