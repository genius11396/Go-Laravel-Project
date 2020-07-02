<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
	public function resultpage()
    {
    	return view('frontend.customer.search_result');
    }
    
}
