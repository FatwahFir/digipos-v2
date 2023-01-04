<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="largeModalLabel">Detail Data imunisasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <h3>{{ $Imunisasi->pasien->nama_anak }}</h3>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Berat Badan</td>
                    <td>{{ $imunisasi->bb }}</td>
                </tr>
                <tr>
                    <td>Panjang Badan/Tinggi Badan</td>
                    <td>{{ $imunisasi->pb_tb }}</td>
                </tr>
                <tr>
                    <td>Cara Ukur</td>
                    <td>{{ $imunisasi->cara_ukur }}</td>
                </tr>
                <tr>
                    <td>Asi Eksklusif</td>
                    <td>{{ $imunisasi->asi_eks == 1? 'Sudah dikasih':'Belum dikasih' }}</td>
                </tr>
                <tr>
                    <td>Vitamin A</td>
                    <td>{{ $imunisasi->vit_a == 1? 'Sudah dikasih':'Belum dikasih' }}</td>
                </tr>
            </tbody>
        </table>
        <h3>Status imunisasi</h3>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>BB/U</td>
                    <td>{{ $imunisasi->statusimunisasi->bb_u }}</td>
                </tr>
                <tr>
                    <td>PB_TB/U</td>
                    <td>{{ $imunisasi->statusimunisasi->pb_tb_u }}</td>
                </tr>
                <tr>
                    <td>PB_TB/BB</td>
                    <td>{{ $imunisasi->statusimunisasi->bb_pb_tb }}</td>
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