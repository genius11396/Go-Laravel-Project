<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\City;

class Division extends Model
{
    use SoftDeletes;

    protected $fillable=['name'];

    public function cities()
    {
    	return $this->hasMany('App\City');
    }

}
