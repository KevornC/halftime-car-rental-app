<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function rentSearch(){
       return view('livewireBlade.LiveRentalSearch');
   }
   public function rentHistory(){
       return view('userDashboard.rentHistory');
   }

   public function viewOL(){
    return view('adminDashboard.viewOrder');
}
}
