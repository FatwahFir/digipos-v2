@extends('layouts.master')
@push('css')
    <link href="{{ asset('') }}vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('') }}vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
@endpush
@section('content')
<div class="main-content">
    <div class="title">
        Data Gizi
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Gizi</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <select class="form-control form-select filter-select" name="id_puskesmas" id="id_puskesmas">
                                    <option value="">-Puskesmas-</option>
                                    @foreach ($puskesmas as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_puskesmas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control form-select filter-select" name="id_year" id="id_year">
                                    <option value="">-Tahun-</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year->year }}">{{ $year->year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control form-select" name="id_month" id="id_month">
                                    <option value="">-Bulan-</option>
                                    @foreach ($months as $month)
                                        <option value="{{ $month->month }}">{{ $month->month }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{ $dataTable->table() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Action --}}
    <div class="modal fade" id="modalAction" tabindex="-1" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            
        </div>
    </div>
    
    {{-- Modal Detail --}}
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            
        </div>
    </div>
    
    {{-- Modal Data anak  --}}
    <div class="modal fade" id="modalDataAnak" tabindex="-1" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            
        </div>
    </div>

</div>
@endsection
@push('js')
    <script src="{{ asset('') }}vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('') }}vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    {{ $dataTable->scripts() }}
    <script>

        const modal = new bootstrap.Modal($('#modalAction'));
        const modalDetail = new bootstrap.Modal($('#modalDetail'));
        const modalDataAnak = new bootstrap.Modal($('#modalDataAnak'));

        //DetailGizi
        $('#gizi-table').on('click','.detail', function(){
            let data = $(this).data()
            let id = data.id
            let jenis = data.jenis
            $.ajax({
                method: 'get',
                url: `{{ url('gizi/data-gizi/') }}/${id}`,
                success: function(res){
                    $('#modalDetail').find('.modal-dialog').html(res);
                    modalDetail.show()
                }
            })
        })
        // sorting

        $(document).ready(function(){

            let table = $('#gizi-table')
            // console.log(table)
            $('#id_puskesmas').on('change' , function(){
                table.on('preXhr.dt', function ( e, settings, data ) {
                data.id_puskesmas = $('#id_puskesmas').val();
                })

                table.DataTable().ajax.reload()
            })
            $('#id_year').on('change' , function(){
                table.on('preXhr.dt', function ( e, settings, data ) {
                data.id_year = $('#id_year').val();
                })

                table.DataTable().ajax.reload()
            })
            $('#id_month').on('change' , function(){
                table.on('preXhr.dt', function ( e, settings, data ) {
                data.id_month = $('#id_month').val();
                })

                table.DataTable().ajax.reload()
            })
            $('.buttons-reset').on('click', function(){
                $('#id_puskesmas').prop('selectedIndex',0)
                $('#id_year').prop('selectedIndex',0)
                $('#id_month').prop('selectedIndex',0)
                window.LaravelDataTables["gizi-table"].ajax.reload()
            })
        })
 
            
        
        //DetailGizi
        $('#gizi-table').on('click','.data-anak', function(){
            let data = $(this).data()
            let id = data.id
            let jenis = data.jenis
            $.ajax({
                method: 'get',
                url: `{{ url('gizi/data-gizi/data-anak') }}/${id}`,
                success: function(res){
                    $('#modalDataAnak').find('.modal-dialog').html(res);
                    modalDataAnak.show()
                }
            })
        })
        //edit gizi
        $('#gizi-table').on('click','.action', function(){
            let data = $(this).data()
            let id = data.id
            let jenis = data.jenis

            if(jenis == 'delete'){

                Swal.fire({
                    title: 'Apa anda yakin?',
                    text: "Data yang sudah dihapus tidak dapat dikembalikan",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'DELETE',
                            url: `{{ url('gizi/data-gizi/') }}/${id}`,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(res){
                                window.LaravelDataTables["gizi-table"].ajax.reload()
                                Swal.fire(
                                    res.status,
                                    res.message,
                                    'success'
                                )
                            }
                        })
                    }
                })
                return
            }

            $.ajax({
                method: 'get',
                url: `{{ url('gizi/data-gizi/') }}/${id}/edit`,
                success: function(res){
                    $('#modalAction').find('.modal-dialog').html(res);
                    modal.show()
                    store()
                }
            })
        })

        function store(){
            $('#formAction').on('submit', function(e){
                e.preventDefault();

                const _form = this
                const formData = new FormData(_form);
                const url = this.getAttribute('action')

                $.ajax({
                    method: 'POST',
                    url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res){
                        $('#modalAction').find('.modal-dialog').html(res)
                        window.LaravelDataTables["gizi-table"].ajax.reload()
                        Swal.fire({
                            title: res.status,
                            text: res.message,
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        })
                        modal.hide()
                    },
                    error: function(res){
                        let errors = res.responseJSON?.errors
                        $(_form).find('.text-danger.text-small').remove()
                        if(errors){
                            for(const [key, value] of Object.entries(errors)){
                                $(`[name='${key}']`).parent().append(`<sp class="text-danger text-small">${value}</sp>`)
                                $(`[name='${key}']`).addClass('is-invalid')
                            }
                        }
                    }
                })
            })

        }

    </script>
@endpush