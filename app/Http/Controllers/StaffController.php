<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $data=Barang::all();
        $req = ModelsRequest::all();
        return view('dashboard.staff.staff', compact('data', 'req'));
        
    }

    public function edit($id){
        $data = Barang::find($id);
        
        return view('dashboard.staff.ambil', compact('data'));
        
    }

    public function updatestok(Request $request){
        // $data = Barang::find($id);
        ModelsRequest::create([
            'kode_barang'=> $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah_barang'=> $request->jumlah_barang,
            'req'=>$request->req,
        ]);

        $data = Barang::find($request->id);
        $data->jumlah_barang -= $request->req;
        $data->save();

        return redirect('/staff');  

    }

    public function hapus($id){
        $req= ModelsRequest::find($id);
        $req->delete();
        return redirect('/staff'); 
    }
}
