<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah['matakuliah'] = \App\Models\Matakuliah::latest()->paginate(10);
        return view('matakuliah.index', $matakuliah);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestdata = $request->validate([
            'kode_matkul' => 'required|min:3',
            'nama_matkul' => 'required|',
            'sks_teori' => 'required|integer|min:0',
            'sks_praktikum' => 'required|integer|min:0',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $matakuliah = new \App\Models\Matakuliah;
        $matakuliah->fill($requestdata);
        $matakuliah->foto = $request->file('foto')->store('public');
        $matakuliah->save();
        flash('Data berhasil diubah')->success();
        return redirect('/matakuliah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        return view('matakuliah.edit', ['matakuliah' => $matakuliah]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestdata = $request->validate([
            'kode_matkul' => 'required|unique:matakuliahs,kode_matkul,'.$id,
            'nama_matkul' => 'required|',
            'sks_teori' => 'required|integer|min:0',
            'sks_praktikum' => 'required|integer|min:0',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        $matakuliah->fill($requestdata);
        if ($request->hasFile('foto')) {
            Storage::delete($matakuliah->foto);
            $matakuliah->foto = $request->file('foto')->store('public');
        }
        $matakuliah->save();
        flash('Data berhasil ditambahkan')->success();
        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        $matakuliah->delete();
        flash('Data berhasil dihapus')->success();
        return redirect('/matakuliah');
    }
}
