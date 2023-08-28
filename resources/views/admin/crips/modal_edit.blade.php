<div class="modal fade" id="editCrips-{{$crip->id}}" tabindex="-1" aria-labelledby="modalEditCrips" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditcrips">Edit Crips</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('crips.update', $crip->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label" for="kriteria_id">Nama Kriteria</label>
                    <select class="form-select" name="kriteria_id" id="kriteria_id" required>
                        <option value="{{ $crip->kriteria->id }}">{{ $crip->kriteria->nama_kriteria }}</option>
                        @foreach ($kriterias as $kriteria)
                            <option value="{{ $kriteria->id }}">{{ $kriteria->nama_kriteria }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_crips">Nilai</label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nama_crips" id="nama_crips" value="{{ $crip->nama_crips }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="bobot">Bobot</label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="bobot" id="bobot" value="{{ $crip->bobot }}" required>
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