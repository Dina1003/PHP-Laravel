<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\User;
use App\Policies\PenggunaPolicy;

class RegisterController extends Controller
{
    public function login(){
        return view('register.login', [
            'title' => 'Register'
        ]);
    }
    

    public function store(Request $request){

       $validatedData = $request->validate([
           'cafe_name' =>'required|max:255|unique:users',
           'email' =>'required|email:dns|unique:users',
           'password' => 'required|min:5|max:10',
           'password1' => 'required|min:5|max:10',
           'no_id' => 'required|min:5|max:10|unique:users',
           'level' =>'required|max:255',
           
       ]);

       User::create($validatedData);
       $request->session()->flush('success','Registrasi Berhasil');
       return redirect('/login');
      

    }
}
