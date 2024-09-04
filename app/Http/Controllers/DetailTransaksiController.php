<?php

namespace App\Http\Controllers;

use App\Models\Detail_Transaksi;
use App\Http\Requests\StoreDetail_TransaksiRequest;
use App\Http\Requests\UpdateDetail_TransaksiRequest;
use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.tambah', [
            'title' => 'AdminCreate'
        ]);

        
    
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'kode_menu' =>'required|max:255|unique:menus',
            'nama_menu' =>'required|max:255|unique:menus',
            'harga' =>'required|max:255',
            
            
        ]);
        $transaksi = $request->validate([
            'kode_transaksi'=>'required|max:255|unique:transaksis',
            'id_cafe'=>'required|max:255',
            'tanggal'=> 'required|max:255',
            'total_transaksi' => 'required|max:255',
            
            
        ]);
        $detail = $request->validate([
            'kode_transaksi'=>'required|max:255|unique:transaksis',
            'kode_menu' =>'required|max:255|unique:menus',
            'qty' =>'required|max:255',
            
            
        ]);
        
 
        Menu::create($validatedData);
        Transaksi::create($transaksi);
        Detail_Transaksi::create($detail);
        $request->session()->flush('success','Berhasil');
        return redirect('transaksi');}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetail_TransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreDetail_TransaksiRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_Transaksi  $detail_Transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_Transaksi $detail_Transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_Transaksi  $detail_Transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_Transaksi $detail_Transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetail_TransaksiRequest  $request
     * @param  \App\Models\Detail_Transaksi  $detail_Transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetail_TransaksiRequest $request, Detail_Transaksi $detail_Transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_Transaksi  $detail_Transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_Transaksi $detail_Transaksi)
    {
        //
    }
}
