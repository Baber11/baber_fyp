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

@section('adddesg')
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
		<div class="row">
			<div class="col-md-12 ">
				<div class="container-login100-form-btn mt-4 d-flex justify-content-end mb-4">
					<div type="submit" class="mt-1 login100-form-btn add_des_res" data-toggle="modal" data-target=".bd-example-modal-lg">
						<i class="fas fa-plus mx-2"></i>
						Add Designation
					</div>
				</div>
			</div>
		</div>
		

		<div class="card-body">
			@if(session()->has('success'))
			<div class="alert alert-success mt-3 mb-3">
				{{ session()->get('success') }}
			</div>
			@endif

			<div class="table-responsive mb-4 mt-4">
				<table class="table">
					<thead>
						<tr  style="border-radius: 32px;color: #fa4299;font-weight: bold;border: solid 1px;">
							<th>So.No</th>
							<th>Designations</th>
							<th>Edit</th>
							<!-- <th>Delete</th> -->
						</tr>
					</thead>
					@foreach($add as $a)
					<tbody>
						<tr>
							<td>{{$a->id}}</td>
							<td>{{$a->designation_names}}</td>
							<td><a href="{{url('/editddn/'.$a->id)}}"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
							<!-- <td><a href="{{url('/deletedn/'.$a->id)}}"><i class=" text-dark ml-3 fas fa-trash"></i></a></td> -->
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
		</div>
	</div>


	<!-- Modal ADD Desination  -->

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="exampleModalLongTitle"><u>Add Designation</u></h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="modal-body">
					<form method="POST" action="{{url('/adddn')}}">
						@csrf
						<div class="row">
							<div class="col-md-12">
								<div>
									<form>
										<label class="wrapper  mt-5 shadow">
											<div class="emp_input_div">
												<input type="text" class="textfield textfield_forms_resp" placeholder=" " name="add" >
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
	</div>
	
</section> 
@endsection