@extends('hr.sidenav')

<!-- view employees form start here -->
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

@section('desgemp')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 mt-3 mb-3">
				<h1 class="font-weight-bold add_emp_heading">All Employess Designation</h1>
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
										<th>Basic Pay</th>
										<th>Medical Allowance</th>
										<th>Travell Allowance</th>
										<!-- <th>Edit</th> -->
										<th>Action</th>
									</tr>
								</thead>
								@foreach($view as $v)
								<tbody>
									<tr>
										<th scope="row">{{$v->emp->id}}	</th>
										<td>{{$v->emp->fname}} {{$v->emp->lname}}</td>
										<td>{{$v->designationname->designation_names}}</td>
										<td>{{$v->basic_pay}}</td>
										<td>{{$v->travel_allowance}}</td>
										<td>{{$v->medical_allowance}}</td>
										<td><a href="{{ url('/editdes/'.$v->id) }}"><i class=" text-dark ml-1 far fa-edit"></i>   Edit</a></td>
										<!-- <td><a href="{{ url('/deletedes/'.$v->id ) }}"><i class=" text-dark ml-3 fas fa-trash"></i></a></td> -->
									</tr>
								</tbody>
								@endforeach
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
</section> 
@endsection

