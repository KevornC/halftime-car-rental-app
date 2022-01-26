<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function viewVL(){
        return view('adminDashboard.viewVehicle');
    }
}
