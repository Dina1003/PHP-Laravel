<?php

namespace App\Http\Controllers;

use App\Models\alamat_cafe;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class StrukController extends Controller
{
    public function index(){
        $menu=Menu::all();
        $order = Order::all();
        $alamat = alamat_cafe::all();
        return view('dashboard.user.struk1', compact('menu', 'order', 'alamat'));
    }
    public function struk($kode_transaksi){
        $transaksi = Transaksi::where('kode_transaksi', $kode_transaksi)->first();
        dd($transaksi);
    }
}
