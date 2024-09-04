<?php

namespace App\Http\Controllers;

use App\Models\Restok;
use Illuminate\Http\Request;

class HeadRestokController extends Controller
{
    public function index(){

       
        $data=Restok::all();
       
        return view('dashboard.head.restok', compact('data')); 
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'nomor_nota' =>'required|max:255|unique:restoks',
            'id_cafe' =>'required|max:255',
            'id_jastip'=> 'required|max:255',
            'tanggal' =>'required|max:255',
            'total_belanja' =>'required|max:255',
            
            
        ]);
        
    
        Restok::create($validatedData);
        $request->session()->flush('success','Berhasil');
        return redirect('restok');
    }

    public function hapus($id){
        $data = Restok ::find($id);
        $data->delete();
        return redirect('/restok'); 
    }
}
