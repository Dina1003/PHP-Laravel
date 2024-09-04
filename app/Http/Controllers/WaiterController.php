<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Detail_Transaksi;

class WaiterController extends Controller
{
    public function index(){
        $data=Transaksi::all();
        $detail = Detail_Transaksi::all();
        return view('dashboard.user.waiter', compact('data', 'detail'));
        
    }
}
