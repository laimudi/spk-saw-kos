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
    @if (Session::has('tambah'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{ Session::get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
        <form action="{{ route('penilaian.store') }}" method="POST">
        @csrf
            <div class="card-header">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <div class="card-body shadow">
                <h5 class="card-title">Penilaian Alternatif</h5>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Alternatif</th>
                                @foreach ($kriterias as $key => $value)
                                    <th>{{ $value->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datakos as $alt => $valt)
                                <tr>
                                    <td>{{ $valt->nama_kos }}</td>
                                    @if (count($valt->penilaian) > 0)

                                    @else
                                        @foreach ($kriterias as $key => $value)
                                        @foreach ($value->crips as $k_1 => $v_1)
                                        <td>{{ $v_1->nama_crips }}</td>
                                        @endforeach
                                        @endforeach
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td>Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection