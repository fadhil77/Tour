<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::all();
        return view("/home_artikel.artikel", compact('artikel'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = artikel::where('id', $id)->first();
        $data = true;
        // dd($artikel);
        return view('home_artikel.show', compact('artikel', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        //
    }
}
