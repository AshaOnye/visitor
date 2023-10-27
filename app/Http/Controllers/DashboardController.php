<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipments;
use Auth;

class DashboardController extends Controller
{
    // 

    public function __construct()
    {
        $this->middleware('auth')->except('logout');
       
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function dashboard()
    {
        $ship = shipments::where('uid',Auth::user()->id)->get();
        return view('dashboard',['ship'=>$ship]);
    }

    

}
