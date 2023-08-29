<div class="modal fade" id="tambahNilaiAlternatif" tabindex="-1" aria-labelledby="modalTambahNilaiAlternatif"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahNilaiAlternatif">Tambah Nilai Alternatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('penilaian.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_kos">Nama Alternatif (Kos)</label>
                        <div class="form-group">
                            <select name="alternatif" class="form-select">
                                <option value="">--- Pilih Alternatif ---</option>
                                @foreach ($alternatifs as $alternatif)
                                <option value="{{ $alternatif->id }}">{{ $alternatif->nama_kos }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- ini Optional, jadi bisa dirubah lagi mau di buat seperti apa tampilannya. --}}
                    @foreach ($kriterias as $kriteria)

                    <div class="mb-3">
                        <label for="alamat">{{ $kriteria->nama_kriteria }}</label>
                        <div class="form-group">
                            <select name="crip[]" class="form-select">
                                <option value="">--- Pilih Nilai ---</option>
                                @foreach ($kriteria->crips as $crip)
                                <option value="{{ $crip->id }}">{{ $crip->nama_crips }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>