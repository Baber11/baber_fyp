@extends('hr.sidenav')

@section('holidays')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 mt-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Holidays 2021</u></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 ">
				<div class="container-login100-form-btn mt-4 d-flex justify-content-end mb-4">
					<div type="submit" class="mt-1 login100-form-btn add_des_res" data-toggle="modal" data-target="#exampleModalCenter">
						<i class="fas fa-plus mx-2"></i>
						Add Holiday
					</div>
				</div>
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
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr style="border-radius: 32px;color: #fa4299;font-weight: bold;border: solid 1px;">
							<th>So.No</th>
							<th>Title</th>
							<th>Holiday Date</th>
							<!-- <th>Day</th> -->
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($view as $v)
						<tr>
							<td>{{$v->id}}</td>
							<td>{{$v->holiday_name}}</td>
							@php($date= $v->holiday_date)
							<td>{{$date}}</td>
							<!-- <td id="demo"></td> -->
							<td><a href="{{url('/editholiday/'.$v->id)}}"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
							<td><a href="{{url('/deleteholiday/'.$v->id)}}"><i class=" text-dark ml-3 fas fa-trash"></i></a></td>
						</tr>
						@endforeach
						
					</tbody>
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
								<h5 class="modal-title text-center" style="font-size: 22px" id="exampleModalLongTitle" >Add Holiday</h5>

								<form method="POST" action="{{url('insertholiday')}}">
									@csrf
									<label class="wrapper mt-3">
										<div class="emp_input_div">
											<input type="text" class="textfield textfield_forms_resp" placeholder=" " name="holiday_name" value="{{ old('holiday_name')}}">
											<span class="placeholder"> Holiday Name </span>
										</div> 
									</label>
									<label class="wrapper  mt-5">
										<div class="emp_input_div">
											<input type="date" class="textfield textfield_forms_resp" placeholder=" " name="holiday_date" value="{{ old('holiday_date')}}">
											<span class="placeholder"> Holiday Date </span>
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
				</div>
			</div>
		</div>
	</div>

	
<!-- <script type="text/javascript">
	$(document).ready(function(){

		$('#addDesignation').submit(function(event){
			
			event.preventDefault();
			var form = $('#addDesignation')[0];
			var formData = new FormData(form);

			$.ajax({
				url : baseUrl+'/addDesignation',
				type : 'POST',
				data : formData,
				contentType : false,
				processData : false,

				success: function(data){
					$('#designationModal').modal('hide');
				}
			});
		});
	});
</script> -->
<!-- <script >
	$(document).ready(function(){
		$('.editbtn').on('click', function(){
			$('#studentEditModal').modal('show');

			$tr = $(this).closet('tr');

			var data= $tr.children("td").map(function(){
				return $(this).text();
			}).get();
			console.log(data);
			$('#id').val(data[0]);
			$('#holiday_name').val(data[1]);
			$('#holiday_date').val(data[2]);
		});
	});
</script> -->
<script>
// function myFunction() {
//   var JSVar = <?php ($date); ?>;
//   // // document.write(JSVar);
//    var d = new Date(JSVar);
//   var weekday = new Array(7);
//   weekday[0] = "Sunday";
//   weekday[1] = "Monday";
//   weekday[2] = "Tuesday";
//   weekday[3] = "Wednesday";
//   weekday[4] = "Thursday";
//   weekday[5] = "Friday";
//   weekday[6] = "Saturday";

//   var n = weekday[d.getDay()];
//   document.getElementById("demo").innerHTML = n;
// }
// myFunction();
</script>

</section> 
@endsection


