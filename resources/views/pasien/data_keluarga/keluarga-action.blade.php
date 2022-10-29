<div class="modal-content">
    <form id="formAction" action="{{ $keluarga->id ? route('keluarga.update', $keluarga->id) : route('keluarga.store') }}" method="POST">
        @csrf
        @if ($keluarga->id)
            @method('put')
        @endif
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Keluarga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="no_kk" class="form-label">Nomor KK</label>
                <input type="text" placeholder="Nomor Kartu Keluarga.." value="{{ $keluarga->no_kk}}"  name="no_kk" class="form-control" id="no_kk">
            </div>
            <div class="mb-3">
                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                <input type="text" placeholder="Nama ayah.." value="{{ $keluarga->nama_ayah }}"  name="nama_ayah" class="form-control" id="nama_ayah">
            </div>
            <div class="mb-3">
                <label for="nik_ayah" class="form-label">Nik Ayah</label>
                <input type="text" placeholder="Nik ayah.." value="{{ $keluarga->nik_ayah }}"  name="nik_ayah" class="form-control" id="nik_ayah">
            </div>
            <div class="mb-3">
                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                <input type="text" placeholder="Nama ibu.." value="{{ $keluarga->nama_ibu }}"  name="nama_ibu" class="form-control" id="nama_ibu">
            </div>
            <div class="mb-3">
                <label for="nik_ibu" class="form-label">Nik Ibu</label>
                <input type="text" placeholder="Nik ibu.." value="{{ $keluarga->nik_ibu }}"  name="nik_ibu" class="form-control" id="nik_ibu">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" placeholder="Nomor Telepon.." value="{{ $keluarga->no_telp }}"  name="no_telp" class="form-control" id="no_telp">
            </div>
            <label class="form-label">Desa</label>
            <select class="form-select mb-3" aria-label="Default select example" name="id_desa">
                <option>--</option>
                @foreach ($desa as $data)
                    <option value="{{ $data->id }}" {{ $data->id == $keluarga->id_desa ? 'selected' : '' }} >{{ $data->nama_desa }}</option>
                @endforeach
            </select>
            <div class="row mb-3">
                <label class="form-label">Status Ekonomi</label>
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="1"
                            value="1" name="status_ekonomi" {{ $keluarga->status_ekonomi == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="2"
                            value="2" name="status_ekonomi" {{ $keluarga->status_ekonomi == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="2">2</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $keluarga->alamat }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">{{ $keluarga->id ? 'Simpan perubahan' : 'Simpan' }}</button>
        </div>
    </form>
</div>