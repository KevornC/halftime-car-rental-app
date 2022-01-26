<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function contact(){
        return view('contactus');
    }
    public function about(){
        return view('aboutus');
    }
    public function homepage(){
        return view('homepage');
    }
    
    // userHome
    public function userDashboard(){
        return view('userDashboard.userDashboard');
    }
    // userAdmin
    public function adminDashboard(){
        return view('adminDashboard.adminDashboard');
    }
}
