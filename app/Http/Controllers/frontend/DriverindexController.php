<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Auth;
use App\Driver;

class DriverindexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $aid=Auth::user()->id;
    
        $driver=Driver::where('user_id',$aid)
        ->select('id')
        ->first();
        $driverid=$driver->id;
        $orders=Order::where('status','=',0)
          ->where('driver_id',$driverid)
          ->get();

        // $divisions = DB::table('orders')
        //     ->join('divisions', 'orders.pickup_division', '=', 'divisions.id')
        //      ->join('cities', 'orders.pickup_city', '=', 'cities.id')
        //     ->select('divisions.name as divisionname', 'cities.name as cityname', 'orders.price')
        //     ->get();

         return view('frontend.driver.index_order',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
