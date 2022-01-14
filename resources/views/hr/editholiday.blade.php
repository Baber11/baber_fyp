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
@section('editholiday')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Holidays</u></h1>
			</div>
		</div>

		@if(session()->has('success'))
		<small class="alert alert-success mt-3 mb-3">
			{{ session()->get('success') }}
		</small>
		@endif
		@if(session()->has('error'))
		<div class="alert alert-danger">
			{{session()->get('error')}}
		</div>
		@endif


		<div class="card-body">

			<form method="POST" action="{{url('/updateholiday')}}">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div>
							<label class="wrapper mt-3">
								<input type="hidden" name="id" value="{{$edit->id}}">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " name="holiday_name" value="{{$edit->holiday_name}}">
									<span class="placeholder"> Holiday Name </span>
								</div> 
							</label>
							<label class="wrapper  mt-5">
								<div class="emp_input_div">
									<input type="date" class="textfield textfield_forms_resp" placeholder=" " name="holiday_date" value="{{$edit->holiday_date}}">
									<span class="placeholder"> Holiday Date </span>
								</div> 
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
										<!-- <button type="submit" class="login100-form-btn">
											Back
										</button> -->
										<a style="text-decoration:none" class="login100-form-btn" href="{{ url()->previous() }}">Back</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</form>
		</div>
		

	</div>
</div>



</section> 
@endsection