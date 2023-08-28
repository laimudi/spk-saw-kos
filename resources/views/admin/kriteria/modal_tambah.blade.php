<div class="modal fade" id="tambahKriteria" tabindex="-1" aria-labelledby="modalTambahKriteria" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahKriteria">Tambah Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kriteria.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama_kriteria" id="nama_kriteria" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="bobot">Bobot</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="bobot" id="bobot" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="atribut">Atribut</label>
                        <select class="form-select" name="atribut" id="atribut" required>
                            <option selected>--Pilih Atribut--</option>
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                        </select>
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