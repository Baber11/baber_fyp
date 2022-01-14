@extends('hr.sidenav')

@section('pay')
active
@endsection

@section('viewsalary')
active
@endsection
<!-- Create Salary Page start here -->

@section('content')
<section>
	<style type="">
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button
		{
			-webkit-appearance: none;
			margin: 0;
		}
	</style>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>All Employess Salary</u></h1>
				<div class="mt-4">
					<label class="wrapper">
						<div class="emp_input_div ">
							<input type="text"id="myInput" onkeyup="myFunction()" class="shadow textfield textfield_forms_resp" placeholder=" " >
							<span class="placeholder">Search By Name </span>
						</div> 
					</label>
				</div>
			</div>
		</div>
		
	</div>



	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card shadow border-top mt-3">
					@if(session()->has('success'))
					<small class="alert alert-success mt-3 mb-3">
						{{ session()->get('success') }}
					</small>
					@endif
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover" id="myTable" >
								<thead>
									<tr style="color: #d41872">
										<th>Emp ID</th>
										<th>Employee Name</th>
										<th>Designation</th>
										<th>Department</th>
										<th>Account Num</th>
										<th>Salary</th>
										<th>Payslip</th>
										<th>Delete</th>


									</tr>
								</thead>
								<tbody>
									@foreach($view as $v)
									<tr>
										<td>{{$v->id}}</td>
										<td>{{$v->emp_name}}</td>
										<td>{{$v->designation}}</td>
										<td>{{$v->dept}}</td>
										<td>{{$v->emp_account}}</td>
										<td>{{$v->final_salary}} PKR</td>
										<td><a href="{{ url('pdfslip/'.$v->id) }}"><button class="btn btn-dark rounded"data-toggle="modal" data-target="#exampleModalCenter">Generate Slip</button></a></td>
										<td><a href="{{ url('/deletesalary/'.$v->id) }}" ><i class="far fa-trash-alt"></i></a></td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
						<script>
							function myFunction() {
								var input, filter, table, tr, td, i, txtValue;
								input = document.getElementById("myInput");
								filter = input.value.toUpperCase();
								table = document.getElementById("myTable");
								tr = table.getElementsByTagName("tr");
								for (i = 0; i < tr.length; i++) {
									td = tr[i].getElementsByTagName("td")[0];
									if (td) {
										txtValue = td.textContent || td.innerText;
										if (txtValue.toUpperCase().indexOf(filter) > -1) {
											tr[i].style.display = "";
										} else {
											tr[i].style.display = "none";
										}
									}       
								}
							}
						</script>


					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<p class="text-center text-success font-weight-bold">To Generate a Payslip?</p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h3 class="pb-5 pt-5 ">Are You Sure?</h3>
			</div>
			<div class="modal-footer">
				<a href="{{ url('/payslip')}}">
					<button type="submit" class="login100-form-btn">
						Yes
					</button>
				</a>
			</div>
		</div>
	</div>
</div> -->
</section>

@endsection


