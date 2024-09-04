<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Order;
use Illuminate\Http\Request;

class KokiController extends Controller
{
    public function index(){
        $data=Barang::all();
        $order=Order::all();
        return view('dashboard.koki.koki', compact('data', 'order'));
        
    }
}
