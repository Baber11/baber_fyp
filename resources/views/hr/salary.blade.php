@extends('hr.sidenav')

<!-- Create Salary Page start here -->
@section('pay')
active
@endsection

@section('salary')
active
@endsection

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
	<style>
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button
		{
			-webkit-appearance: none;
			margin: 0;
		}
		.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
		}

		.switch input { 
			opacity: 0;
			width: 0;
			height: 0;
		}

		.switch2 {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
		}

		.switch2 input { 
			opacity: 0;
			width: 0;
			height: 0;
		}

		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #c1c1c1;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.slider:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider {
			background-color: #fa4299;
		}

		input:focus + .slider {
			box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
			border-radius: 34px;
		}

		.slider.round:before {
			border-radius: 50%;
		}
	</style>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Create Salary</u></h1>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-md-2 ">
				<div class="d-flex justify-content-start">
					<!-- <label class="wrapper">
						<div class="emp_input_div ">
							<input type="number" class="textfield textfield_forms_resp" placeholder=" " >
							<span class="placeholder"> Serach Employee ID </span>
						</div> 
					</label> -->
				</div>
			</div>
			<div class="col-md-4">
				<!-- <div class="container-login100-form-btn mt-3">
					<button type="submit" class="login100-form-btn">
						<i class="fas fa-search mx-2"></i>
						Serach
					</button>
				</div> -->
			</div>
		</div> 
	</div>

	<div class="container-fluid">
		<div class="row ">
			<div class="col-md-12">
				<div class=" ">
					<div class="card  rounded shadow-lg">
						@if(session()->has('success'))
						<div class="alert alert-success">
							{{session()->get('success')}}
						</div>
						@endif
						<form method="POST" action="{{url('/insertsalary')}}">
							@csrf
							<div class="card-body ">

								<!-- Salary Process Dropdwon -->
								<div class="row mb-4">
									<div class="col-md-2 mb-3">
										
										<h3 class="month_heading_color mb-3">Current Year</h3>
										<label class="wrapper mt-2">
											<div class="emp_input_div company_setting_field">
												<span id="year" class="form-control border-0"></span>  
												<input type="hidden" id="h_year" name="year">
											</div> 

										</label>										
									</div>
									<div class="col-md-2 mb-3">
										<h3 class="month_heading_color mb-3">Month</h3>
										<label class="wrapper mt-2">
											<div class="emp_input_div company_setting_field">
												<p id="demo" class=" border-0 form-control border-0" ></p> 
												<input type="hidden" id="h_month" name="month"> 
											</div> 
										</label>										
									</div>
									<div class="col-md-2 mb-3">
										<h3 class="month_heading_color mb-3">Department</h3>
										<label class="wrapper mt-2">
											<div class="emp_input_div company_setting_field">
												
												
												<select class="form-control border-0" id="dept" name="dept">
													
													<option selected disabled required >Select</option>													@foreach($dept as $d)
													<option value="{{$d->id}}">{{$d->dept_name}}</option>

													@endforeach
													<!-- <option>Software Engineer</option>
													<option>Fornt End Dev</option>
													<option>Back End Dev</option> -->
												</select>
												
											</div> 
										</label>										
									</div>
									<div class="col-md-2 mb-3">
										<h3 class="month_heading_color mb-3">Employee Name</h3>
										<label class="wrapper mt-2">
											<div class="emp_input_div company_setting_field">

												<select id="emp_names" name="emp_reg" class="form-control border-0" required>
													@foreach($emp as $e)

													<option value="" selected disabled hidden>Select</option>
													<option value="{{$e->id}}"> {{$e->fname." ".$e->lname}}</option>
													@endforeach
													
												</select>
											</div> 
										</label>										
									</div>
									<div class="col-md-2">
										<div class="container-login100-form-btn mt-4 pt-2">
											<div id="salaryprocessbutton" class="mt-1 login100-form-btn">
												<i class="fas fa-chalkboard-teacher mx-2"></i>
												Proceed
											</div>
										</div>
									</div>
								</div>
								<div class="container-fluid">
									<div class="row">
										
									</div>
								</div>

								<!-- Salary After Click Process Button -->
								<div class="row mb-4 mt-3 " id="salarydivhide">
									<div class="col-md-12">
										<div class=" pt-2 salary_process_div text-white rounded">
											<div class="row">
												<!-- <div class="col-md-3">
													<div class="text-center mt-3 mb-3">
														<h2>Employee ID:</h2>
														<h4 class="mt-2">HG110013434121</h4>
													</div>
												</div> -->
												<div class="col-md-4">
													<div class="text-center mt-3 mb-3">
														<h2>Employee Name</h2>
														<h4 class="mt-2" id="name"></h4>
														<input type="hidden" name="emp_name" id="h_emp"> 
													</div>
												</div>
												<div class="col-md-4">
													
													<div class="text-center mt-3 mb-3">
														<h2>Account Number </h2>
														<h4 class="mt-2" id="acc" ></h4>
														<input type="hidden" name="emp_account" id="h_acc"> 
													</div>
												</div>
												<div class="col-md-4">
													<div class="text-center mt-3 mb-3">
														<h2>Designation</h2>
														<h4 class="mt-2" id="desig" ></h4>
														<input type="hidden" name="designation" id="h_des"> 
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="container-fluid" id="invoice">
									<div class="row ">
										<div class="col-md-4 col-12">
											<div class="mt-4 d-flex justify-content-between">
												<h2 class="month_heading_color">Basic Pay</h2>
												<h2 class="month_heading_color" id="basicpay" >0 PKR</h2>
												<input type="hidden" name="basic_pay" id="h_bp"> 

											</div>
											<div class="mt-4 d-flex justify-content-between">
												<h2 class="month_heading_color">Transport Allowance:</h2>
												<h2 class="month_heading_color" id="travel" >0 PKR</h2>
												<input type="hidden" name="travel_allowance" id="h_ta"> 

											</div>
											<div class="mt-4 d-flex justify-content-between">
												<h2 class="month_heading_color">Medical Allowance:</h2>
												<input type="hidden" id="h_medical" name="medical_allowance">
												<h2 class="month_heading_color" id="medical">0 PKR</h2>


											</div>
											<div class="mt-5 d-flex justify-content-between">
												<h2 class="month_heading_color">Total Days</h2>
												<h2 class="month_heading_color" id="total" >Days</h2>
												<input type="hidden" name="total_days" id="h_td"> 

											</div>
											<div class="mt-4 d-flex justify-content-between">
												<h2 class="month_heading_color">Present Days</h2>
												<input type="number" name="present_days" id="presentdays" class="form-control ddd" style="width: 14%;" required>
												@if($errors->has('present_days'))
												<small class="text-danger">
													{{$errors->first('present_days')}}
												</small>
												@endif
											</div>

											<div class="mt-4 d-flex justify-content-between">
												<h2 class="month_heading_color">Absent Days</h2>
												<h2 class="month_heading_color" id="absentdays" >0</h2>
												<input type="hidden" name="absent_days" id="h_ad"> 

											</div>

											
										</div>
										<div class="col-md-3" style="display: flex;
										text-align: center;
										justify-content: center;
										align-items: center;">
										<div class="d-none d-sm-block" style="border: solid 1px lightgray;
										height: 40vh;"></div>
									</div>
									<div class="col-md-4 col-12">


										<div class="mt-4 d-flex justify-content-between">
											<h2 class="month_heading_color">Provident Funds</h2>
											<h2 class="month_heading_color" id="f" >0 PKR</h2>
											<input type="hidden" name="p_fund" id="h_pf"> 

										</div>
										<div class="mt-4 d-flex justify-content-between">
											<h2 class="month_heading_color" id="dgst">Gst</h2>
											<h2 class="month_heading_color" id="gst" >0 PKR</h2>
											<input type="hidden" name="gst" id="h_gst"> 

										</div>
										<div class="mt-4 d-flex justify-content-between">
											<h2 class="month_heading_color" id="dincome">Tax</h2>
											<h2 class="month_heading_color" id="income" >0 PKR</h2>
											<input type="hidden" name="income_tax" id="h_it"> 

										</div>

										<div class="d-flex justify-content-between mt-3">
											<div>
												<h1 class="font-weight-bold month_heading_color text-dark mt-4">
													Others
												</h1>

											</div>
											<div class="mt-4">
												<label class="switch">
													<input type="checkbox">
													<span class="slider round hide-off"></span>
												</label>
											</div>
										</div>

										<div class="hideme">
											<div class="mt-4 d-flex justify-content-between hideme2">
												<h2 class="month_heading_color">Bonus</h2>
												<input type="number"  name="bonus" class="form-control ddd" style="width: 45%;" id="bonus" >
												@if($errors->has('bonus'))
												<small class="text-danger">
													{{$errors->first('bonus')}}
												</small>
												@endif
											</div>
											<div class="mt-4 d-flex justify-content-between">
												<h2 class="month_heading_color">Incentives</h2>
												<input type="number" id="incentives" name="incentives" class="form-control ddd" style="width: 45%;" >
												@if($errors->has('incentives'))
												<small class="text-danger">
													{{$errors->first('incentives')}}
												</small>
												@endif
											</div>
										</div>

										


										
									</div>
								</div>
								<div class="row py-4">
									<div class="col-md-12">
										<div class="d-flex justify-content-center">
											<button type="submit" id="submit1" class="mt-4 login100-form-btn">
												<i class="fas fa-check-circle pr-2"></i>
												CREATE SALARY
											</button>
										</div>
									</div>
								</div>
								<!-- final salary -->
								<div class="row">
									<div class="col-md-12 p-0">
										<div class="mt-4 mb-4 d-flex justify-content-end final_salary shadow">
											<h2 class="month_heading_color text-white pr-4">FINAL SALARY : </h2>
											<h2 class="month_heading_color text-white" id="final" >0/= PKR</h2>
											<input type="hidden" name="final_salary" id="h_fs"> 
										</div>
									</div>
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<!-- 	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					<a href="{{ url('slip') }}">
						<button type="submit" class="login100-form-btn">
							Yes
						</button>
					</a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- <button onclick="getOption()"> Check option </button> -->
