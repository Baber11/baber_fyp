@extends('hr.sidenav')

<!-- add employees form start here -->
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button
{
	-webkit-appearance: none;
	margin: 0;
}
</style>
<style>
.switch {
	position: relative;
	display: inline-block;
	width: 60px;
	height: 34px;
}

.switch input { 
	opacity: 0;
	width: 0;
	height: 0;
}

.slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #ccc;
	-webkit-transition: .4s;
	transition: .4s;
}

.slider:before {
	position: absolute;
	content: "";
	height: 26px;
	width: 26px;
	left: 4px;
	bottom: 4px;
	background-color: white;
	-webkit-transition: .4s;
	transition: .4s;
}

input:checked + .slider {
	background-color: #e82f87;
}

input:focus + .slider {
	box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
	-webkit-transform: translateX(26px);
	-ms-transform: translateX(26px);
	transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
	border-radius: 34px;
}

.slider.round:before {
	border-radius: 50%;
}
</style>

@section('empl')
active
@endsection


@section('addemp')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3 mb-3">
				<h1 class="font-weight-bold add_emp_heading"><u> Add New Employees</u></h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card shadow-lg">
			<div class="card-body">
				<div class="row">
					<div class="col-md-7 col-12">
						@if(session()->has('success'))
						<div class="alert alert-success">
							{{session()->get('success')}}
						</div>
						@endif
						<form method="POST" action="{{url('/createemp')}}" id="mybtn" enctype="multipart/form-data">
							@csrf
							<label class="wrapper  mt-2">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" name= "fname" placeholder=" " value="{{ old('fname')}}" autocomplete="off">
									<span class="placeholder"> First Name </span>
									@if($errors->has('fname'))
									<small class="text-danger">
										{{$errors->first('fname')}}
									</small>
									@endif
								</div> 

							</label>
							
							<label class="wrapper mt-4">
								<div class="emp_input_div ">
									<input type="text" name= "lname" class="textfield textfield_forms_resp" placeholder=" " autocomplete="off" value="{{ old('lname')}}">
									<span class="placeholder"> Last Name </span>
									@if($errors->has('lname'))
									<small class="text-danger">
										{{$errors->first('lname')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="text" name= "cnic" class="textfield textfield_forms_resp" placeholder=" " autocomplete="off" value="{{ old('cnic')}}" >
									<span class="placeholder">Employee CNIC </span>
									@if($errors->has('cnic'))
									<small class="text-danger">
										{{$errors->first('cnic')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="date" name= "dob" class="textfield textfield_forms_resp" value="{{ old('dob')}}">
									<span class="placeholder"> Date Of Birth </span>
									@if($errors->has('dob'))
									<small class="text-danger">
										{{$errors->first('dob')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="text" name= "gender" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('gender')}}" >
									<span class="placeholder"> Gender </span>
									@if($errors->has('gender'))
									<small class="text-danger">
										{{$errors->first('gender')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="Email" name= "email" class="textfield textfield_forms_resp" placeholder=" " autocomplete="off" value="{{ old('email')}}">
									<span class="placeholder"> Email </span>
									@if($errors->has('email'))
									<small class="text-danger">
										{{$errors->first('email')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" name= "number" class="textfield textfield_forms_resp" autocomplete="off" placeholder=" " value="{{ old('number')}}">
									<span class="placeholder"> Phone Number </span>
									@if($errors->has('number'))
									<small class="text-danger">
										{{$errors->first('number')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div ">
									<input type="text" name= "address" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('address')}}">
									<span class="placeholder"> Residing Address </span>
									@if($errors->has('address'))
									<small class="text-danger">
										{{$errors->first('address')}}
									</small>
									@endif
								</div> 
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div ">
									<input type="text" name= "city" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('city')}}">
									<span class="placeholder"> City </span>
									@if($errors->has('city'))
									<small class="text-danger">
										{{$errors->first('city')}}
									</small>
									@endif
								</div>
							</label>
							<!-- <label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="text" name= "dept" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('dept')}}">
									<span class="placeholder"> Department </span>
									@if($errors->has('dept'))
									<small class="text-danger">
										{{$errors->first('dept')}}
									</small>
									@endif
								</div>
							</label> -->

							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="text" name= "qualification" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('qualification')}}" >
									<span class="placeholder">Emp Qualification </span>
									@if($errors->has('qualification'))
									<small class="text-danger">
										{{$errors->first('qualification')}}
									</small>
									@endif
								</div>
							</label>

							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" name= "ex" class="textfield textfield_forms_resp" placeholder=" " autocomplete="off" value="{{ old('ex')}}" >
									<span class="placeholder"> Experience In Year </span>
									@if($errors->has('ex'))
									<small class="text-danger">
										{{$errors->first('ex')}}
									</small>
									@endif
								</div>
							</label>

							<label class="wrapper mt-4">
								<div class="emp_input_div" style="height: 49px;">
									
									<select name="dept" class="form-control border-0" style="">
										@foreach($new as $n)
										@php($name=$n->dept_name)
										<option value="" selected disabled hidden>Choose Deptartment</option>
										<option value="{{$n->id}}"> {{$name}}</option>
										@endforeach

									</select>
									
								</div>
								@if($errors->has('dept'))
								<small class="text-danger">
									{{$errors->first('dept')}}
								</small>
								@endif
							</label>

							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="date" name= "dateofjoining" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('dateofjoining')}}">
									<span class="placeholder"> Date of Joining </span>
									@if($errors->has('dateofjoining'))
									<small class="text-danger">
										{{$errors->first('dateofjoining')}}
									</small>
									@endif
								</div>
							</label>

							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="Password" id="pass_log_id"  name="password" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('password')}}">
									<span class="placeholder"> New password </span>
									<i style=" position: absolute;top: 23%;right: 1%;color: #555" class="fa fa-fw fa-eye field_icon fa-2x toggle-password"></i>
									@if($errors->has('password'))
									<small class="text-danger">
										{{$errors->first('password')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="Password" name= "cpassword" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('cpassword')}}">
									<span class="placeholder"> Confirm Password </span>
									@if($errors->has('cpassword'))
									<small class="text-danger">
										{{$errors->first('cpassword')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="file" class="form-control textfield textfield_forms_resp" name="profile_image">
									<!-- <span class="placeholder"> Confirm Password </span> -->
									@if($errors->has('profile_image'))
									<small class="text-danger">
										{{$errors->first('profile_image')}}
									</small>
									@endif
								</div>
							</label>
							<!-- Form submit button -->
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-3 col-6">
									<div class="container-login100-form-btn m-t-32">
										<button type="submit" class="login100-form-btn">
											Submit
										</button>
									</div>
								</div>
								<div class="col-md-3 col-6">
									<div class="container-login100-form-btn m-t-32">
										<input type="button" class="login100-form-btn" onclick="myFunction()" value="Clear">							
									</div> 
								</div>
								<div class="col-md-3"></div>
							</div>

						</form>
					</div>
					<div class="col-md-5">
						<img src="{{asset('img/form.jpg')}}" alt="person" class=" img-fluid mt-n0"
						height="1000" width="997">
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 

<script>
	
	function myFunction() {
		document.getElementById("mybtn").reset();
	}
	

	//PASSWORD VIEW
	$(document).on('click', '.toggle-password', function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $("#pass_log_id");
		input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
	});
</script>
@endsection









