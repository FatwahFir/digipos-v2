@extends('layouts.master')
@push('css')
    <link href="{{ asset('') }}vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('') }}vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
@endpush
@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="main-content">
    <div class="title">
        Profile Settings
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Profile Settings</h3>
                    </div>
                    <div class="col-xl-6">
                        <div class="card-body"> 
                            <form action="{{ route('profile.update',$user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @if($user->AdminPuskesmas)

                                    <div class="form-group">
                                        <label for="address">Username :</label>
                                        <input type="text" class="form-control" id="username" name="username" readonly placeholder="text address" value="{{$user->username }}">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{$user->AdminPuskesmas->nama ?? '-'}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone :</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$user->AdminPuskesmas->phone ?? '-'}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="puskesmas">Puskesmas :</label>
                                        <input type="text" class="form-control" id="phone" name="puskesmas" readonly placeholder="Phone" value="{{$user->AdminPuskesmas->Puskesmas->nama_puskesmas ?? '-'}}">
                                    </div> 

                                @elseif($user->bidan)

                                    <div class="form-group">
                                        <label for="address">Username :</label>
                                        <input type="text" class="form-control" id="username" name="username" readonly placeholder="text address" value="{{$user->username }}">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{$user->bidan->nama ?? '-'}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone :</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$user->bidan->phone ?? '-'}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="puskesmas">Puskesmas :</label>
                                        <input type="text" class="form-control" id="phone" name="puskesmas" readonly placeholder="Phone" value="{{$user->bidan->puskesmas->nama_puskesmas ?? '-'}}">
                                    </div> 

                                @elseif($user->kader)

                                    <div class="form-group">
                                        <label for="address">Username :</label>
                                        <input type="text" class="form-control" id="username" name="username" readonly placeholder="text address" value="{{$user->username }}">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{$user->kader->nama ?? '-'}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone :</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$user->kader->phone ??  '-'}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="posyandu">Posyandu :</label>
                                        <input type="text" class="form-control" id="phone" name="posyandu" readonly placeholder="posyandu" value="{{$user->kader->posyandu->nama_posyandu}}">
                                    </div> 

                                @else

                                    <div class="form-group">
                                        <label for="address">Username :</label>
                                        <input type="text" class="form-control" id="username" name="username" readonly placeholder="text address" value="{{$user->username }}">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{$user->admin->nama ?? $user->nama  ??  '-'}}">
                                    </div>

                                @endif  

                                <div class="text-start mt-3">
                                    <button type="submit" class="btn btn-primary my-1 submit">Update</button>
                                    <a href="javascript:void(0)" class="btn btn-danger my-1">Cancel</a>
                                </div>
                                <div class="text mt-3">
                                    <a href="{{ route('ubah_password' , $user->id) }}" class="btn btn-warning my-1">Ubah Password Anda ?</a>
                                </div>
                            </form>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAction" tabindex="-1" aria-labelledby="largeModalLabel"
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
    {{-- {{ $dataTable->scripts() }} --}}
    <script>


$('.submit').on('click', function(){
    
            var nama = $('#nama').val();
            var phone = $('#phone').val();

            if(nama== "" && password == "") {
                swal({
                title: "All fields are required!",
                text: "Please enter all fields",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ok",
        })
    }
        else {
            Swal.fire({
                title: 'Berhasil Update profile',
                icon: 'success',
   
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Updated!',
                    'Your file has been updated.',
                    'success'
                    )
                }
                })
                setTimeout(() => {
                            location.reload()
                        }, 1000);
        }
                 setTimeout(() => {
                            location.reload()
                        }, 1000);



        })
    </script>
@endpush