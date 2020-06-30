<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailpage()
    {
    	return view('frontend.customer.search_detail');
    }
}
