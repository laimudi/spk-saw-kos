<?php

namespace App\Http\Controllers;

use App\Models\AlternatifCrip;
use App\Models\Datakos;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $datakos = Datakos::with('penilaian.crips')->get();
        // $kriterias = Kriteria::with('crips')->orderBy('nama_kriteria', 'ASC')->get();
        // // return response()->json($kriterias);
        // return view('admin.penilaian.index', compact('datakos', 'kriterias'));
        $nilaiAlternatif = AlternatifCrip::all();
        $kriterias = Kriteria::with('crips')->get();
        $alternatifs = Datakos::all();
        return view('admin.nilai_alternatif.index', compact(['nilaiAlternatif', 'kriterias', 'alternatifs']));
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
        foreach ($request->crip as $crip) {
            NilaiAlternatif::create([
                'crips_id' => $crip,
                'datakos_id' => $request->alternatif,
            ]);
        }

        return redirect()->route('penilaian.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
