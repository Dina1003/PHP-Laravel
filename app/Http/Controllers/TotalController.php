<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Order;
use App\Models\Transaksi;

class TotalController extends Controller
{
    public function index(){
        $menu=Menu::all();
        $order = Order::all();
        return view('dashboard.user.total', compact('menu', 'order'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_transaksi'=>'max:255',
            'id_cafe'=>'max:255',
            'tanggal' =>'max:255',
            'total_transaksi' =>'max:255',
        ]);

        Transaksi::create($validatedData);
        $request->session()->flush('success','Berhasil');
        return redirect('transaksifiks');
    }
}
