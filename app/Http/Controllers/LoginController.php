<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(){
        return view('login.login', [
            'title' => 'login'
        ]);
    }
    
    public function authenticate(Request $request){

       $request->validate([

        'email' =>'required|email:dns',
        'password' => 'required',

        ]);

        
       $request->session()->flush('success','Registrasi Berhasil');
       return redirect('/dashboard');

    }

    


}
