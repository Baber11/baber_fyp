 @extends('hr.sidenav')

 <!-- add employees form start here -->
 <style>
 	input::-webkit-outer-spin-button,
 	input::-webkit-inner-spin-button
 	{
 		-webkit-appearance: none;
 		margin: 0;
 	}
 	.approve_btn{
 		background: green !important;
 		color: white !important;
 		border-radius: 11px !important;
 	}
 	.reject_btn{
 		background: red !important;
 		color: white !important;
 		border-radius: 11px !important;
 	}
 </style>
 @section('leaves')
 active
 @endsection

 @section('content')
 <section class="forms">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-4 mt-3 mb-3">
 				<h1 class="font-weight-bold add_emp_heading">View Leave Request</h1>
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

 						@if(session()->has('not success'))
 						<div class="alert alert-danger mt-3 mb-3">
 							{{ session()->get('not success') }}
 						</div>
 						@endif
 						<div class="table-responsive mt-4 mb-4">
 							<table class="table" id="myTable">
 								<thead>
 									<tr  style="border-radius: 32px;color: #fa4299;font-weight: bold;border: solid 1px;">
 										<tr class="header">
 											<th>Emp ID</th>
 											<th>Employee Name</th>
 											<th>Type</th>
 											<th>Start Date</th>
 											<th>End Date</th>
 											<th>Reason</th>
 											<th>Status</th>
 											<th class="text-center">Action</th>
 											<!-- <th>Delete</th> -->
 										</tr>
 									</tr>
 								</thead>
 								<tbody>
 									@foreach($leave as $l)
 									<tr>
 										<th scope="row">00{{$l->addemployee_id}}</th>
 										<td>{{$l->employee->fname}} {{$l->employee->lname}}</td>
 										<td>{{$l->type}}</td>
 										<td>{{$l->start_date}}</td>
 										<td>{{$l->end_date}}</td>
 										<td>{{$l->reason}}</td>
 										<td>{{$l->status}}</td>
 										
 										<td style="display: flex;
 										justify-content: space-evenly;">
 										<form method="POST" action="{{url('/approve/'.$l->id)}}">
 											@csrf
 											<input type="submit" {{ $l->status == 'approve' ? 'disabled' : '' }} value="Approve" class="btn approve_btn" name="">
 										</form>
 										<form method="POST" action="{{url('/reject/'.$l->id)}}">
 											@csrf
 											<input type="submit" {{ $l->status == 'reject' ? 'disabled' : '' }} value="Reject" class="btn reject_btn" name="">
 										</form>

 											<!-- <form>
 												<input type="submit" name="">
 											</form> -->
 										</td>
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
 </section> 
<!--  <script>
    $('input[type=submit]').click(function() {
    $(this).attr('disabled', 'disabled');
    $(this).parents('form').submit();
});
</script> -->
 @endsection