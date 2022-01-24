<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('livewireBlade.LiveLogin');
    }
    public function loginAdmin(){
        return view('livewireAdminBlade.LiveAdminLogin');
    }
}
