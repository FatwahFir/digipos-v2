<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

        *{
            margin: 0px;
            padding: 0px;
        }

        body{
            font-family: 'Exo', sans-serif;
        }


        .context {
            width: 100%;
            position: absolute;
            top:50vh;
            
        }

        .context h1{
            text-align: center;
            color: #fff;
            font-size: 50px;
        }


        .area{
            background: #4e54c8;  
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
            width: 100%;
            height:100vh;
        }

        .circles{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li{
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
            
        }

        .circles li:nth-child(1){
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }


        .circles li:nth-child(2){
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3){
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4){
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5){
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6){
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7){
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8){
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9){
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10){
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }



        @keyframes animate {

            0%{
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100%{
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }

        }
    </style>

    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>DigiPosyandu - Login</title>
        <!-- Icons-->
        <link href="{{asset('assets/coreui/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/coreui/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/coreui/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/coreui/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
        <!-- Main styles for this application-->
        <link href="{{asset('assets/coreui/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/coreui/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    </head>

    <body class="app flex-row align-items-center">

        <div class="area" >
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <form method="POST" action="{{ route('login') }}">@csrf
                <div class="container" style="padding-top:10%;">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card-group">
                                <div class="card p-4">
                                    <div class="card-body">
                                        <h1>Login</h1>
                                        <p class="text-muted">Sign In to your account</p>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-user"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" name="username" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-lock"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" name="password" type="password" placeholder="Password">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-primary px-4" type="submit">Login</button>
                                            </div>
                                            <div class="col-6 text-right">
                                                {{-- <button class="btn btn-link px-0" type="button">Forgot password?</button> --}}
												<a href="{{ route('lupa_password') }}" class="btn btn-link px-0">Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                                    <div class="card-body text-center">
                                        <div>
                                            <h2>Sign up</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            {{-- <button class="btn btn-primary active mt-3" type="button">Register Now!</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div >
        
    </body>

    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('assets/coreui/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/@coreui/coreui-pro/dist/js/coreui.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @foreach ($errors->all() as $error)
            swal("Failed!", "{{$error}}", "error");
        @endforeach
    </script>

</html>