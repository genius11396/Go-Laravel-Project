<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\City;
use App\Driver;

class Division extends Model
{
    use SoftDeletes;

    protected $fillable=['name'];

    public function cities()
    {
    	return $this->hasMany('App\City');
    }

     public function drivers()
     {
     	return $this->belongsToMany('App\Driver','cantraveldriver','driver_id','division_id')->withTimestamps();
     }

}
