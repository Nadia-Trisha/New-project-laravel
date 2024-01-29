<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index(){
       return view('admin.login');
   }

   public function login(Request $request){
    // dd($request->all());

    if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
        echo "yes";
    }else{
        echo "no";
    }
}

public function dashboard(){
    return view('admin.dashboard');
}

}