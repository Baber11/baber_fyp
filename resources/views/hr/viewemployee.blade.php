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
	@section('empl')
	active
	@endsection

	@section('viewemp')
	active
	@endsection

	@section('content')
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 mt-3 mb-3">
					<h1 class="font-weight-bold add_emp_heading">View Employess</h1>
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
			<div class="card shadow">
				<div class="row">
					<div class="col-md-12">

						<div class="card-body">
							@if(session()->has('success'))
							<div class="alert alert-success mt-3 mb-3">
								{{ session()->get('success') }}
							</div>
							@endif
							<div class="table-responsive mt-4 mb-4">
								<table class="table" id="myTable">
									<thead>
										<tr  style="border-radius: 32px;color: #fa4299;font-weight: bold;border: solid 1px;">
											<tr class="header">
												<th>Emp ID</th>
												<th>Name</th>
												<th>Date of Birth</th>
												<th>gender</th>
												<th>Email</th>
												<th>Ph#</th>
												<th>Address</th>
												<th>City</th>
												<th>Department</th>
												<th>Date of Joining</th>
												<th>Edit</th>
												<!-- <th>Delete</th> -->
											</tr>
										</tr>
									</thead>
									@foreach($allemp as $allemps)
									<tbody>
										<tr>
											<th scope="row">{{$allemps->id}}</th>
											<td>{{$allemps->fname}} {{$allemps->lname}}</td>
											<!-- <td>{{$allemps->lname}}</td> -->
											<td>{{$allemps->date_of_birth}}</td>
											<td>{{$allemps->gender}}</td>
											<td>{{$allemps->email}}</td>
											<td>{{$allemps->phone_number}}</td>
											<td>{{$allemps->address}}</td>
											<td>{{$allemps->city}}</td>
											<td>{{$allemps->dept->dept_name}}</td>
											<td>{{$allemps->date_of_joining}}</td>
											<td><a href="{{ url('/getrec/'.$allemps->id) }}"><i class="fas fa-edit ml-2"></i></a></td>
											<!-- <td><a href="{{ url('/deleteemp/'.$allemps->id) }}" ><i class="far fa-trash-alt"></i></a></td> -->
											<!-- <i class="far fa-trash-alt"></i> -->
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