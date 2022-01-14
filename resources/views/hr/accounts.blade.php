@extends('hr.sidenav')

<!-- accounts INFO form start here -->
<style>
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button
	{
		-webkit-appearance: none;
		margin: 0;
	}
</style>
@section('act')
active
@endsection

@section('addact')
active
@endsection
@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u> Accounts Information</u></h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card shadow mt-4">
					<div class="card-body">
						<div>
							<div>
								<h1 class="font-weight-bold add_emp_heading mt-n1">BANK DETAILS:</h1>
							</div>
						</div>
						@if(session()->has('success'))
						<div class="alert alert-success">
							{{session()->get('success')}}
						</div>
						@endif
						@if(session()->has('error'))
				<div class="alert alert-danger">
					{{session()->get('error')}}
				</div>
				@endif
						<form method="POST" action="{{url('/create')}}" id="mybtn">
							@csrf
							<div id="img_p"></div>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									
									<input type="number" name="id" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('id')}}" id="reg_id" autocomplete="off">
									<span class="placeholder">Registraton Number:</span>
								
								@if($errors->has('id'))
							<small class="text-danger">
								{{$errors->first('id')}}
							</small>
							@endif
						</div>
							</label>
							<label class="wrapper  mt-4  ">
								<div class="emp_input_div">
									<input type="text" name="bank_name" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('bank_name')}}" >
									<span class="placeholder">Bank Name:</span>
									@if($errors->has('bank_name'))
									<small class="text-danger">
										{{$errors->first('bank_name')}}
									</small>
									@endif
								</div> 
							</label>
							<label class="wrapper  mt-4 ">
								<div class="emp_input_div">
									<input type="text" name="account_type" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('account_type')}}">
									<span class="placeholder">Account Type:</span>
									@if($errors->has('account_type'))
									<small class="text-danger">
										{{$errors->first('account_type')}}
									</small>
									@endif
								</div> 
							</label>
							<label class="wrapper  mt-4 ">
								<div class="emp_input_div">
									<input type="number" name="acc_num" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('acc_num')}}" autocomplete="off">
									<span class="placeholder">Account No:</span>
									@if($errors->has('acc_num'))
									<small class="text-danger">
										{{$errors->first('acc_num')}}
									</small>
									@endif
								</div> 
							</label>
						
							<label class="wrapper  mt-4 ">
								<div class="emp_input_div">
									<input type="number" name="iban_num" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('iban_num')}}" autocomplete="off" >
									<span class="placeholder">IBAN No:</span>
									@if($errors->has('iban_num'))
									<small class="text-danger">
										{{$errors->first('iban_num')}}
									</small>
									@endif
								</div> 
							</label>
							<label class="wrapper  mt-4 ">
								<div class="emp_input_div">
									<input type="text" name="branch_add" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('branch_add')}}">
									<span class="placeholder">Branch Address:</span>
									@if($errors->has('branch_add'))
									<small class="text-danger">
										{{$errors->first('branch_add')}}
									</small>
									@endif
								</div> 
							</label>
							<label class="wrapper  mt-4 ">
								<div class="emp_input_div">
									<input type="number" name="branch_code" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('branch_code')}}" autocomplete="off">
									<span class="placeholder">Branch Code:</span>
									@if($errors->has('branch_code'))
									<small class="text-danger">
										{{$errors->first('branch_code')}}
									</small>
									@endif
								</div> 
							</label>
							<label class="wrapper  mt-4 ">
								<div class="emp_input_div">
									<input type="text" name="swift_code" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('swift_code')}}" autocomplete="off">
									<span class="placeholder">Swift Code:</span>
									@if($errors->has('swift_code'))
									<small class="text-danger">
										{{$errors->first('swift_code')}}
									</small>
									@endif
								</div> 
							</label>
							<div class="row">
								<div class="col-md-6 col-6">
									<div class="container-login100-form-btn m-t-32">
										<button type="submit" class="login100-form-btn">
											Save
										</button>
									</div>
								</div>
								<div class="col-md-6 col-6">
									<div class="container-login100-form-btn m-t-32">
										<input type="button" class="login100-form-btn" onclick="myFunction()" value="Clear">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('img/accounts.jpg') }}" alt="person" width="100%" class="img-fluid">
			</div>
		</div>
	</div>
	
</section> 
<script>
	

	$(document).ready(function(){
		$('#reg_id').keyup(function(){

			var reg=$(this).val();
			
			if(reg!=0)
			{
				$.ajax({
					type:'GET',
					url: "{{url('/')}}/get_image/"+reg

				}).done(function(data){
					
					if(data.status)
					{
						$('#img_p').html(`<img src="{{url("/")}}/uploads/emppic/`+data.img+`"width="150px" height="150px" alt="Image">`);
					}
					else
					{
						$('#img_p').html(' ');
					}
				});
			}
		});

	});
function myFunction() {
		document.getElementById("mybtn").reset();
	}
</script>
@endsection
<!-- <script>
	function myFunction() {
		document.getElementById("mybtn").reset();
	}
</script> -->