</section>

<script>
	$(".hideme").hide();
	$(document).ready(function(){

		$(".switch input").on("change", function(e) {
			const isOn = e.currentTarget.checked;
			if (isOn) {
				$(".hideme").fadeToggle('200');
			} else {
				$(".hideme").fadeToggle('200');
			}
		});
	});



		// if ('#dept'.val()) {}
		// function getOption() {
		// var selectElement = document.querySelector('#dept');
  //       var output = selectElement.value;
  //       console.log(output) ;}

  //storing dept selected value
  
  var value1=0;

  $('#dept').change(function(){

  	var id = $(this).val();
  	console.log("{{url('/empnames')}}/"+id+"/"+hyear+"/"+hmonth);

  	$.ajax({
  		type: 'GET',
  		url:  "{{url('/empnames')}}/"+id+"/"+hyear+"/"+hmonth
  	}).done(function(data)
  	{
  		console.log(data+"hhh");
  		$("#emp_names").empty().append('<option selected disabled > Select Employee Names</option>');


  		$.each(data, function(key,val) {

  			$("#emp_names").append('<option value="'+val.id+'" > '+val.fname+' '+val.lname+'</option>');


  		});


  	});


  });

  //proceed
  $('#salaryprocessbutton').click(function(){
  	var id = $("#emp_names").val();
  	var others = 0;
	//console.log(id);
	$.ajax({
		type: 'GET',
		url:  "{{url('/proceed')}}/"+id
	}).done(function(data)
	{	
		//EMP
		console.log(data.emp.fname);
		//$('#name').html(" ");
		var name= data.emp.fname+" "+data.emp.lname;
		$('#name').html(name);
		$("#h_emp").val(name);

		//EMP ACCOUNT
		$('#acc').html(data.account.account_num);
		var hacc= data.account.account_num;
		$("#h_acc").val(hacc);

		//EMP DESIGNATION
		$('#desig').html(data.new);
		var hdes=data.new;
		$("#h_des").val(hdes);

		//CREATE SALARY 
		$('#basicpay').html(data.des.basic_pay+" PKR");
		var f= data.des.basic_pay;
		var ta=data.des.travel_allowance;
		$('#travel').html(ta+" PKR");
		var ma=data.des.medical_allowance;
		$('#medical').html(ma+" PKR");



		//-----------------------------------
		//HIDDEN FIELDS WORK
		$("#h_medical").val(ma);
		$("#h_bp").val(f);
		$("#h_ta").val(ta);
		$("#h_td").val(value1);
		//-----------------------------------


		//TAXES
		var pf = f/100;
		//console.log(n);
		$('#f').html(pf+" PKR");
		//-------------------------------
		//HIDDEN FIELD
		$("#h_pf").val(pf);
		//-------------------------------



		//GST
		$('#dgst').html(data.tax[0].tax_name);
		var vv= data.tax[0].tax_percent;
		var gst= (f/100)*parseInt(vv);
		console.log(gst);
		$('#gst').html(gst+" PKR");
		//console.log(vv);
		//-------------------------------
		//HIDDEN FIELD
		$("#h_gst").val(gst);
		//-------------------------------





		//income
		$('#dincome').html(data.tax[1].tax_name);
		var pp= data.tax[1].tax_percent;
		//console.log(pp);
		var it= (f/100)*parseInt(pp);
		$('#income').html(it+" PKR");
		//-------------------------------
		//HIDDEN FIELD
		$("#h_it").val(it);
		//-------------------------------



		


		//final salary
		$('#submit1').click(function(){
			var x=f+ta+ma-pf-gst-it;
		// var td= $("#total").innerHTML();
		// console.log(document.getElementById.('#total').value());
		//console.log(value1);
		
		var present= $("#presentdays").val();
		//console.log(present);

		var show = value1- present;
		$('#absentdays').html(show);

		//-------------------------------
		//HIDDEN FIELD
		$("#h_ad").val(show);
		//-------------------------------




		//------------------------------
		//BONUSES

		var bonus= $("#bonus").val();
		
		
		var incentives= $("#incentives").val();

		if(bonus != ''){
		others=others+parseInt(bonus);	
		}
		if(incentives != ''){
			others=others+parseInt(incentives);
		}

		var perday= x/value1;
		var subfinal=(perday*present);

		var final=subfinal+others;
		console.log('subfinal + others',subfinal ,'+', others, '=', subfinal+others);
		console.log('perday',perday);
		console.log('sub-final-val',subfinal);
		$('#final').html(parseInt(final)+" PKR");
		console.log('final',final);
		//-------------------------------
		//HIDDEN FIELD
		$("#h_fs").val(final);
		//-------------------------------
		

	});


	});

	
});































  var hyear = document.getElementById("year").innerHTML = new Date().getFullYear();
  $("#h_year").val(hyear);
  //console.log(year);
  const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

  const d = new Date();
  let name = month[d.getMonth()];
  var hmonth= document.getElementById("demo").innerHTML = name;
  $("#h_month").val(hmonth);

  if(name == "January")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 31;
  	value1 = 31;
  }

  else if(name == "February")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 28;
  	value1 = 28;
  }

  else if(name == "March")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 31;
  	value1 = 31;
  }

  else if(name == "April")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 30;
  	value1 = 30;
  }

  else if(name == "May")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 31;
  	value1 = 31;
  }

  else if(name == "June")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 30;
  	value1 = 30;
  }

  else if(name == "July")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 31;
  	value1 = 31;
  }
  else if(name == "August")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 31;
  	value1 = 31;
  }
  else if(name == "September")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 30;
  	value1 = 30;
  }
  else if(name == "October")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 31;
  	value1 = 31;
  }
  else if(name == "November")
  {
  	console.log("HEllo");
  	document.getElementById("total").innerHTML = 30;
  	value1 = 30;
  }
  else{
  	console.log("ghlt");
  	document.getElementById("total").innerHTML = 31;
  	value1 = 31;
  }



  $(document).ready(function(){
  	$('#salarydivhide').hide();
  	$('#invoice').hide();
  	$('#salaryprocessbutton').click(function(){
  		$('#salarydivhide').fadeToggle();
  		$('#invoice').fadeToggle();
  	});

  });

</script>
@endsection


