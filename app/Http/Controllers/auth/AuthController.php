<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
     function showRegister(){
        return view('auth.register');
    }

    function register(Request $request){
    $data=$request->validate([
      'name'=>'required',
      'email'=>'required',
      'password'=>'required|confirmed'

        ]);

        $user=User::create($data);

        if($user){
            return redirect('login');
        }
    }
    
    function showLogin(){
        return view('auth.login');
    }

    function login(Request $request){
        $credentials=$request->validate([
      'email'=>'required',
      'password'=>'required'
        ]);
      if(Auth::attempt($credentials)){
       return redirect('blogs');
      }else{
        return redirect('blogs/create');
      }
    }

    function logout(){
        Auth::logout();
        return view('auth.login');
    }

    
}
