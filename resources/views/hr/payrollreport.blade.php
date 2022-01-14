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
@section('payrollreport')
active
@endsection
@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3 mb-3">
				<h1 class="font-weight-bold add_emp_heading"><u> Payslip Reports</u></h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card shadow-lg">
			<div class="card-body">
				<div class="row">
					<form>
						<div class="col-md-3 col-12">
							<label class="wrapper  mt-2">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
									<span class="placeholder"> Employee Name </span>
								</div> 
							</label>
						</div>
						<div class="col-md-3 col-12">
							<label class="wrapper  mt-2">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
									<span class="placeholder"> Month </span>
								</div> 
							</label>
						</div>
						<div class="col-md-3 col-12">
							<label class="wrapper  mt-2">
								<div class="emp_input_div">
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
									<span class="placeholder"> Year </span>
								</div> 
							</label>
						</div>
						<div class="col-md-3 col-12">
							<label class="wrapper  mt-2">
								<div class="container-login100-form-btn m-t-32">
									<button type="submit" class="login100-form-btn">
										Submit
									</button>
								</div>
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</section> 
@endsection

