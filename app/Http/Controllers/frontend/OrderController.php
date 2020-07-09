<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Driver;
use App\Order;
class OrderController extends Controller
{

	public function requestorder(Request $request)
	{

		$user_id=$request->user_id;
		$driver_id=$request->driver_id;
		$cartype=$request->cartype;
		$total=$request->total;
		$pickupdivision=$request->pickupdivision;
		$pickupcity =$request->pickupcity;
		$dropoffdivision=$request->dropoffdivision;
		$dropoffcity=$request->dropoffcity;
		$pickupdate=$request->pickupdate;
		$dropdate=$request->dropdate;
		$pickuptime=$request->pickuptime;
		$pickuptimeam=$request->pickuptimeam;

   		$order=new Order;
        $order->user_id=$user_id;
        $order->driver_id=$driver_id;
        $order->pickup_division=$pickupdivision;
        $order->pickup_city=$pickupcity;
        $order->dropoff_division=$dropoffdivision;
        $order->dropoff_city=$dropoffcity;
        $order->pickup_date=$pickupdate;
        $order->dropoff_date=$dropdate;
        $order->pickup_time=$pickuptime;
        $order->pickup_time_am=$pickuptimeam;
        $order->price=$total;
        $order->cartype=$cartype;
        $order->save();
		
	

	}
}
