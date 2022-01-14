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
@section('desg')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Designations</u></h1>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-md-12 ">
				<div class="container-login100-form-btn mt-4 d-flex justify-content-end mb-4">
					<div type="submit" class="mt-1 login100-form-btn" data-toggle="modal" data-target=".bd-example-modal-lg">
						<i class="fas fa-plus mx-2"></i>
						Edit Designation
					</div>
				</div>
			</div>
		</div> -->
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

			<form method="POST" action="{{url('/updatedn')}}">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div>
							<label class="wrapper  mt-5 shadow">
								<div class="emp_input_div">
									<input type="hidden" name="id" value="{{$edit->id}}">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " name="add" value="{{$edit->designation_names}}">
									<span class="placeholder"> Enter New Designation </span>
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



<!-- Modal ADD Desination  -->
<!-- 
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
				@if(session()->has('success'))
				<div class="alert alert-success">
					{{session()->get('success')}}
				</div>
				@endif
				<div class="modal-body">
					<form method="POST" action="{{url('/updatedn')}}">
						@csrf
					<div class="row">
						<div class="col-md-12">
							<div>
								<form>
									<label class="wrapper  mt-5 shadow">
										<div class="emp_input_div">
											<input type="text" class="textfield textfield_forms_resp" placeholder=" " name="add" value="{{$edit->designation_names}}">
											<span class="placeholder"> Enter New Designation </span>
										</div> 
									</label>
									<div class="container-login100-form-btn m-t-32">
										<button type="submit" class="login100-form-btn">
											Add
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-md-12">
							<div class="container-login100-form-btn">
								<div type="submit" data-dismiss="modal" id="salaryprocessbutton" class="mt-1 login100-form-btn">
									Close
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
</section> 
@endsection