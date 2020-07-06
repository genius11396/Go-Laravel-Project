<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Division;
use DB;
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
   
   public function dropfetch(Request $request)
   {
       $id=$request->id;
       $city= City::where('division_id', $id)->get();
       echo $city;
   }
    public function searchdriver(Request $request)
   {
       $pickupdivision=$request->pickupdivision;




    
       // $city= City::where('division_id', $id)->get();
       // echo $city;
        return view('frontend.customer.search_result',compact(''));
   }
}
