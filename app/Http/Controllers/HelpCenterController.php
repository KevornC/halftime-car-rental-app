<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    public function helpCenter(){
        return view('userDashboard.helpCenter');
    }
}
