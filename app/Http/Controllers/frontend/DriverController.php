<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Driver;
use App\Division;
use App\City;
use App\User;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.driver.index_order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $divisions=Division::all();
        // dd($divisions);
        return view('frontend.driver.driver_register',compact('divisions'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($driver->states);
        
        // $request->validate([
        //     'name'=>'required|min:5|max:191',
        //     'photo[]' => 'sometimes|mimes:jpeg,bmp,png',
        //     'email' => 'required|min:5|max:191',
        //     'password' => 'required|min:5|max:191'
        // ]);

        $images= $request->file('photo');
        if ($images) {
            foreach ($images as $image) {
                $imagesName=uniqid().time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/driver'),$imagesName);
                $filepath='images/driver'.$imagesName;
                $image_array[]=$filepath;
            }
        }

        $driver=new Driver;
        $driver->name=$request->name;
        $driver->photo=json_encode($image_array);
        $driver->phone=$request->phone;
        $driver->cartype=$request->type;
        $driver->carno=$request->carno;
        $driver->cardetail=$request->details;
        $driver->price=$request->price;
        $driver->city_id=$request->hometown;
        $driver->busy=0;
        $driver->travelablecity=$request->division;
       // dd($request->division);
         if ($request->division==null) 
            {
                $driver->status=0;
            }
        else
            {  
                $driver->status=1;
            }  
        $driver->noofseats=$request->seat;
        $driver->save();
       
        $itemString=$request->division;
        $driver->cities()->attach($itemString);
       //  dd($driver);

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->pwd;
        $user->save();

        return view('frontend.driver.index_order');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    // public function citybydivision(Request $request)
    // {
        
    //     // dd(request('id'));   
    //     $id=request('id');
    //     $cities=City::where('division_id',$id)->get();
    //     // dd($cities);
    //     return $cities;
    // }
}
