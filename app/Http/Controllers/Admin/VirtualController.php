<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VirtualTour;

class VirtualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $virtual = VirtualTour::all();
        return view('admin.virtual_admin', compact('virtual'));
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
            'nama' => 'required',
            // 'slug' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
        $file = $request->file('image');

        $imgName = $file->getClientOriginalName();

        $file->move(public_path('file'), $imgName);

        if ($request->id == null) {
            $virtual = VirtualTour::create([
                'nama' => $request->nama,
                'link' => $request->link,
                'image' => $imgName,
            ]);
        } else {
            $virtual = VirtualTour::where('id', '=', $request->id)->update([
                'nama' => $request->nama,
                'link' => $request->link,
                'image' => $imgName,
            ]);
        }
        return response()->json($virtual);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $virtual_edit = VirtualTour::findOrFail($id);
        return response()->json($virtual_edit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $virtual_edit = VirtualTour::findOrFail($id);
        return response()->json($virtual_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($request, [
            'nama' => 'required',
            // 'slug' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imgName = null;

        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

            $request->image->move(public_path('file'), $imgName);
        }

        VirtualTour::find($id)->update([
            'nama' => $request->nama,
            'link' => $request->link,
            'image' => $imgName,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VirtualTour::where('id', $id)->delete();
        return redirect('virtual/index');
    }
}
