@extends('hr.sidenav')

<!-- Company profile page start here -->
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button
{
	-webkit-appearance: none;
	margin: 0;
}
</style>
@section('edit')
active
@endsection

@section('companysetting')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Company Settings</u></h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card mt-3 shadow">
			<div class="card-body">
				<form method="POST" action="{{url('/updatecompany')}}" id="mybtn">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<label class="wrapper mt-2">
								<div class="emp_input_div emp_input_div company_setting_field">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " name="company_name" value="{{$edit->company_name}}" required>
									<span class="placeholder"> Company Name </span>
								</div> 
							</label>
						</div>
						<div class="col-md-6">
							<label class="wrapper  mt-">
								<div class="emp_input_div company_setting_field">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->contact_person}}" required name="contact_person">
									<span class="placeholder"> Contact Person </span>
								</div> 
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 mt-4">
							<label class="wrapper mt-2">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->address}}" required name="address">
									<span class="placeholder"> Address </span>
								</div> 
							</label>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-md-3">
							<label class="wrapper mt-2">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->country}}" required name="country">
									<span class="placeholder"> Country </span>
								</div> 
							</label>
						</div>
						<div class="col-md-3">
							<label class="wrapper mt-2">
								<div class="emp_input_div company_setting_field">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->city}}" required name="city">
									<span class="placeholder"> City </span>
								</div> 
							</label>
						</div>
						<div class="col-md-3">
							<label class="wrapper mt-2">
								<div class="emp_input_div company_setting_field">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->state}}" required name="state">
									<span class="placeholder"> State/Province </span>
								</div> 
							</label>
						</div>
						<div class="col-md-3">
							<label class="wrapper mt-2">
								<div class="emp_input_div company_setting_field">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->postal_code}}" required name="postal_code">
									<span class="placeholder"> Postal Code </span>
								</div> 
							</label>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-md-6">
							<label class="wrapper mt-2">
								<div class="emp_input_div">
									<input type="email" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->email}}" required name="email">
									<span class="placeholder"> Email </span>
								</div> 
							</label>
						</div>
						<div class="col-md-6">
							<label class="wrapper mt-2">
								<div class="emp_input_div company_setting_field">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->phone_number}}" required name="phone_number">
									<span class="placeholder"> Phone Number </span>
								</div> 
							</label>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-md-6">
							<label class="wrapper mt-2">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->fax}}" required name="fax">
									<span class="placeholder"> Fax </span>
								</div> 
							</label>
						</div>
						<div class="col-md-6">
							<label class="wrapper mt-2">
								<div class="emp_input_div company_setting_field">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->website_url}}" required name="website_url">
									<span class="placeholder"> WebSiteUrl </span>
								</div> 
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">	</div>
						<div class="col-md-2 col-6">
							<div class="container-login100-form-btn m-t-32">
								<button type="submit" class="login100-form-btn">
									Save
								</button>
							</div>
						</div>
						<div class="col-md-2 col-6">
							<div class="container-login100-form-btn m-t-32">
								<input type="button" class="login100-form-btn" onclick="myFunction()" value="Clear">							
							</div>
						</div>
					</div>
					<div class="col-md-4">	</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>

	function myFunction() {
		document.getElementById("mybtn").reset();
	}
</script>
</section> 

@endsection

