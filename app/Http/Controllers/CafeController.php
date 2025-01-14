<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Http\Requests\StoreCafeRequest;
use App\Http\Requests\UpdateCafeRequest;

class CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCafeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCafeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function show(Cafe $cafe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function edit(Cafe $cafe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCafeRequest  $request
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCafeRequest $request, Cafe $cafe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cafe $cafe)
    {
        //
    }
}
