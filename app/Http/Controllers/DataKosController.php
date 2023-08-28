<?php

namespace App\Http\Controllers;

use App\Models\Datakos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataKosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kos = Datakos::all();
        return view('admin.kos.index', compact('kos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $gambar->store('gambar-kos', 'public');

        $kos = Datakos::create([
            'nama_kos' => $request->nama_kos,
            'alamat' => $request->alamat,
            'jarak' => $request->jarak,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'gambar' => $gambar->hashName(),
        ]);

        if ($kos) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Data Berhasil Ditambah');
        }

        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kos = Datakos::findOrFail($id);
        $kos->update([
            'nama_kos' => $request->nama_kos
        ]);

        if ($kos) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Data Berhasil Diedit');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kos = Datakos::destroy($id);

        if ($kos) {
            Session::flash('hapus', 'success');
            Session::flash('message', 'Data Berhasil Dihapus');
        }

        return redirect()->back();
    }
}
