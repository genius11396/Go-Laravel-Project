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
	public function statusone($id)
	{      
		$order=Order::where('driver_id', $id)
        ->update(['status' => 1]);
     
		$driver=Driver::where('id', $id)
        ->update(['busy' => 1]);
    
         $orders=Order::where('status','=','0')->get();
         return view('frontend.driver.index_order',compact('orders'));

	}
	public function yourorder()
	{  
         $orders=Order::where('status','=','1')->get();
         return view('frontend.driver.your_order',compact('orders'));
	}
		public function statusoneone($id)
	{      
        $order=Order::find($id);
        $order->status=1.1;
       $order->save();

         $orders=Order::where('status','=','1')->get();
         return view('frontend.driver.your_order',compact('orders'));

	}
		public function cancle($id)
	{      
        $order=Order::find($id);
        $order->status=2;
       $order->save();

         $orders=Order::where('status','=','0')->get();
         return view('frontend.driver.your_order',compact('orders'));

	}
}
