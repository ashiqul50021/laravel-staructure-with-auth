<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Login</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('admin/images/favicon.png')}}">
	<link href="{{asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign In</h3>
						</div>
						<form  method="POST" action="{{ route('login') }}">
                            @csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input id="dz-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
								<span class="show-pass eye">

									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>

								</span>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
                                    @if (Route::has('password.request'))
									<a href="{{ route('password.request') }}" class="btn-link text-primary">Forgot Password?</a>
                                    @endif
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Sign In</button>
							</div>

							<p class="text-center">Not registered?
								<a class="btn-link text-primary" href="{{route('register')}}">Register</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<
						<div class="login-media text-center">
							<img src="images/login.png" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
 <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('admin/js/deznav-init.js')}}"></script>
<script src="{{asset('admin/js/demo.js')}}"></script>
  <script src="{{asset('admin/js/custom.js')}}"></script>
<script src="{{asset('admin/js/styleSwitcher.js')}}"></script>

</body>
</html>
