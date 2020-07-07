<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Division;
use DB;
use App\Driver;
use DateTime;
class CustomerController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      $division = Division::all();
      return view('frontend.customer.index',compact('division'));
    }

    public function fetch(Request $request)
    {
     $id=$request->id;
     $city= City::where('division_id', $id)->get();
     echo $city;
   }
    public function details($id)
    {   
       $driver=Driver::find($id);
        $driverhomedivision=Division::find($id);
      return view('frontend.customer.search_detail',compact('driver','driverhomedivision'));

    }

   public function dropfetch(Request $request)
   {
     $id=$request->id;
     $city= City::where('division_id', $id)->get();
     echo $city;
   }




   public function searchdriver(Request $request)
   {
     $pickupdivision=$request->pickupdivision;
     $pickupcity=$request->pickupcity;
     $dropoffdivision=$request->dropoffdivision;
     $pickupdate=$request->pickupdate;
     $dropdate=$request->dropdate;
     $drivers= Driver::all();
     $driv=$drivers->where('busy','=',0);
     foreach ($driv as $driver ){
             //0  
      $samedivision=$driver::where('travelablecity',0)->where('division_id','=',$pickupdivision)->get();
         //1
       $users = DB::table('drivers')
       ->join('cantraveldriver', 'drivers.id', '=', 'cantraveldriver.driver_id')
       ->select('cantraveldriver.division_id as destination','drivers.*')
       ->get();
       $usersdriver=$users->where('division_id',$pickupdivision)
       ->where('destination',$dropoffdivision);

// if (sizeof($samedivision)==0) {
//   dd('hello');
// }


       $dropdate = strtotime($dropdate);
       $pickupdate = strtotime($pickupdate);
       $interva= ($dropdate - $pickupdate)/60/60/24;
       $interval=1+$interva;
    

 return view('frontend.customer.search_result',compact('samedivision','usersdriver','interval'));





     }
   }
 }



