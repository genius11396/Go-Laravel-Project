<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Division;
use App\Driver;

class City extends Model
{
    use SoftDeletes;

    protected $fillable=['name','division_id'];

     public function division()
    { 
    	return $this->belongsTo('App\Division');
    }

    public function drivers()
     {
     	return $this->belongsToMany('App\Driver','cantraveldriver','driver_id','city_id')->withTimestamps();
     }
}
