<?php

namespace App\Http\Controllers\Admin;

use App\Models\wisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\testimoni;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = wisata::get()->all();
        return view('admin.wisata', compact('wisata'));
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
        $request->validate([
            'nama_tempat' => 'required',
            'harga_tiket' => 'required',
            'jam_buka' => 'required',
            'konten' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
        $file = $request->file('image');

        $imgName = $file->getClientOriginalName();

        $file->move(public_path('file'), $imgName);

        if ($request->id == null) {
            $wisata = wisata::create([
                'nama_tempat' => $request->nama_tempat,
                'harga_tiket' => $request->harga_tiket,
                'jam_buka' => $request->jam_buka,
                'konten' => $request->konten,
                'image' => $imgName,
            ]);
        } else {
            $wisata = wisata::where('id', '=', $request->id)->update([
                'nama_tempat' => $request->nama_tempat,
                'harga_tiket' => $request->harga_tiket,
                'jam_buka' => $request->jam_buka,
                'konten' => $request->konten,
                'image' => $imgName,
            ]);
        }
        return response()->json($wisata);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata_edit = wisata::findOrFail($id);
        return response()->json($wisata_edit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata_edit = wisata::findOrFail($id);
        return response()->json($wisata_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($request, [
            'nama_tempat' => 'required',
            // 'slug' => 'required',
            'harga_tiket' => 'required',
            'jam_buka' => 'required',
            'konten' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imgName = null;

        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

            $request->image->move(public_path('file'), $imgName);
        }

        wisata::find($id)->update([
            'nama_tempat' => $request->nama_tempat,
            'harga_tiket' => $request->harga_tiket,
            'jam_buka' => $request->jam_buka,
            'konten' => $request->konten,
            'image' => $imgName,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        wisata::where('id', $id)->delete();
        return redirect('wisata/index');
    }
}
