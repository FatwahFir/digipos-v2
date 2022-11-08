<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="largeModalLabel">Data Anak & Keluarga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <h3>Data Anak</h3>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>No.Kartu Keluarga</td>
                    <td>{{ $gizi->pasien->no_kk }}</td>
                </tr>
                <tr>
                    <td>No.Induk Kependudukan</td>
                    <td>{{ $gizi->pasien->nik }}</td>
                </tr>
                <tr>
                    <td>Nama Anak</td>
                    <td>{{ $gizi->pasien->nama_anak }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $gizi->pasien->tgl_lahir }}</td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td>{{ $gizi->usia }} Bulan</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $gizi->pasien->jk }} Bulan</td>
                </tr>
                <tr>
                    <td>Anak ke</td>
                    <td>{{ $gizi->pasien->anak_ke }} </td>
                </tr>
                <tr>
                    <td>Berat Badan Lahir</td>
                    <td>{{ $gizi->pasien->bb_lahir }} kg</td>
                </tr>
                <tr>
                    <td>Panjang Badan Lahir</td>
                    <td>{{ $gizi->pasien->pb_lahir }} cm</td>
                </tr>
            </tbody>
        </table>
        <h3>Data Keluarga</h3>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>NIK Ayah</td>
                    <td>{{ $gizi->pasien->keluarga->nik_ayah}}</td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>{{ $gizi->pasien->keluarga->nama_ayah }}</td>
                </tr>
                <tr>
                    <td>NIK Ibu</td>
                    <td>{{ $gizi->pasien->keluarga->nik_ibu}}</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>{{ $gizi->pasien->keluarga->nama_ibu}}</td>
                </tr>
                <tr>
                    <td>Status Ekonomi</td>
                    <td>{{ $gizi->pasien->keluarga->status_ekonomi}}</td>
                </tr>
                <tr>
                    <td>No.Telepon</td>
                    <td>{{ $gizi->pasien->keluarga->no_telp}}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
            data-bs-dismiss="modal">Close</button>
    </div>
</form>
</div>