<?php

namespace App\Http\Controllers;

use App\Models\alamat_cafe;
use App\Http\Requests\Storealamat_cafeRequest;
use App\Http\Requests\Updatealamat_cafeRequest;

class AlamatCafeController extends Controller
{

    public function index()
    {
        
        return view('alamat_caves',[
            $alamat_caves = alamat_cafe::limit(100)->get(),
            "alamat_caves" => alamat_cafe::all()
        ]);
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
     * @param  \App\Http\Requests\Storealamat_cafeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storealamat_cafeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alamat_cafe  $alamat_cafe
     * @return \Illuminate\Http\Response
     */
    public function show($alamat_cafe)
    {
      return view('alamat_cafe',[
          "alamat_cafe" => alamat_cafe::find($alamat_cafe)
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alamat_cafe  $alamat_cafe
     * @return \Illuminate\Http\Response
     */
    public function edit(alamat_cafe $alamat_cafe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatealamat_cafeRequest  $request
     * @param  \App\Models\alamat_cafe  $alamat_cafe
     * @return \Illuminate\Http\Response
     */
    public function update(Updatealamat_cafeRequest $request, alamat_cafe $alamat_cafe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alamat_cafe  $alamat_cafe
     * @return \Illuminate\Http\Response
     */
    public function destroy(alamat_cafe $alamat_cafe)
    {
        //
    }
}
