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
@section('edit')
active
@endsection

@section('hrprofile')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3 mb-3">
				<h1 class="font-weight-bold add_emp_heading"><u>Profile</u></h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card shadow">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3 py-2"> 
								<center><img src="{{ asset('uploads/hrpic/'.$profile->profile_image) }}" width="90%"  class="hr_profile img-fluid rounded-circle"></center>
							</div>
							<div class="col-md-9 col-12 p-0" style="border-right: 2px dashed #ccc;">
								<div class="mt-2 hr_profile_heading py-3">
									<div><h1>{{$profile->hrname}}</h1></div>
								<div  class="mt-1"><small>Human Resource</small></div>
								<div class="mt-4"><h1>HR ID : FT-00{{$profile->id}}</h1></div>
								<div  class="mt-1"><small>Date of Join : {{$profile->date_of_joining}}</small></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex mt-2 justify-content-between">
							<div><h2 class="month_heading_color">Phone:</h2></div>
							<div><h6 class="font-weight-lighter">{{$profile->phone_number}}</h6></div>
						</div>
						<div class="d-flex mt-2 justify-content-between">
							<div><h2 class="month_heading_color">Email:</h2></div>
							<div><h6 class="font-weight-lighter">{{$profile->email}}</h6></div>
						</div>
						<div class="d-flex mt-2 justify-content-between">
							<div><h2 class="month_heading_color">Birthday:</h2></div>
							<div><h6 class="font-weight-lighter">{{$profile->date_of_birth}}</h6></div>
						</div>
						<div class="d-flex mt-2 justify-content-between">
							<div><h2 class="month_heading_color">Address:</h2></div>
							<div><h6 class="font-weight-lighter">{{$profile->address}}</h6></div>
						</div>
						<div class="d-flex mt-2 justify-content-between">
							<div><h2 class="month_heading_color">Gender:</h2></div>
							<div><h6 class="font-weight-lighter">{{$profile->gender}}</h6></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-3" >
			<div class="col-md-6">
				<div class="card shadow">
					<div class="card-header bg-light"><h1>Bank Informations</h1></div>
					<div class="card-body">
						<div class="d-flex  justify-content-between">
							<div><h2 class="month_heading_color">Bank name</h2></div>
							<div><h5>{{$profile->bank_name}}</h5></div>
						</div>
						<div class="d-flex mt-3 justify-content-between">
							<div><h2 class="month_heading_color">Bank account No.</h2></div>
							<div><h5>{{$profile->account_num}}</h5></div>
						</div>
						<div class="d-flex mt-3 justify-content-between">
							<div><h2 class="month_heading_color">Swift Code</h2></div>
							<div><h5>{{$profile->swift_code}}4</h5></div>
						</div>
						<div class="d-flex mt-3 justify-content-between">
							<div><h2 class="month_heading_color">IBAN No</h2></div>
							<div><h5>{{$profile->iban_num}}</h5></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card shadow">
					<div class="card-header bg-light"><h1>Emergency Contact</h1></div>
					<div class="card-body">
						<div class="d-flex  justify-content-between">
							<div><h2 class="month_heading_color">Name</h2></div>
							<div><h5>{{$profile->emergency_name}}</h5></div>
						</div>
						<div class="d-flex mt-3 justify-content-between">
							<div><h2 class="month_heading_color">Relationship</h2></div>
							<div><h5>{{$profile->relationship}}</h5></div>
						</div>
						<div class="d-flex mt-3 justify-content-between">
							<div><h2 class="month_heading_color">Phone</h2></div>
							<div><h5>{{$profile->emergency_contact}}</h5></div>
						</div>
						<div class="d-flex mt-3 justify-content-between">
							<div><h2 class="month_heading_color">Address</h2></div>
							<div><h5>{{$profile->emergency_address}}</h5></div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
</section> 
@endsection

