<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
    public function index(){
        $data = DB::table('transaksis')->get();
        $bar = DB::table('barangs')->get();
        $menu = DB::table('menus')->get();
        return view('Dashboard.dashboard', ['data'=> $data], ['bar'=> $bar]); 
        return view('Dashboard.dashboard', ['menu'=> $menu]);
       
    }

    
    
   
  
}
