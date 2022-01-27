<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
Route::get('halftimerental/aboutus',[App\Http\Controllers\HomeController::class,'about'])->name('aboutus');
Route::get('halftimerental/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('halftimerental',[App\Http\Controllers\HomeController::class,'homepage'])->name('homepage');
Route::get('halftimerental/login',[App\Http\Controllers\LoginController::class,'login'])->name('showLogin');
Route::get('halftimerental/register',[App\Http\Controllers\SignupController::class,'register'])->name('showRegister');
//Admin Routes
Route::get('halftimerental/login/admin',[App\Http\Controllers\LoginController::class,'loginAdmin'])->name('showAdminLogin');
Route::get('halftimerental/admin/dashboard',[App\Http\Controllers\HomeController::class,'adminDashboard'])->name('adminDashboard');
Route::get('halftimerental/admin/dashboard/memberlisting',[App\Http\Controllers\MemberController::class,'viewML'])->name('viewML');
Route::get('halftimerental/admin/dashboard/orderlisting',[App\Http\Controllers\OrderController::class,'viewOL'])->name('viewOL');
Route::get('halftimerental/admin/dashboard/vehiclelisting',[App\Http\Controllers\VehicleController::class,'viewVL'])->name('viewVL');
//User Routes
Route::get('halftimerental/user/dashboard',[App\Http\Controllers\HomeController::class,'userDashboard'])->name('userDashboard');
Route::get('halftimerental/user/dashboard/search',[App\Http\Controllers\OrderController::class,'rentSearch'])->name('rentSearch');
Route::get('halftimerental/user/dashboard/rent/history',[App\Http\Controllers\OrderController::class,'rentHistory'])->name('rentHistory');
Route::get('halftimerental/user/dashboard/profile',[App\Http\Controllers\ProfileController::class,'profile'])->name('profile');
Route::get('halftimerental/user/dashboard/helpcenter',[App\Http\Controllers\HelpCenterController::class,'helpCenter'])->name('helpCenter');
//