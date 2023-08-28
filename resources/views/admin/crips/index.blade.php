@extends('layouts.app')

@section('title', 'Admin | Crips')

@section('content')
<div class="pagetitle">
    <h1>Crips</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Crips</li>
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
    @if (Session::has('edit'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (Session::has('hapus'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="col-12 col-md-12 order-md-12 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                      <button type="button" class="btn btn-outline-primary"
                      data-bs-toggle="modal" data-bs-target="#tambahCrips">
                      Tambah Crips
                      </button>
                  </li>
                  @include('admin.crips.modal_tambah')
                </ol>
              </nav>
              
            </div>
        </div>
        <div class="card-body shadow">
            <h5 class="card-title">Data Crips</h5>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kriteria</th>
                            <th>Nilai</th>
                            <th>Bobot</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($crips as $crip)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $crip->kriteria->nama_kriteria }}</td>
                            <td>{{ $crip->nama_crips }}</td>
                            <td>{{ $crip->bobot }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal" data-bs-target="#editCrips-{{ $crip->id }}">
                                    <i class="ri-edit-box-line"></i>
                                </button>
                                <form action="{{ route('crips.destroy', $crip->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="ri-delete-bin-6-line"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @include('admin.crips.modal_edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection