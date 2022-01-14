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
@section('pay')
active
@endsection

@section('payrollitems')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3 mb-3">
				<h1 class="font-weight-bold add_emp_heading"> PayRolls Items</h1>
				<div class="d-flex justify-content-end">
					<div type="submit" class="mt-1 login100-form-btn" data-toggle="modal" data-target=".bd-example-modal-lg">
						<i class="fas fa-plus mx-2"></i>
						Add Over Time
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card shadow">
			<div class="row">
				<div class="col-md-12">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr  style="border-radius: 32px;color: #fa4299;font-weight: bold;border: solid 1px;">
										<th>Name</th>
										<th>Rate</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Normal day OT 1.5x</td>
										<td>Hourly 1.5</td>
										<td><a href="#"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
										<td><a href="#"><i class=" text-dark ml-3 fas fa-trash"></i></a></td>
									</tr>
									<tr>
										<td>Normal day OT 1.5x</td>
										<td>Hourly 1.5</td>
										<td><a href="#"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
										<td><a href="#"><i class=" text-dark ml-3 fas fa-trash"></i></a></td>
									</tr>
									<tr>
										<td>Normal day OT 1.5x</td>
										<td>Hourly 1.5</td>
										<td><a href="#"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
										<td><a href="#"><i class=" text-dark ml-3 fas fa-trash"></i></a></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section> 
@endsection

