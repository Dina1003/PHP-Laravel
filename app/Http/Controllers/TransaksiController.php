<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Detail_Transaksi;
use App\Models\Order;
use App\Models\Barang;

class TransaksiController extends Controller
{

    public function index()
    {
        // return view('dashboard.user.transaksi', [
        //     'title' => 'WaiterTransaksi'
        // ]);
        $menu=Menu::all();
        $order = Order::all();
        return view('dashboard.user.transaksi', compact('menu', 'order'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_menu'=>'max:255',
            'harga_menu'=>'max:255',
            'qty' =>'max:255',
        ]);

        Order::create($validatedData);
        $request->session()->flush('success','Berhasil');
        return redirect('transaksi');
    }

    public function edit($id){
        $menu = Barang::find($id);
       return view('dashboard.user.transaksi', compact(['menu']));
    }
    public function pesan($id){
        $pesan = Menu::find($id);
       return view('dashboard.user.pesan', compact(['pesan']));
    }

    public function destroy($id){
        $order = Order::find($id);
        $order->delete();
        return redirect('transaksi');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    // public function edit($id)
    // {

    //     $new = Menu::find($id);
    //     return view('dashboard.user.transaksi', compact(['new']));
       
     
    // }

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
     * @param  \App\Http\Requests\StoreTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Transaksi $transaksi)
    // {
    //     //
    // }
}
