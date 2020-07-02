<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;

    protected $fillable=['name','photo','phone','licensephoto','carphoto','cartype','carno','cardetail','hometown','travelablecity','noofseats','email','password','city_id'];
}
