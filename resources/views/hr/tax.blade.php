@extends('hr.sidenav')
@section('tax')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Taxes</u></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 ">
				<div class="container-login100-form-btn mt-4 d-flex justify-content-end mb-4">
					<div type="submit" class="mt-1 add_des_res login100-form-btn" data-toggle="modal" data-target="#exampleModalCenter">
						<i class="fas fa-plus mx-2"></i>
						Add Tax
					</div>
				</div>
			</div>
		</div>
		@if(session()->has('success'))
		<div class="alert alert-success">
			{{session()->get('success')}}
		</div>
		@endif

		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr style="border-radius: 32px;color: #fa4299;font-weight: bold;border: solid 1px;">
							<th>So.No</th>
							<th>Tax Name</th>
							<th>Tax Percentage(%)</th>
							<th>Status</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					@foreach($view as $t)
					<tbody>
						<tr>
							<td>{{$t->id}}</td>
							<td>{{$t->tax_name}}</td>
							<td>{{$t->tax_percent}}</td>
							<td>{{$t->status}}</td>
							<td><button value="{{$t->id}}" type="button" class="editbtn"><i class=" text-dark ml-1 far fa-edit"></i></button></td>
							<td><button value="{{$t->id}}" type="button" class="dltbtn"><i class=" text-dark ml-3 fas fa-trash"></i></button></td>
							
						</tr>
						
					</tbody>
					@endforeach
				</table>
			</div>
		</div>
	</div>


	<!-- Modal ADD Holidays  -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="d-flex justify-content-end p-2 mt-n1"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="modal_close" style="">&times;</span>
				</button></div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div>
								<h5 class="modal-title text-center" style="font-size: 22px" id="exampleModalLongTitle" >Add Tax</h5>
								
								<form method="POST" action="{{url('/insert')}}">
									@csrf
									<label class="wrapper mt-3">
										<div class="emp_input_div">
											<input type="text" class="textfield textfield_forms_resp" placeholder=" " id="designation_name" name="taxname" required>
											<span class="placeholder"> Tax Name </span>
											@if($errors->has('taxname'))
											<small class="text-danger">
												{{$errors->first('taxname')}}
											</small>
											@endif

										</div> 
									</label>
									<label class="wrapper mt-3">
										<div class="emp_input_div">
											<input type="text" class="textfield textfield_forms_resp" placeholder=" " id="designation_name" name="taxpercent" required>
											<span class="placeholder"> Tax Percentage </span>
											@if($errors->has('taxpercent'))
											<small class="text-danger">
												{{$errors->first('taxpercent')}}
											</small>
											@endif

										</div> 
									</label>
									<label class="wrapper mt-3">
										<div class="emp_input_div">
											<select class="form-control border-0" name="status" required>
												<option value="" selected disabled hidden>Choose Type</option>
												<option>Pending</option>
												<option>Approved</option>
											</select>
										</div> 
										@if($errors->has('status'))
										<small class="text-danger">
											{{$errors->first('status')}}
										</small>
										@endif

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
				</div>
			</div>
		</div>
	</div>


	<!-- Edit modal -->
	
	<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="d-flex justify-content-end p-2 mt-n1"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="modal_close" style="">&times;</span>
				</button></div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div>
								<h5 class="modal-title text-center" style="font-size: 22px" id="exampleModalLongTitle" >Add Tax</h5>
								
								<form method="POST" action="{{url('/updatetax')}}">
									@csrf
									<input type="hidden" id="tax_id" name="tax_id">

									<label class="wrapper mt-4">
										<div class="emp_input_div">
											<input type="text" class="textfield textfield_forms_resp" placeholder=" " id="tname" name="taxname" >
											<span class="placeholder"> Tax Name </span>
											@if($errors->has('taxname'))
											<small class="text-danger">
												{{$errors->first('taxname')}}
											</small>
											@endif

										</div> 
									</label>
									<label class="wrapper mt-4">
										<div class="emp_input_div">
											<input type="text" class="textfield textfield_forms_resp" placeholder=" " id="tpercent" name="taxpercent" >
											<span class="placeholder"> Tax Percentage </span>
											@if($errors->has('taxpercent'))
											<small class="text-danger">
												{{$errors->first('taxpercent')}}
											</small>
											@endif

										</div> 
									</label>
									<label class="wrapper mt-4">
										<div class="emp_input_div">
											<select class="form-control border-0" name="status" id="tstatus">
												<option>Pending</option>
												<option>Approved</option>
											</select>
										</div> 
										@if($errors->has('status'))
										<small class="text-danger">
											{{$errors->first('status')}}
										</small>
										@endif

									</label>
									
									<div class="container-login100-form-btn m-t-32">
										<button type="submit" class="login100-form-btn">
											Update
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end edit modal -->


	<!-- Delete modal  -->
	<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="d-flex justify-content-end p-2 mt-n1"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="modal_close" style="">&times;</span>
				</button></div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div>
								<h5 class="modal-title text-center" style="font-size: 22px" id="exampleModalLongTitle" >Delete Tax</h5>
								
								<form method="POST" action="{{url('/deletetax')}}">
									@csrf
									@method('DELETE')
									<h4>Are you Sure ? </h4>
									<input type="hidden" id="deleting_id" name="deletetaxid">
																		
									<div class="container-login100-form-btn m-t-32">
										<button type="submit" class="login100-form-btn">
											Yes
										</button>
										<button type="button" class="login100-form-btn" data-bs-dismiss="modal">
											No
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end delete modal -->


</section> 
<script>
	//dltbtn
	$(document).on('click', '.dltbtn', function(){

		var tax_id = $(this).val();
		//alert(tax_id);

		$('#deletemodal').modal('show');
		$('#deleting_id').val(tax_id);
	}); 


	//editbtn
	$(document).ready(function(){
		$(document).on('click', '.editbtn', function(){
			var tax_id = $(this).val();
			//alert(tax_id);
			$('#editmodal').modal('show');

			$.ajax({
				type: "GET",
				url: "/edittax/"+tax_id,
				success: function (response){
					                          // DBcolname
					//console.log(response.edit.tax_name);
					$('#tname').val(response.edit.tax_name);
					$('#tpercent').val(response.edit.tax_percent);
					$('#tstatus').val(response.edit.status);
					$('#tax_id').val(tax_id);
				}

			});

		});
	});
</script>
@endsection

