<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Driver;

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
        $request->validate(['photo' => 'sometimes|mimes:jpeg,bmp,png','name'=>'required|min:5|max:191']);


        $photoName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('driverimages'),$photoName);
        $filepath_photo= 'driverimages/'.$photoName;

        $licensephoto = time().'.'.$request->licensephoto->extension();
        $request->photo->move(public_path('licenceimages'),$licensephoto);
        $licensephoto= 'licenceimages/'.$licensephoto;

        $carphoto = time().'.'.$request->carphoto->extension();
        $request->photo->move(public_path('carimages'),$carphoto);
        $carphoto= 'carimages/'.$carphoto;

        $driver=new Driver;
        $driver->name=$request->name;
        $driver->photo=$filepath_photo;
        $driver->phone=$request->phone;
        $driver->type=$request->type;
        $driver->price=$request->price;
        $driver->hometown=$request->hometown;
        $driver->allcity=$request->allcity;
        $driver->carno=$request->carno;
        $driver->seat=$request->seat;
        $driver->email=$request->email;
        $driver->password=$request->password;

        $driver->save();
        return redirect()->route('.index');
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
        //
    }
}
