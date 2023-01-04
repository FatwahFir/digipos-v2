<?php

namespace App\DataTables;

use App\Models\User;
use App\Models\Kader;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class KaderDataTable extends DataTable
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
            ->addColumn('action', function ($kader){
                return '
                    <button class="btn btn-info btn-sm action" data-id="'.$kader->user->id.'" data-jenis="edit"><i class="ti-pencil"></i></button>
                    <button class="btn btn-danger btn-sm action" data-id="'.$kader->user->id.'" data-jenis="delete"><i class="ti-trash"></i></button>';
            })
            // ->addColumn('role', function($user){
            //     return $user->getRoleNames()->first();
            // })
            ->addIndexColumn()
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Kader $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Kader $model): QueryBuilder
    {
        return $model->where("user_id" , "!=" , auth()->id())->newQuery()->with('user');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('kader-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
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
            Column::make('DT_RowIndex')->title('No')->searchable(false)->orderable(false)->addClass('text-center'),
            Column::make('nama')->addClass('text-center')->orderable(false),
            Column::make('user.username')->addClass('text-center')->orderable(false),
            // Column::make('role')->searchable(true)->addClass('text-center')->orderable(false),
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
        return 'Kader_' . date('YmdHis');
    }
}
