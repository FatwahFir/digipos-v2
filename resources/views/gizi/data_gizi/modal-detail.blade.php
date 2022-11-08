<div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Detail Data Gizi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h3>{{ $gizi->pasien->nama_anak }}</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Berat Badan</td>
                        <td>{{ $gizi->bb }}</td>
                    </tr>
                    <tr>
                        <td>Panjang Badan/Tinggi Badan</td>
                        <td>{{ $gizi->pb_tb }}</td>
                    </tr>
                    <tr>
                        <td>Cara Ukur</td>
                        <td>{{ $gizi->cara_ukur }}</td>
                    </tr>
                    <tr>
                        <td>Asi Eksklusif</td>
                        <td>{{ $gizi->asi_eks == 1? 'Sudah dikasih':'Belum dikasih' }}</td>
                    </tr>
                    <tr>
                        <td>Vitamin A</td>
                        <td>{{ $gizi->vit_a == 1? 'Sudah dikasih':'Belum dikasih' }}</td>
                    </tr>
                </tbody>
            </table>
            <h3>Status Gizi</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>BB/U</td>
                        <td>{{ $gizi->statusGizi->bb_u }}</td>
                    </tr>
                    <tr>
                        <td>PB_TB/U</td>
                        <td>{{ $gizi->statusGizi->pb_tb_u }}</td>
                    </tr>
                    <tr>
                        <td>PB_TB/BB</td>
                        <td>{{ $gizi->statusGizi->bb_pb_tb }}</td>
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