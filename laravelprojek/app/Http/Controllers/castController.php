<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $cast = cast::all();
       
       return view('crud.tampil', ['cast' => $cast ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required|min:10',
        ],
        [
            'nama' => 'Nama tidak boleh kosong!',
            'umur' => 'Umur tidak boleh kosong!',
            'bio' => 'Bio tidak boleh kosong!',
        ]);
        $cast = new Cast;
 
        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');
 
        $cast->save();

        return redirect('/cast');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = cast::find($id);

        return view('crud.detail', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = cast::find($id);

        return view('crud.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required|min:10',
        ],
        [
            'nama' => 'Nama tidak boleh kosong!',
            'umur' => 'Umur tidak boleh kosong!',
            'bio' => 'Bio tidak boleh kosong!',
        ]);

        Cast::where('id', $id)
            ->update([
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
            ]);

        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();

        return redirect('/cast');
    }
}
