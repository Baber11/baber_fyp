@include('hr.head')
<title>Admin Login</title>
<link rel="stylesheet" href="{{ asset('css/admin_side_styling.css')}}" id="theme-stylesheet">
<link rel="stylesheet" href="{{ asset('css/admin_login_sigup_styling.css')}}" id="theme-stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('/css/admin_login_sigup_styling.css')}}">
<body>
	
	<div class="limiter">
		<div class="container-login100"  style="background-image: url('mockup4.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Admin Login
				</span>
				@if(Session::get('error'))
				<div class="col-md-12">
					<div class="alert alert-danger">{{ Session::get('error') }}</div>    
				</div>        
				@endif
				<form method="POST" action="{{ route('admin.auth') }}"
				class="login100-form validate-form p-b-33 p-t-5">
				@csrf
				

				<div class="wrap-input100 validate-input" data-validate = "Enter Name">
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
					 	<button type="submit" class="login100-form-btn">Login</button>
					 </div>
					 <div class="row ">
					 	<div class="col-md-8"></div>
						<!-- <div class="col-md-4">
							<a  href="{{ route('password.request') }}"><small class=" mt-3 "><i> forget password?</i></small></a>
						</div> -->
					</div>
					<div class="row m-t-32" >
						<div class="col-md-5"></div>
						<!-- <div class="col-md-7">
							<small class=""><i><strong>Do you have an account? </strong>
								<a href="adminsigin" class="text-dark mx-1"> signup</a></i>
							</small>
						</div> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>