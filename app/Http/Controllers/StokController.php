<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class StokController extends Controller
{
    public function index(){

       
        $barang=Barang::all();
       
        return view('dashboard.admin.stok', compact('barang'));
      
        
        // $data = DB::table('transaksis')->get();
        // $bar = DB::table('menus')->get();
        // $bara = DB::table('menus')->get();
        // return view('Dashboard.dashboard', ['data'=> $data], ['bar'=> $bar], ['bara'=> $bara]);  
    }

    public function edit($id){
        $barang = Barang::find($id);
        
        return view('dashboard.admin.editstok', compact('barang'));
        
    }

    public function updatestok(Request $request, $id){
        $barang = Barang::find($id);
        $barang->update($request->all());

        return redirect('/dashboard');  

    }

    public function hapusstok($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/dashboard'); 
    }


}
