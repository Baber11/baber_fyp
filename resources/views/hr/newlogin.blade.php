@include('hr.head')
<title>Login</title>
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/mockup1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					 HR Login
				</span>
				
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
					@csrf

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input id="email" type="email" class=" input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Enter Email Address " required data-msg="">

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" type="password" class=" input100 @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="Password" required data-msg="">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="row ">
						<div class="col-md-7"></div>
						<div class="col-md-4 col-11 mt-4 text-right">
							<a href="{{ url('/newforget') }}" style="text-decoration: none !important;"><small class=" mt-3 btn-link"><i style="color: #c62585;"> forget password?</i>
							</small></a>
							</div>
						</div>
						<!-- <div class="row mt-2" >
							<div class="col-md-4"></div>
							<div class="col-md-7 col-11  text-right">
								<small class="  "><i>Do you have an account? <a href="{{ route('register') }}"> <small class=" mt-3 btn-link" 
									></small>signup</a></i></small>
								</div>
							</div> -->
						</form>
					</div>
				</div>
			</div>
			<div id="dropDownSelect1"></div>
		</body>
		</html>