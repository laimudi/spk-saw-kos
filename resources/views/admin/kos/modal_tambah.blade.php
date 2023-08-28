<div class="modal fade" id="tambahKos" tabindex="-1" aria-labelledby="modalTambahKos" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahKos">Tambah Kos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_kos">Nama Kos</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama_kos" id="nama_kos" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="alamat" id="alamat" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jarak">Jarak</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="jarak" id="jarak" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jenis">Jenis</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="jenis" id="jenis" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="harga" id="harga" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar">Upload Gambar</label>
                        <div class="form-group">
                          <input class="form-control" type="file" id="gambar" name="gambar" required>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>