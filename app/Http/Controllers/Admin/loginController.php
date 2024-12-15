<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function show_login_view(){
        return view('admin.auth.login');
    }

    public function login(loginRequest $request){
        if(auth()->guard('admin')->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')])){
            return redirect()->route('admin.dashboard');
        }

    }

    public function logout(){
      auth()->logout();
      return redirect()->route('admin.showLogin');

    }

    
}
