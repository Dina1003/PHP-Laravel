<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class TambahStokController extends Controller
{
    
public function index(){
    $restok = Barang::all();
    return view('dashboard.head.stok', compact('restok'));
}


public function store(Request $request){

    $validatedData = $request->validate([
        'kode_barang' =>'required|max:255|unique:barangs',
        'nama_barang' =>'required|max:255|unique:barangs',
        'jumlah_barang'=> 'required|max:255',
        'harga_barang' =>'required|max:255',
        
        
    ]);
    

    Barang::create($validatedData);
    $request->session()->flush('success','Berhasil');
    return redirect('/head');
}
   

 }
