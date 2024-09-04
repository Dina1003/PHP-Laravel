<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class EditStokController extends Controller
{
    public function index(){

       
        $menu=Barang::all();
       
        return view('dashboard.admin.editstok', compact('menu'));
      
        
        // $data = DB::table('transaksis')->get();
        // $bar = DB::table('menus')->get();
        // $bara = DB::table('menus')->get();
        // return view('Dashboard.dashboard', ['data'=> $data], ['bar'=> $bar], ['bara'=> $bara]);  
    }

   

    public function edit($id){
        $menu = Barang::find($id);
       return view('dashboard.admin.editstok', compact(['menu']));
    }

    public function update(Request $request, $id){

        $menu = Barang::find($id);
        $menu->kode_barang = $request->kode_barang;
        $menu->nama_barang = $request->nama_barang;
        $menu->harga_barang = $request->harga_barang; 
        $menu->save();
        return redirect('/stok');  
       
    }
}
