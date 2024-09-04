<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Order;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class KokiOrderController extends Controller
{
    public function index(){

       
        $data=Barang::all();
       $req=ModelsRequest::all();
        return view('dashboard.koki.req', compact('data', 'req')); 
    }


    public function hapus($id){
        $data = Order ::find($id);
        $data->delete();
        return redirect('/koki'); 
    }

    public function edit($id){
        $data = Barang::find($id);
        
        return view('dashboard.koki.minta', compact('data'));
        
    }
    

    public function store(Request $request){

        $validatedData = $request->validate([
            'kode_barang' =>'required|max:255',
            'nama_barang' =>'required|max:255',
            'jumlah_barang' =>'required|max:255',
            'req'=>'required|max:255'
            
            
        ]);
        
 
        ModelsRequest::create($validatedData);
        $request->session()->flush('success','Berhasil');
        return redirect('req');
       
 
     }
}
