<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('dashboard.user.welcome', [
            'title' => 'wellcome'
        ]);
    }
}
