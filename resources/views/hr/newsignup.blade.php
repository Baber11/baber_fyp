@include('hr.head')
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/mockup2.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					HR SignUp
				</span>
				<form method="POST" class="login100-form validate-form p-b-33 p-t-5" action="{{ route('register') }}">
					@csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input id="registration_num" type="number" class="input100 @error('registration_num') is-invalid @enderror" name="registration_num" value="{{ old('registration_num') }}" required autocomplete="off"   placeholder="Registration Number">
						@error('registration_num')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off"   placeholder="User Name">
						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Email Address" >
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror	
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="off"
						placeholder="Password" >
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="off"
						placeholder="Confirm Password" >

						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							{{ __('SignUp') }}
						</button>
					</div>
					<div class="row m-t-32">
						<div class="col-md-4"></div>
						<div class="col-md-7 col-11 p-0 text-right">
							<small class="  "><i>Already have an account? <a href="{{ route('login') }}">Login</a></i></small>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>