<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Artikel_AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.artikel_admin', compact('artikels'));
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
            'judul_artikel' => 'required',
            // 'slug' => 'required',
            'konten' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
        $file = $request->file('image');

        $imgName = $file->getClientOriginalName();

        $file->move(public_path('file'), $imgName);

        if ($request->id == null) {
            $artikels = Artikel::create([
                'judul' => $request->judul_artikel,
                'excerpt' => Str::slug($request->judul_artikel),
                'konten' => $request->konten,
                'image' => $imgName,
            ]);
        } else {
            $artikels = Artikel::where('id', '=', $request->id)->update([
                'juduL' => $request->judul_artikel,
                'excerpt' => Str::slug($request->judul_artikel),
                'konten' => $request->konten,
                'image' => $imgName,
            ]);
        }
        return response()->json($artikels);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit_artikel = Artikel::findOrFail($id);
        return response()->json($edit_artikel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_artikel = Artikel::findOrFail($id);
        return response()->json($edit_artikel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($request, [
            'judul_artikel' => 'required',
            // 'slug' => 'required',
            'konten' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imgName = null;

        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

            $request->image->move(public_path('file'), $imgName);
        }

        Artikel::find($id)->update([
            'judul' => $request->judul_artikel,
            'konten' => $request->konten,
            'image' => $imgName,
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::where('id', $id)->delete();
        return redirect('artikels/index');
    }
}
