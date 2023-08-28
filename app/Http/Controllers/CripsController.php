<?php

namespace App\Http\Controllers;

use App\Models\Crips;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CripsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::select('id', 'nama_kriteria')->get();
        $crips = Crips::orderBy('kriteria_id', 'ASC')->get();
        return view('admin.crips.index', compact('kriterias', 'crips'));
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
        $crips = Crips::create([
            'kriteria_id' => $request->kriteria_id,
            'nama_crips' => $request->nama_crips,
            'bobot' => $request->bobot
        ]);

        if ($crips) {
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
        $crips = Crips::findOrFail($id);
        $crips->update([
            'kriteria_id' => $request->kriteria_id,
            'nama_crips' => $request->nama_crips,
            'bobot' => $request->bobot
        ]);

        if ($crips) {
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
        $crips = Crips::destroy($id);

        if ($crips) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Data Berhasil Diedit');
        }

        return redirect()->back();
    }
}
