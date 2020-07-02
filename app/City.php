<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Division;

class City extends Model
{
    use SoftDeletes;

    protected $fillable=['name','division_id'];

     public function division()
    {
    	return $this->belongsTo('App\Division');
    }
}
