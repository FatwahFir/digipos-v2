<div class="modal-content">
    <form id="formAction" action="{{ $gizi->no_pemeriksaan_gizi ? route('data-gizi.update', $gizi->no_pemeriksaan_gizi) : route('data-gizi.store') }}" method="POST">
        @csrf
        @if ($gizi->no_pemeriksaan_gizi)
            @method('put')
        @endif
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">{{ $gizi->no_pemeriksaan_gizi ? 'Edit Data CheckUp':'CheckUp' }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="id_pasien" value="{{ $gizi->no_pemeriksaan_gizi ? $gizi->pasien->id : $pasien->id }}">
            <div class="mb-3">
                <label for="nama_anak" class="form-label">Nama Anak</label>
                <input type="text" placeholder="Nama anak.." value="{{ $gizi->no_pemeriksaan_gizi? $gizi->pasien->nama_anak : $pasien->nama_anak}}" disabled name="nama_anak" class="form-control" id="nama_anak">
            </div>
            {{-- <div class="mb-3">
                <label for="tgl_periksa" class="form-label">Tanggal Periksa</label>
                <input type="date" placeholder="Tanggal periksa.." value="{{ $gizi->tgl_periksa }}"  name="tgl_periksa" class="form-control" id="tgl_periksa">
            </div> --}}
            <div class="mb-3">
                <label for="bb" class="form-label">Berat Badan</label>
                <input type="text" placeholder="Berat badan" value="{{ $gizi->bb}}" name="bb" class="form-control" id="bb">
            </div>
            <div class="mb-3">
                <label for="pb_tb" class="form-label">Panjang Badan/Tinggi Badan</label>
                <input type="text" placeholder="Pajang badan/Tinggi badan (cm).." value="{{ $gizi->pb_tb}}" name="pb_tb" class="form-control" id="pb_tb">
            </div>
            <div class="col-md-12 mb-3">
                <label>Asi Eks</label>
                <select class="form-select " name="asi_eks">
                    <option>--</option>
                    <option value="1"{{ $gizi->asi_eks == 1 ? 'selected' : '' }}>Sudah diberikan</option>
                    <option value="2"{{ $gizi->asi_eks == 2 ? 'selected' : '' }}>Belum diberikan</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label>Vitamin A</label>
                <select class="form-select " name="vit_a">
                    <option>--</option>
                    <option value="1"{{ $gizi->vit_a == 1 ? 'selected' : '' }}>Sudah diberikan</option>
                    <option value="2"{{ $gizi->vit_a == 2 ? 'selected' : '' }}>Belum diberikan</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label>Validasi</label>
                <select class="form-select " name="validasi">
                    <option>--</option>
                    <option value="1" {{ $gizi->validasi == 1 ? 'selected' : '' }}>Sudah divalidasi</option>
                    <option value="2" {{ $gizi->validasi == 2 ? 'selected' : '' }}>Belum divalidasi</option>
                </select>
            </div>
            {{-- <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" placeholder="NIK.." value="{{ $gizi->nik }}"  name="nik" class="form-control" id="nik">
            </div>
            <div class="col-md-12 mb-3">
                <label>Keluaga Dari</label>
                <select class="form-select " name="no_kk">
                    <option>--</option>
                    @foreach($keluarga as $data)
                    <option value="{{ $data->no_kk }}"{{ $data->no_kk == $gizi->no_kk ? 'selected' : '' }}>{{ $data->nama_ayah }}</option>
                    @endforeach
                </select>
            </div> --}}
            {{-- <div class="mb-3">
                <label for="no_kk" class="form-label">No KK</label>
                <input type="text" placeholder="No KK.." value="{{ $gizi->no_kk }}"  name="no_kk" class="form-control" id="no_kk">
            </div> --}}
            {{-- <div class="mb-3">
                <label for="anak_ke" class="form-label">Anak Ke-</label>
                <input type="text" placeholder="Anak ke-" value="{{ $gizi->anak_ke }}"  name="anak_ke" class="form-control" id="anak_ke">
            </div>
            <div class="mb-3">
                <label for="bb_lahir" class="form-label">Berat Badan</label>
                <input type="text" placeholder="Berat badan lahir.." value="{{ $gizi->bb_lahir }}"  name="bb_lahir" class="form-control" id="bb_lahir">
            </div>
            <div class="mb-3">
                <label for="pb_lahir" class="form-label">Tinggi Badan</label>
                <input type="text" placeholder="Tinggi badan lahir.." value="{{ $gizi->pb_lahir }}"  name="pb_lahir" class="form-control" id="pb_lahir">
            </div>
            <div class="mb-3">
                <label for="kia" class="form-label">KIA</label>
                <input type="text" placeholder="KIA.." value="{{ $gizi->kia }}"  name="kia" class="form-control" id="kia">
            </div>
            <div class="mb-3">
                <label for="imd" class="form-label">IMD</label>
                <input type="text" placeholder="IMD.." value="{{ $gizi->imd }}"  name="imd" class="form-control" id="imd">
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" placeholder="Tanggal lahir.." value="{{ $gizi->tgl_lahir }}"  name="tgl_lahir" class="form-control" id="tgl_lahir">
            </div>
            <div class="row mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="1"
                        value="Laki-Laki" name="jk" {{ $gizi->jk == 'Laki-Laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="2"
                        value="Perempuan" name="jk" {{ $gizi->jk == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="2">Perempuan</label>
                    </div> --}}
                {{-- </div>
            </div> --}}
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">{{ $gizi->no_pemeriksaan_gizi ? 'Simpan perubahan' : 'Simpan' }}</button>
        </div>
    </form>
</div>