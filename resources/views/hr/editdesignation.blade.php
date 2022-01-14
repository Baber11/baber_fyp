@extends('hr.sidenav')

<!-- Designation form start here -->
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button
{
	-webkit-appearance: none;
	margin: 0;
}
</style>
@section('desg')
active
@endsection

@section('content')
<section class="forms">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Employees Designation</u></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card shadow-sm mt-4">
					<div class="card-body">
						@if(session()->has('success'))
						<div class="alert alert-success">
							{{session()->get('success')}}
						</div>
						@endif
						@if(session()->has('error'))
						<div class="alert alert-danger">
							{{session()->get('error')}}
						</div>
						@endif
						<form method="POST" action="{{url('/updatedes')}}">
							@csrf
							<img src="{{asset('uploads/emppic/'.$c->emp->profile_image)}}" width="150px" height="150px" alt="Image">
							<input type="hidden" name="des_id" value="{{$c->id}}">

							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" name="empid" class="textfield textfield_forms_resp" placeholder=" " value="{{$c->emp->id}}" readonly>
									<span class="placeholder">Registraton Number:</span>
								</div>
								@if($errors->has('empid'))
							<small class="text-danger">
								{{$errors->first('empid')}}
							</small>
							@endif
							</label>


							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<select name="des" class="form-control">
										@foreach($d as $dd)
										@php($name=$dd->designation_names)
										<option value="{{$dd->id}}" @if($dd->id==$c->designationname_id) selected @endif > {{$name}}</option>
										@endforeach

									</select>
								</div>
								@if($errors->has('des'))
									<small class="text-danger">
										{{$errors->first('des')}}
									</small>
									@endif
							</label>


							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" class="textfield textfield_forms_resp" placeholder=" " name="pay" value="{{ $c->basic_pay }}">
									<span class="placeholder">Basic pay</span>
									@if($errors->has('pay'))
									<small class="text-danger">
										{{$errors->first('pay')}}
									</small>
									@endif
								</div>
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" class="textfield textfield_forms_resp" placeholder=" " name="travel" value="{{ $c->travel_allowance}}">
									<span class="placeholder">Travel Allowance</span>
								</div>
								@if($errors->has('travel'))
									<small class="text-danger">
										{{$errors->first('travel')}}
									</small>
									@endif
							</label>


							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" class="textfield textfield_forms_resp" placeholder=" " name="medical" value="{{ $c->medical_allowance}}" >
									<span class="placeholder">Medical Allowance</span>
								</div>
								@if($errors->has('medical'))
									<small class="text-danger">
										{{$errors->first('medical')}}
									</small>
									@endif
							</label>


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
										
										<a style="text-decoration:none" class="login100-form-btn" href="{{ url()->previous() }}">Back</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<img src="{{asset('img/designation_img.jpg')}}" alt="person" class="add_emp_form_pic img-fluid "
				height="1000" width="997">
			</div>
		</div>
	</div>
</section> 
@endsection

