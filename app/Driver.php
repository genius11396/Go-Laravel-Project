<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\City;

class Driver extends Model
{
    use SoftDeletes;

    protected $fillable=['name','photo','phone','licensephoto','carphoto','cartype','carno','cardetail','price','hometown','travelablecity','noofseats','email','password','city_id'];

    public function cities()
     {
     	return $this->belongsToMany('App\City','cantraveldriver','driver_id','city_id')
     							->withTimestamps();
     }
}
