<?php

namespace App\Http\Controllers;

use App\Models\Restok;
use App\Http\Requests\StoreRestokRequest;
use App\Http\Requests\UpdateRestokRequest;

class RestokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       
        $barang=Restok::all();
       
        return view('Dashboard.dashboard', compact('barang'));
      
        
        // $data = DB::table('transaksis')->get();
        // $bar = DB::table('menus')->get();
        // $bara = DB::table('menus')->get();
        // return view('Dashboard.dashboard', ['data'=> $data], ['bar'=> $bar], ['bara'=> $bara]);  
    }

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
     * @param  \App\Http\Requests\StoreRestokRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestokRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restok  $restok
     * @return \Illuminate\Http\Response
     */
    public function show(Restok $restok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restok  $restok
     * @return \Illuminate\Http\Response
     */
    public function edit(Restok $restok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestokRequest  $request
     * @param  \App\Models\Restok  $restok
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestokRequest $request, Restok $restok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restok  $restok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restok $restok)
    {
        //
    }
}
