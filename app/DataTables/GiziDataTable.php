<?php

namespace App\DataTables;

use App\Models\Gizi;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class GiziDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function ($gizi){
                if(auth()->user()->can('update gizi') && auth()->user()->can('delete gizi')){
                    $action = '<button class="btn btn-info btn-sm action" data-id="'.$gizi->no_pemeriksaan_gizi.'" data-jenis="edit"><i class="ti-pencil"></i></button>
                    <button class="btn btn-danger btn-sm action" data-id="'.$gizi->no_pemeriksaan_gizi.'" data-jenis="delete"><i class="ti-trash"></i></button>';
                }else{
                    $action = 'TIdak Di Izinkan';
                }
                return $action;
            })
            ->addColumn('detail', function ($gizi){
                return '
                    <button class="btn btn-primary btn-sm detail" data-id="'.$gizi->no_pemeriksaan_gizi.'"><i class="ti-eye"></i> Detail</button>';
            })
            ->addColumn('data_anak', function ($gizi){
                return '
                    <button class="btn btn-warning btn-sm data-anak" data-id="'.$gizi->no_pemeriksaan_gizi.'"><i class="ti-search"></i> Detail</button>';
            })
            ->addIndexColumn()
            // ->addColumn('pasien', function ($gizi){
            //     return $gizi->pasien->nama_anak;
            // })
            ->addColumn('jk', function ($gizi){
                return $gizi->pasien->jk;
            })
            ->addColumn('no_kk', function ($gizi){
                return $gizi->pasien->no_kk;
            })
            ->addColumn('nik', function ($gizi){
                return $gizi->pasien->nik;
            })
            ->addColumn('status_ekonomi', function ($gizi){
                return $gizi->pasien->keluarga->status_ekonomi;
            })
            ->addColumn('nama_ortu', function ($gizi){
                return $gizi->pasien->keluarga->nama_ayah
                        .'/'.$gizi->pasien->keluarga->nama_ibu;
            })
            ->addColumn('nik_ayah', function ($gizi){
                return $gizi->pasien->keluarga->nik_ayah;
            })
            ->addColumn('no_telpon', function ($gizi){
                return $gizi->pasien->keluarga->no_telp;
            })
            ->addColumn('bb', function ($gizi){
                return $gizi->bb;
            })
            ->addColumn('pb_tb', function ($gizi){
                return $gizi->pb_tb;
            })
            ->addColumn('cara_ukur', function ($gizi){
                return $gizi->cara_ukur;
            })
            ->addColumn('asi_eksklusif', function ($gizi){
                return $gizi->asi_eks;
            })
            ->addColumn('imd', function ($gizi){
                return $gizi->pasien->imd;
            })
            ->addColumn('vit_a_feb', function ($gizi){
                return $gizi->vit_a;
            })
            ->addColumn('status_gizi', function ($gizi){
                return 'bb_u : ' . $gizi->statusGizi->bb_u . ' pb_tb_u : ' . $gizi->statusGizi->pb_tb_u . ' bb_pb_tb : ' . $gizi->statusGizi->bb_pb_tb;
            })
            ->addColumn('validasi', function ($gizi){
                return $gizi->validasi;
            })
            ->addColumn('posyandu', function ($gizi){
                return '<span class="badge bg-success">'.$gizi->pasien->posyandu->nama_posyandu.'</span>';
            })
            ->addColumn('puskesmas', function ($gizi){
                return '<span class="badge bg-warning">'.$gizi->pasien->posyandu->puskesmas->nama_puskesmas.'</span>';
            })
            ->setRowId('id')
            ->rawColumns(['detail','action','posyandu', 'data_anak' , 'puskesmas']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Gizi $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Gizi $model): QueryBuilder
    {
        // $id = Gizi::pasien()->posyandu->puskesmas->nama_puskesmas;

        // dd($id);

        //data untuk sort
        // $years = Gizi::select(DB::raw('YEAR(tgl_periksa) year'))->groupBy('year')->get();
        // $months = Gizi::select(DB::raw('MONTH(tgl_periksa) month'))->groupBy('month')->get();

        $puskesmasId = request()->get('id_puskesmas');
        $tahun = request()->get('id_year'); 
        $bulan = request()->get('id_month'); 
        // dd($tahun);
        
        return Gizi::with('pasien.posyandu.puskesmas')->when($puskesmasId, function ($query) use ($puskesmasId) {
            $query->whereHas('pasien.posyandu.puskesmas', function ($query) use ($puskesmasId){
                $query->where('id', $puskesmasId);
            });
            
        })
        ->when($tahun, function ($query) use ($tahun){
            $query->where(DB::raw('YEAR(tgl_periksa)'), $tahun);
        })
        ->when($bulan, function ($query) use ($bulan){
            $query->where(DB::raw('MONTH(tgl_periksa)'), $bulan);
        });
        // // return Gizi::with(['pasien.posyandu.puskesmas'])->whereHas('pasien.posyandu.puskesmas', function ($query) use ($puskesmasId) {
        //     $query->where('id', $puskesmasId);
        // });

        // ->orWhen($tahun, function($query) use ($tahun) {
        //     return $query->where('tgl_periksa', $tahun);
        // });

        // $puskesmasId = $this->request->get('id_puskesmas');
        // return Gizi::with('pasien')->when($puskesmasId, function ($query) use ($puskesmasId) {
        //     return $query->where('id_pasien' , $puskesmasId);
        // });

        // $puskesmasId = $this->request->get('id_puskesmas');
        // return Gizi::with('pasien')->when($puskesmasId, function ($query) use ($puskesmasId) {
        //     return $query->where('id_pasien' , $puskesmasId);
        // });
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('gizi-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->autoWidth(false)
                    ->responsive(true)
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('excel')->addClass('btn btn-success mb-3')->pageSize('Legal'),
                        Button::make('reset')->addClass('btn btn-danger mb-3'),
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->searchable(false)->orderable(false)->title('No')->addClass('text-center'),
            Column::make('tgl_periksa')->addClass('text-center'),
            Column::make('puskesmas')->addClass('text-center')->orderable(true),
            Column::make('pasien.posyandu.nama_posyandu')->addClass('text-center')->orderable(false)->title(),
            Column::make('pasien.nama_anak')->addClass('text-center')->orderable(false),
            Column::make('jk')->addClass('text-center')->orderable(false),
            Column::make('usia')->addClass('text-center')->orderable(false),
            Column::make('bb')->addClass('text-center')->orderable(false),
            Column::make('detail')->addClass('text-center')->orderable(false)->width(80)->exportable(false),
            Column::make('data_anak')->addClass('text-center')->orderable(false)->width(80)->exportable(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('no_kk')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('nik')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('status_ekonomi')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('nama_ortu')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('nik_ayah')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('no_telpon')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('bb')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('pb_tb')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('cara_ukur')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('asi_eks')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('imd')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('vit_a')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('status_gizi')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            Column::make('validasi')->visible(false)->addClass('text-center')->orderable(false)->width(80),
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Gizi_' . date('YmdHis');
    }
}
