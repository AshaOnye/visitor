<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard');
    }

}
