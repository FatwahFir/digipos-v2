<div class="modal-content">
    <form id="formAction" action="{{ $pasien->id ? route('data-pasien.update', $pasien->id) : route('data-pasien.store') }}" method="POST">
        @csrf
        @if ($pasien->id)
            @method('put')
        @endif
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">{{ $pasien->id ? 'Ubah':'Tambah' }} Posyandu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama_anak" class="form-label">Nama Anak</label>
                <input type="text" placeholder="Nama anak.." value="{{ $pasien->nama_anak}}"  name="nama_anak" class="form-control" id="nama_anak">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" placeholder="NIK.." value="{{ $pasien->nik }}"  name="nik" class="form-control" id="nik">
            </div>
            <div class="col-md-12 mb-3">
                <label>Keluaga Dari</label>
                <select class="form-select " name="no_kk">
                    <option>--</option>
                    @foreach($keluarga as $data)
                    <option value="{{ $data->no_kk }}"{{ $data->no_kk == $pasien->no_kk ? 'selected' : '' }}>{{ $data->nama_ayah }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="mb-3">
                <label for="no_kk" class="form-label">No KK</label>
                <input type="text" placeholder="No KK.." value="{{ $pasien->no_kk }}"  name="no_kk" class="form-control" id="no_kk">
            </div> --}}
            <div class="mb-3">
                <label for="anak_ke" class="form-label">Anak Ke-</label>
                <input type="text" placeholder="Anak ke-" value="{{ $pasien->anak_ke }}"  name="anak_ke" class="form-control" id="anak_ke">
            </div>
            <div class="mb-3">
                <label for="bb_lahir" class="form-label">Berat Badan</label>
                <input type="text" placeholder="Berat badan lahir.." value="{{ $pasien->bb_lahir }}"  name="bb_lahir" class="form-control" id="bb_lahir">
            </div>
            <div class="mb-3">
                <label for="pb_lahir" class="form-label">Tinggi Badan</label>
                <input type="text" placeholder="Tinggi badan lahir.." value="{{ $pasien->pb_lahir }}"  name="pb_lahir" class="form-control" id="pb_lahir">
            </div>
            <div class="mb-3">
                <label for="kia" class="form-label">KIA</label>
                <input type="text" placeholder="KIA.." value="{{ $pasien->kia }}"  name="kia" class="form-control" id="kia">
            </div>
            <div class="mb-3">
                <label for="imd" class="form-label">IMD</label>
                <input type="text" placeholder="IMD.." value="{{ $pasien->imd }}"  name="imd" class="form-control" id="imd">
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" placeholder="Tanggal lahir.." value="{{ $pasien->tgl_lahir }}"  name="tgl_lahir" class="form-control" id="tgl_lahir">
            </div>
            <div class="row mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="1"
                        value="Laki-Laki" name="jk" {{ $pasien->jk == 'Laki-Laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="2"
                        value="Perempuan" name="jk" {{ $pasien->jk == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="2">Perempuan</label>
                    </div>
                </div>
            </div>
            <label class="form-label">Posyandu</label>
            <select class="form-select mb-3" aria-label="Default select example" name="id_posyandu">
                <option>--</option>
                @foreach ($posyandu as $data)
                    <option value="{{ $data->id }}" {{ $data->id == $pasien->id_posyandu ? 'selected' : '' }} >{{ $data->nama_posyandu }}</option>
                @endforeach
            </select>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">{{ $pasien->id ? 'Simpan perubahan' : 'Simpan' }}</button>
        </div>
    </form>
</div>