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

 @section('content')
 <section class="forms">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-11 mt-3 mb-3">
 				<h1 class="font-weight-bold add_emp_heading">PaySlip</h1>
 			</div>
 			<div class="col-md-1 mt-3 mb-3">
 				<div><a href="{{url('/downloadpdf')}}/{{$sal->id}}" class="add_emp_heading"><i class="mx-2  far fa-print "></i></a></div>
 			</div>
 		</div>
 	</div>
 	<div class="container-fluid">
 		<div class="card shadow">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="card-body">
 						<h1 class="text-center ">PAYSLIP FOR THE MONTH OF {{$sal->month}} {{$sal->year}}</h1>
 						<div class="row">
 							<div class="col-md-6">
 								<div class="pt-4">
 									<img src="{{asset('img/sliplogo.png')}}">
 								</div>
 							</div>
 							<div class="col-md-6">
 								<div class="text-right mt-4 pt-3">
 									<h1>PAYSLIP #00{{$sal->id}}</h1>
 									<h2 class="mt-3">Salary Month:  {{$sal->month}}, {{$sal->year}}</h2>
 								</div>
 							</div>
 						</div>
 						<div class="row">
 							<div class="col-md-3">
 								<div class="mt-4">
 									<h2 class="mt-2 border-bottom pb-2">{{$comp->company_name}}</h2>
 									<h2 class="mt-2 border-bottom pb-2">{{$comp->address}}</h2>
 								</div>
 								<div class="mt-3">
 									<h2 class="mt-2 border-bottom pb-2">Employee ID: FT-00{{$sal->emp_reg}}</h2>
 									<h2 class="mt-2 border-bottom pb-2">{{$sal->emp_name}}</h2>
 									<h2 class="mt-2 border-bottom pb-2"> {{$sal->designation}}</h2>
 									<h2 class="mt-2 border-bottom pb-2">Dept: {{$sal->dept}}</h2>
 									
 								</div>
 							</div>
 						</div>
 						<div class="row">
 							<div class="col-md-6">
 								<div class="card mt-4 shadow-sm">
 									<div class="card-header bg-light">
 										<h1>Earnings</h1>
 									</div>
 									<div class="card-body">
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>Basic Salary</h2>
 											<h2>{{$sal->basic_pay}} /=PKR</h2>
 										</div>
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>Transport Allowance</h2>
 											<h2>{{$sal->travel_allowance}} /=PKR</h2>
 										</div>
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>Medical Allowance</h2>
 											<h2>{{$sal->medical_allowance}} /=PKR</h2>
 										</div>
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>Bonus</h2>
 											<h2>{{$sal->bonus}} /=PKR</h2>
 										</div>
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>Incentives</h2>
 											<h2>{{$sal->incentives}} /=PKR</h2>
 										</div>
 									</div>
 								</div>
 							</div>
 							<div class="col-md-6">
 								<div class="card mt-4 shadow-sm">
 									<div class="card-header bg-light">
 										<h1>Deductions</h1>
 									</div>
 									<div class="card-body">
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>Provident Fund</h2>
 											<h2>- {{$sal->p_fund}} /=PKR</h2>
 										</div>
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>GST</h2>
 											<h2>- {{$sal->gst}} /=PKR</h2>
 										</div>
 										<div class="d-flex justify-content-between mt-3 border-bottom pb-3">
 											<h2>Income Tax</h2>
 											<h2>- {{$sal->income_tax}} /=PKR</h2>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 						<div>
 							<h2>Net Salary: {{$amount}} /=PKR  (<span id="amt"></span> Rupees Only )</h2>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 <script>
 	var amount= "<?php echo"$amount"?>";
	//console.log(amount);
	const num = amount;
	const wordify = (num) => {
		const single = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
		const double = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"];
		const tens = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
		const formatTenth = (digit, prev) => {
			return 0 == digit ? "" : " " + (1 == digit ? double[prev] : tens[digit])
		};
		const formatOther = (digit, next, denom) => {
			return (0 != digit && 1 != next ? " " + single[digit] : "") + (0 != next || digit > 0 ? " " + denom : "")
		};
		let res = "";
		let index = 0;
		let digit = 0;
		let next = 0;
		let words = [];
		if (num += "", isNaN(parseInt(num))){
			res = "";
		}
		else if (parseInt(num) > 0 && num.length <= 10) {
			for (index = num.length - 1; index >= 0; index--) switch (digit = num[index] - 0, next = index > 0 ? num[index - 1] - 0 : 0, num.length - index - 1) {
				case 0:
				words.push(formatOther(digit, next, ""));
				break;
				case 1:
				words.push(formatTenth(digit, num[index + 1]));
				break;
				case 2:
				words.push(0 != digit ? " " + single[digit] + " Hundred" + (0 != num[index + 1] && 0 != num[index + 2] ? " and" : "") : "");
				break;
				case 3:
				words.push(formatOther(digit, next, "Thousand"));
				break;
				case 4:
				words.push(formatTenth(digit, num[index + 1]));
				break;
				case 5:
				words.push(formatOther(digit, next, "Lakh"));
				break;
				case 6:
				words.push(formatTenth(digit, num[index + 1]));
				break;
				case 7:
				words.push(formatOther(digit, next, "Crore"));
				break;
				case 8:
				words.push(formatTenth(digit, num[index + 1]));
				break;
				case 9:
				words.push(0 != digit ? " " + single[digit] + " Hundred" + (0 != num[index + 1] || 0 != num[index + 2] ? " and" : " Crore") : "")
			};
			res = words.reverse().join("")
		} else res = "";
		return res
	};
	var am= (wordify(num));
	console.log(am);
	$("#amt").html(am);
</script>
@endsection