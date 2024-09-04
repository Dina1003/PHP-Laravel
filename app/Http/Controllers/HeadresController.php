<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Detail_Restok;
use App\Models\Restok;
use Illuminate\Http\Request;

class HeadresController extends Controller
{
    public function index(){

        $restok = Barang::all();
        return view('dashboard.head.res', compact('restok'));
        
    }

    public function edit($id){
        $restok = Barang::find($id);
        
        return view('dashboard.head.editstok', compact('restok'));
        
    }

    public function updatestok(Request $request){
        // $restok = Barang::find($id);
        Detail_Restok::create([
            'nomor_nota' => $request->nomor_nota,
            'kode_barang'=> $request->kode_barang,
            'qty'=> $request->qty,
        ]);

        $restok = Barang::find($request->id);
        $restok->jumlah_barang += $request->qty;
        $restok->save();
        

        return redirect('/head');  

    }

    public function hapusstok($id){
        $restok = Barang::find($id);
        $restok->delete();
        return redirect('/head'); 
    }
}
