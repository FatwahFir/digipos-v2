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
                            <form action="{{route('update_password' , auth()->user()->id)}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="newPasswordInput" class="form-label">New Password</label>
                                        <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                            placeholder="New Password">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                        <input name="new_password_confirmation" type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="confirmNewPasswordInput"
                                            placeholder="Confirm New Password">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="text mt-3">
                                        <button class="btn btn-success submit">Submit</button>
                                        <a href="/dashboard" class="btn btn-danger my-1">Cancel</a>
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
            
            var newPassword = $('#newPasswordInput').val();
            var confirmNewPassword = $('#confirmNewPasswordInput').val();

            if(confirmNewPassword != newPassword) {
                swal({
                    title: "New Password Match!",
                    text: "Passwords must match",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ok",
            })

        }else if(confirmNewPassword == "" && newPassword == ""){
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
                title: 'Berhasil Update password?',
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
                        }, 2000);
                }
                 setTimeout(() => {
                            location.reload()
                        }, 2000);



        })
    </script>
@endpush