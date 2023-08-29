@extends('layouts.app')

@section('title', 'Admin | Penilaian')

@section('content')
<div class="pagetitle">
    <h1>Penilaian</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Penilaian</li>
        </ol>
    </nav>
</div>

<section class="section">

    <div class="card">
        <div class="card-header">
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#tambahNilaiAlternatif">
                    Tambah Nilai
                </button>
            </div>

            @include('admin.nilai_alternatif.modal_tambah')
        </div>
        <div class="card-body shadow">
            <h5 class="card-title">Nilai Alternatif</h5>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">Nama Alternatif</th>
                            <th colspan="{{ count($kriterias) }}" class="text-center">Kriteria</th>
                        <tr>
                            @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->nama_kriteria }}</th>
                            @endforeach
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($nilaiAlternatif as $nilai)
                        <tr>
                            <td>{{ $nilai->alternatif->nama_kos }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="{{ count($kriterias) + 1 }}" class="text-center">Tidak Ada Data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection