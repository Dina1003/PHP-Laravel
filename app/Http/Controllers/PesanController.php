<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Menu;

class PesanController extends Controller
{
    public function index()
    {
        // return view('dashboard.user.tambah', [
        //     'title' => 'WaiterTransaksi'
        // ]);
        $menu=Transaksi::all();
        return view('dashboard.user.tambah', compact('menu'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_transaksi'=>'required|max:255|unique:transaksis',
            'id_cafe'=>'required|max:255',
            'kode_menu' =>'required|max:255',
            'nama_menu' =>'required|max:255',
            'harga' =>'required|max:255',
            'qty' =>'max:255',
            
        ]);

        Transaksi::create($validatedData);
        $request->session()->flush('success','Berhasil');
        return redirect('pesanan');
    }

}
