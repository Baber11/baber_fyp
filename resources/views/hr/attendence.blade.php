@extends('hr.sidenav')

<!-- attendences form start here -->
<style>
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button
	{
		-webkit-appearance: none;
		margin: 0;
	}
</style>
@section('attendence')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Employess Attendence</u></h1>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container-login100-form-btn  mt-4 d-flex justify-content-end mb-4">
					<div type="submit" class="mt-1 add_des_res login100-form-btn" data-toggle="modal" data-target=".bd-example-modal-lg">
						<i class="fas fa-chalkboard-teacher mx-2"></i>
						View Attenence
					</div>
				</div>

				<div class="card shadow">
					<div class="card-header">
						<div class="row">
							<div class="col-md-8 attendence">
								<div class="d-flex justify-content-start mt-2">
									<h1>Show</h1>
									<select class="mx-2" style="background: -webkit-linear-gradient(left, #a445b2, #d41872, #fa4299);
									border-radius: 5px;
									padding: 6px;">
									<option>select</option>
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
								<h1>Entries</h1>
							</div> 
						</div>
						<div class="col-md-4 mt-3 d-flex justify-content-end">
							<div class="add_des_res">
								<label class="wrapper  mt-1">
									<div class="emp_input_div">
										<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
										<span class="placeholder"> Search </span>
									</div> 
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Date</th>
									<th>Employess ID</th>
									<th>Name</th>
									<th>Designation</th>
									<th>Punch IN</th>
									<th>Punch OUT</th>
									<th>Over Time</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>19 feb 2019</td>
									<td>001231</td>
									<td>Rahman</td>
									<td>Progeammer</td>
									<td>10 AM</td>
									<td>7 AM</td>
									<td>None</td>
									<td><a href="#"><i class="fas fa-trash text-dark ml-3"></i></a></td>
								</tr>
								<tr>
									<td>19 feb 2019</td>
									<td>001231</td>
									<td>Rahman</td>
									<td>Progeammer</td>
									<td>10 AM</td>
									<td>7 AM</td>
									<td>None</td>
									<td><a href="#"><i class="fas fa-trash text-dark ml-3"></i></a></td>
								</tr>
								<tr>
									<td>19 feb 2019</td>
									<td>001231</td>
									<td>Rahman</td>
									<td>Progeammer</td>
									<td>10 AM</td>
									<td>7 AM</td>
									<td>None</td>
									<td><a href="#"><i class="fas fa-trash text-dark ml-3"></i></a></td>
								</tr>
								<tr>
									<td>19 feb 2019</td>
									<td>001231</td>
									<td>Rahman</td>
									<td>Progeammer</td>
									<td>10 AM</td>
									<td>7 AM</td>
									<td>None</td>
									<td><a href="#"><i class="fas fa-trash text-dark ml-3"></i></a></td>
								</tr>
								<tr>
									<td>19 feb 2019</td>
									<td>001231</td>
									<td>Rahman</td>
									<td>Progeammer</td>
									<td>10 AM</td>
									<td>7 AM</td>
									<td>None</td>
									<td><a href="#"><i class="fas fa-trash text-dark ml-3"></i></a></td>
								</tr>
								<tr>
									<td>19 feb 2019</td>
									<td>001231</td>
									<td>Rahman</td>
									<td>Progeammer</td>
									<td>10 AM</td>
									<td>7 AM</td>
									<td>None</td>
									<td><a href="#"><i class="fas fa-trash text-dark ml-3"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal view attendence Specific Employess -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="exampleModalLongTitle"><u>EMPLOYEES ATTENDENCE</u></h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<div>
							<form>
								<label class="wrapper  mt-5 shadow">
									<div class="emp_input_div">
										<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
										<span class="placeholder"> Employee ID </span>
									</div> 
								</label>
								<label class="wrapper  mt-5 shadow">
									<div class="emp_input_div">
										<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
										<span class="placeholder"> Employee Name </span>
									</div> 
								</label>
								<label class="wrapper  mt-5 shadow">
									<div class="emp_input_div">
										<input type="text" class="textfield textfield_forms_resp" placeholder=" " >
										<span class="placeholder"> Designation </span>
									</div> 
								</label>
							</form>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4 col-7">
						<div class="mt-5">
							<h1 class="month_heading_color"> Total Absent:</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">Total Present:</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">Total Leaves:</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">Leave Deduction:</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">Over Time</h1>
						</div>
					</div>
					<div class="col-md-2 col-5">
						<div class="mt-5">
							<h1 class="month_heading_color">0</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">0</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">0</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">0</h1>
						</div>
						<div class="mt-5">
							<h1 class="month_heading_color">0</h1>
						</div>
					</div>

				</div>
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
</div>

</section> 
@endsection

