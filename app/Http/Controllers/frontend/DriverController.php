<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Driver;
use App\Division;
use App\City;
use App\User;
use App\Order;
use Illuminate\Support\Facades\Hash;

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

        $driverimageName = time().'.'.$request->driverphoto->extension();
        $request->driverphoto->move(public_path('images/driver'),$driverimageName);
        $driverfilepath= 'images/driver'.$driverimageName;

        $licenceimageName = time().'.'.$request->licencephoto->extension();
        $request->licencephoto->move(public_path('images/licence'),$licenceimageName);
        $licencefilepath= 'images/licence'.$licenceimageName;

         $carimageName = time().'.'.$request->carphoto->extension();
        $request->carphoto->move(public_path('images/car'),$carimageName);
        $carfilepath= 'images/car'.$carimageName;

        $driver=new Driver;
        $driver->name=$request->name;
        $driver->driverphoto=$driverfilepath;
        $driver->licencephoto=$licencefilepath;
        $driver->carphoto=$carfilepath;
        $driver->phone=$request->phone;
        $driver->cartype=$request->type;
        $driver->carno=$request->carno;
        $driver->cardetail=$request->details;
        $driver->price=$request->price;
        $driver->city_id=$request->city;
        $driver->division_id=$request->homedivision;
        $driver->busy=0;
        $driver->travelablecity=$request->division;
       // dd($request->division);
         if ($request->division==null) 
            {
                $driver->travelablecity=0;
            }
        else
            {  
                $driver->travelablecity=1;
            }  
        $driver->noofseats=$request->seat;
        $driver->save();
       
        $itemString=$request->division;
        //dd($itemString);    
        $driver->divisions()->attach($itemString);


       //  dd($driver);

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->pwd);
        $user->save();

        $user->assignRole('driver');
        // return $user;
        $orders=Order::all();


        return view('frontend.driver.index_order',compact('orders'));
    }


    public function citybydivision(Request $request)
    {
        
        // dd(request('id'));   
        $id=request('id');
       // dd($id);
        $cities=City::where('division_id',$id)->get();
        // dd($cities);
       return $cities;
    }
}
