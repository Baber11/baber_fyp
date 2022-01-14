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
@section('editemp')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3 mb-3">
				<h1 class="font-weight-bold add_emp_heading"><u> Edit Employee</u></h1>
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
							<h1>{{session()->get('success')}}</h1>
						</div>
						@endif
						<form class="" method="POST" action="{{url('/updateemp')}}" enctype="multipart/form-data">
							@csrf

							<label class="wrapper  mt-2">
								<div class="emp_input_div">
									<input type="hidden" name="emp_id" value="{{$getrec->id}}">
									<input type="text" class="textfield textfield_forms_resp" name= "fname" placeholder=" " value="{{$getrec->fname}}">
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
									<input type="text" name= "lname" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->lname}}">
									<span class="placeholder"> Last Name </span>
									@if($errors->has('lname'))
									<small class="text-danger">
										{{$errors->first('lname')}}
									</small>
									@endif
								</div>
							</label>

							<!-- emp CNIC -->
							<label class="wrapper mt-4">
								<div class="emp_input_div ">
									<input type="text" name= "cnic" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->cnic}}">
									<span class="placeholder"> Employee CNIC </span>
									@if($errors->has('cnic'))
									<small class="text-danger">
										{{$errors->first('cnic')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="text" name= "dob" class="textfield textfield_forms_resp" placeholder="YYYY-MM-DD" value="{{$getrec->date_of_birth}}">
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
									<input type="text" name= "gender" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->gender}}">
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
									<input type="Email" name= "email" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->email}}">
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
									<input type="number" name= "number" class="textfield textfield_forms_resp" maxlength="10" placeholder=" " value="{{$getrec->phone_number}}">
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
									<input type="text" name= "address" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->address}}">
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
									<input type="text" name= "city" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->city}}">
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
							<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
							<span class="placeholder"> Employee Grade </span>
						</div>
					</label> -->
					<!-- <label class="wrapper mt-4">
						<div class="emp_input_div">
							<input type="text" name= "dept" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->dept}}">
							<span class="placeholder"> Department </span>
							@if($errors->has('dept'))
							<small class="text-danger">
								{{$errors->first('dept')}}
							</small>
							@endif
						</div>
					</label> -->
					<label class="wrapper mt-4">
								<div class="emp_input_div ">
									<input type="text" name= "qualification" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->qualification}}">
									<span class="placeholder"> Emp Qualification </span>
									@if($errors->has('qualification'))
									<div class="text-danger">
										{{$errors->first('qualification')}}
									</div>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div ">
									<input type="number" name= "ex" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->experience}}">
									<span class="placeholder"> Experience In Year </span>
									@if($errors->has('ex'))
									<small class="text-danger">
										{{$errors->first('ex')}}
									</small>
									@endif
								</div>
							</label>
					<label class="wrapper mt-4">
								<div class="emp_input_div">

									<select name="dept" class="form-control">
										@foreach($d as $dd)
										<option value="{{$dd->id}}" @if($dd->id == $getrec->dept_id) {{'selected'}}  @endif >{{ $dd->dept_name }}
										</option>
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
							<input type="text" name= "dateofjoining" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->date_of_joining}}">
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
							<input type="Password" name="password" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->password}}">
							<span class="placeholder"> New password </span>
							@if($errors->has('password'))
							<small class="text-danger">
								{{$errors->first('password')}}
							</small>
							@endif
						</div>
					</label>
					<label class="wrapper mt-4">
						<div class="emp_input_div">
							<input type="Password" name= "cpassword" class="textfield textfield_forms_resp" placeholder=" " value="{{$getrec->confirm_password}}">
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
							<img src="{{asset('uploads/emppic/'.$getrec->profile_image)}}" width="80px" height="80px" alt="Image">

							<!-- <span class="placeholder"> Browse </span> -->
							@if($errors->has('profile_image'))
							<small class="text-danger">
								{{$errors->first('profile_image')}}
							</small>
							@endif
						</div>
					</label>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="row">
							<div class="col-md-6 col-6">
								<div class="container-login100-form-btn m-t-32">
									<button type="submit" class="login100-form-btn">
										Update
									</button>
								</div>
							</div>
							<div class="col-md-6 col-6">
								<div class="container-login100-form-btn m-t-32">

									<a style="text-decoration:none" class="login100-form-btn" href="{{ url('allemp') }}">Back</a>
								</div>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<img src="{{ asset('img/form.jpg') }}" alt="person" class="add_emp_form_pic img-fluid mt-n0"
				height="1000" width="997">
			</div>
		</div>
	</div>
</div>
</div>
</section> 
@endsection


