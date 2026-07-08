<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alat;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alat = Alat::all();
        return view('alat.index', compact('alat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required',
            'tahun_pembelian' => 'required',
            'merek' => 'required',
            'tipe' => 'required',
            'no_seri' => 'required',
            'kondisi_alat' => 'required',
            'lokasi' => 'required',
        ]);
        // dd($request);

        $create=Alat::create($request->all());

        return redirect()->route('alat.index')
            ->with('success', 'Data berhasil ditambahkan');
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
        $alat = Alat::findOrFail($id);

        return view('alat.edit', compact('alat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_alat' => 'required',
            'tahun_pembelian' => 'required',
            'merek' => 'required',
            'tipe' => 'required',
            'no_seri' => 'required',
            'kondisi_alat' => 'required',
            'lokasi' => 'required',
        ]);

        $alat = Alat::findOrFail($id);

        $alat->update($request->all());

        return redirect()->route('alat.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alat = Alat::findOrFail($id);

        $alat->delete();

        return redirect()->route('alat.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
