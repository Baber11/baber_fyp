@extends('hr.sidenav')

<!-- Designation form start here -->
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

@section('desgs')
active
@endsection

@section('content')
<section class="forms">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Employees Designation</u></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card shadow-sm mt-4">
					<div class="card-body shadow">
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
						<form method="POST" action="{{url('/create2')}}" id="mybtn">
							@csrf
							
							<div id="img_p"></div>
							
							
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" name="id" class="textfield textfield_forms_resp" placeholder=" " value="{{ old('id')}}" id="reg_id"  autocomplete="off" >
									<span class="placeholder">Registraton Number:</span>
								</div>
								@if($errors->has('id'))
								<small class="text-danger">
									{{$errors->first('id')}}
								</small>
								@endif
							</label>
							<label class="wrapper mt-4">
								<!-- <div class="emp_input_div">
									
									<input type="text" class="textfield textfield_forms_resp" placeholder=" " name="fname">
									
									<span class="placeholder">Employee Name</span>
									@if($errors->has('fname'))
							<small class="text-danger">
								{{$errors->first('fname')}}
							</small>
							@endif
						</div> -->

					</label>
					<label class="wrapper mt-4">
						<div class="emp_input_div" style="height: 49px;">
									<!-- <input type="text" class="textfield textfield_forms_resp" placeholder=" " name="desig" value="{{ old('desig')}}">
										<span class="placeholder">Select Designation</span> -->
										<select name="des" class="form-control border-0" style="">
										@foreach($new as $n)
										@php($name=$n->designation_names)
										<option value="" selected disabled hidden>Choose Designation</option>
										<option value="{{$n->id}}"> {{$name}}</option>
										@endforeach

									</select>
									
								</div>
								@if($errors->has('des'))
								<small class="text-danger">
									{{$errors->first('des')}}
								</small>
								@endif
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" class="textfield textfield_forms_resp" placeholder=" " name="pay" value="{{ old('pay')}}" autocomplete="off">
									<span class="placeholder">Basic pay</span>
									
								</div>
								@if($errors->has('pay'))
								<small class="text-danger">
									{{$errors->first('pay')}}
								</small>
								@endif
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" class="textfield textfield_forms_resp" placeholder=" " name="travel" value="{{ old('travel')}}" autocomplete="off">
									<span class="placeholder">Travel Allowance</span>
									
								</div>
								@if($errors->has('travel'))
								<small class="text-danger">
									{{$errors->first('travel')}}
								</small>
								@endif
							</label>
							<label class="wrapper mt-4">
								<div class="emp_input_div">
									<input type="number" class="textfield textfield_forms_resp" placeholder=" " name="medical" value="{{ old('medical')}}"  autocomplete="off">
									<span class="placeholder">Medical Allowance</span>
									
								</div>
								@if($errors->has('medical'))
								<small class="text-danger">
									{{$errors->first('medical')}}
								</small>
								@endif
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
				<img src="img/designation_img.jpg" alt="person" class=" img-fluid "
				height="1000" width="997">
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



