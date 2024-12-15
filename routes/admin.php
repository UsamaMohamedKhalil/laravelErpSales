<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'admin','prefix'=>'admin','middleware'=>'auth:admin'],function(){

    Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('logout',[loginController::class,'logout'])->name('admin.logout');

    
    });




Route::group(['namespace'=>'admin','prefix'=>'admin','middleware'=>'guest:admin'],function(){

Route::get('login',[loginController::class,'show_login_view'])->name('admin.showLogin');

Route::post('login',[loginController::class,'login'])->name('admin.login');

});