<div class="modal-content">
    <form id="formAction" action="{{ $kecamatan->id ? route('kecamatan.update', $kecamatan->id) : route('kecamatan.store') }}" method="POST">
        @csrf
        @if ($kecamatan->id)
            @method('put')
        @endif
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Kecamatan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama_kecamatan" class="form-label">Nama Kecamatan</label>
                <input type="text" placeholder="Nama Kecamatan.." value="{{ $kecamatan->nama_kecamatan }}" name="nama_kecamatan" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="kodepos" class="form-label">Kode Pos</label>
                <input type="text" placeholder="Kode Pos.." value="{{ $kecamatan->kodepos }}" name="kodepos" class="form-control" id="email">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">{{ $kecamatan->id ? 'Simpan perubahan' : 'Simpan' }}</button>
        </div>
    </form>
</div>