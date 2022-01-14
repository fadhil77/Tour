<?php

namespace App\Http\Controllers;

use App\Models\testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = testimoni::all();
        // dd($feedback);
        return view('home_user.testimoni', compact('feedback'));
    }

    public function testi_admin()
    {
        $feedbacks = testimoni::all();
        return view('admin.testimoni_admin', compact('feedbacks'));
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
        testimoni::create([
            'nama' => $request->nama,
            'rating' => $request->rating,
            'komentar' => $request->komentar,
        ]);
        return redirect('testimoni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        testimoni::where('id', $id)->delete();
        return redirect('testimoni_admin/testi_admin');
    }
}
