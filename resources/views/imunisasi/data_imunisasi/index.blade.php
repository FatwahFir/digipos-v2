@extends('layouts.master')
@push('css')
    <link href="{{ asset('') }}vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('') }}vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
@endpush
@section('content')
<div class="main-content">
    <div class="title">
        Data Imunisasi
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Imunisasi</h4>
                    </div>
                    <div class="card-body">
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
        $('#dataImunisasi-table').on('click','.detail', function(){
            let data = $(this).data()
            let id = data.id
            let jenis = data.jenis
            $.ajax({
                method: 'get',
                url: `{{ url('imunisasi/data-imunisasi/') }}/${id}`,
                success: function(res){
                    $('#modalDetail').find('.modal-dialog').html(res);
                    modalDetail.show()
                }
            })
        })
        
        //DetailGizi
        $('#dataImunisasi-table').on('click','.data-anak', function(){
            let data = $(this).data()
            let id = data.id
            let jenis = data.jenis
            $.ajax({
                method: 'get',
                url: `{{ url('imunisasi/data-imunisasi/data-anak') }}/${id}`,
                success: function(res){
                    $('#modalDataAnak').find('.modal-dialog').html(res);
                    modalDataAnak.show()
                }
            })
        })
        //edit gizi
        $('#dataImunisasi-table').on('click','.action', function(){
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
                            url: `{{ url('imunisasi/data-imunisasi/') }}/${id}`,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(res){
                                window.LaravelDataTables["dataImunisasi-table"].ajax.reload()
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
                url: `{{ url('imunisasi/data-imunisasi/') }}/${id}/edit`,
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
                        window.LaravelDataTables["dataImunisasi-table"].ajax.reload()
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