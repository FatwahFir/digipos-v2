<div class="modal-content">
    <form id="formAction" action="{{ $jenisImunisasi->id ? route('jenis-imunisasi.update', $jenisImunisasi->id) : route('jenis-imunisasi.store') }}" method="POST">
        @csrf
        @if ($jenisImunisasi->id)
            @method('put')
        @endif
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">{{ $jenisImunisasi->id ? 'Ubah' : 'Tambah' }} Jenis Imunisasi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama_imunisasi" class="form-label">Jenis Imunisasi</label>
                <input type="text" placeholder="Jenis imunisasi.." value="{{ $jenisImunisasi->nama_imunisasi }}"  name="nama_imunisasi" class="form-control" id="nama_imunisasi">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">{{ $jenisImunisasi->id ? 'Simpan perubahan' : 'Simpan' }}</button>
        </div>
    </form>
</div>