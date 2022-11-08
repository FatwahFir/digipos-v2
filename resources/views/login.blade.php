<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('')}}assets/css/loginTempplate.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
	
	<img class="wave" src="assets/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/images/bg.svg">
		</div>
		<div class="login-content">
			<form action="{{ route('login') }}" method="post">
				@csrf
				<img src="assets/images/avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
				<div class="i">
						<i class="fas fa-user"></i>
				</div>
				<div class="div">
						<h5>Username</h5>
						<input type="text" class="input @error('username') is-invalid @enderror" name="username">
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
				</div>
				</div>
				<div class="input-div pass">
				<div class="i"> 
						<i class="fas fa-lock"></i>
				</div>
				<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="password">
				</div>
				</div>
				<a href="#">Forgot Password?</a>
                <button class="btn" type="submit">Log in</button>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('') }}assets/js/loginTemplate.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
