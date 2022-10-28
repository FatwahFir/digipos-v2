<div class="modal-content">
    <form id="formAction" action="{{ $desa->id ? route('desa.update', $desa->id) : route('desa.store') }}" method="POST">
        @csrf
        @if ($desa->id)
            @method('put')
        @endif
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Desa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama_desa" class="form-label">Nama Desa</label>
                <input type="text" placeholder="Nama Desa.." value="{{ $desa->nama_desa }}"  name="nama_desa" class="form-control" id="name">
            </div>
            <select class="form-select mb-3" aria-label="Default select example" name="id_kecamatan">
                <option value="">--</option>
                @foreach ($kecamatan as $data)
                    <option value="{{ $data->id }}" {{ $data->id == $desa->id_kecamatan ? 'selected' : '' }} >{{ $data->nama_kecamatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">{{ $desa->id ? 'Simpan perubahan' : 'Simpan' }}</button>
        </div>
    </form>
</div>