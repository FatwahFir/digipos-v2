<?php

namespace App\DataTables;

use App\Models\Imunisasi;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DataImunisasiDataTable extends DataTable
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
            ->addColumn('action', function ($Imunisasi){
                return '
                    <button class="btn btn-info btn-sm action" data-id="'.$Imunisasi->id.'" data-jenis="edit"><i class="ti-pencil"></i></button>
                    <button class="btn btn-danger btn-sm action" data-id="'.$Imunisasi->id.'" data-jenis="delete"><i class="ti-trash"></i></button>';
            })
            ->addColumn('detail', function ($Imunisasi){
                return '
                    <button class="btn btn-primary btn-sm detail" data-id="'.$Imunisasi->id.'"><i class="ti-eye"></i> Detail</button>';
            })
            ->addColumn('data_anak', function ($Imunisasi){
                return '
                    <button class="btn btn-warning btn-sm data-anak" data-id="'.$Imunisasi->id.'"><i class="ti-search"></i> Detail</button>';
            })
            ->addIndexColumn()
            ->addColumn('pasien', function ($Imunisasi){
                return $Imunisasi->pasien->nama_anak;
            })
            ->addColumn('nama_imunisasi', function ($Imunisasi){
                return $Imunisasi->jenis_imunisasi->nama_imunisasi;
            })
            ->addColumn('posyandu', function ($Imunisasi){
                return '<span class="badge bg-success">'.$Imunisasi->pasien->posyandu->nama_posyandu.'</span>';
            })
            ->setRowId('id')
            ->rawColumns(['detail','action','posyandu', 'data_anak']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Imunisasi $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Imunisasi $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('dataImunisasi-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->autoWidth(false)
                    ->responsive(true)
                    // ->dom('Bfrtip')
                    ->orderBy(1);
                    // ->buttons(
                    //     Button::make('create'),
                    //     Button::make('export'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // );
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
            Column::make('tgl_imunisasi')->addClass('text-center'),
            Column::make('pasien')->addClass('text-center')->orderable(false),
            Column::make('nama_imunisasi')->addClass('text-center')->orderable(false),

            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Imunisasi_' . date('YmdHis');
    }
}
