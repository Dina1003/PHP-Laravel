<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class HeadController extends Controller
{
    public function index(){
        $barang=Barang::all();
        return view('dashboard.head.stok', compact('barang'));
        
    }
}
