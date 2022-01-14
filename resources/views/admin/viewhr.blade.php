@extends('admin.adminsidenav')


@section('viewhr')
active
@endsection

@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 mt-3">
				<h1 class="font-weight-bold mt-2 admin_dashboard"><u>View HR</u></h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-lg-12">
				<div class="card shadow border-top mt-3">
					<div class="card-body">
						@if(session()->has('success'))
						<div class="alert alert-success">
							{{session()->get('success')}}
						</div>
						@endif
						<div class="table-responsive">
							<table class="table table-striped table-hover" >
								<thead>
									<tr style="color: #ff9b44">
										<th>ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>DOB</th>
										<th>DOJ</th>
										<th>Address</th>
										<th>Ph#</th>
										<th>Emergency Name</th>
										<th>Relation</th>
										<th>Emergency Contact</th>
										<th>Account Num</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach($allhr as $all)
									<tr>
										<td>{{$all->id}}</td>
										<td>{{$all->hrname}}</td>
										<td>{{$all->email}}</td>
										<td>{{$all->date_of_birth}}</td>
										<td>{{$all->date_of_joining}}</td>
										<td>{{$all->address}}</td>
										<td>{{$all->phone_number}}</td>
										<td>{{$all->emergency_name}}</td>
										<td>{{$all->relationship}}</td>
										<td>{{$all->emergency_contact}}</td>
										<td>{{$all->account_num}}</td>
										<td><a href="{{route('admin.edithr',$all->id)}}"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
										<td><a href="{{route('admin.deletehr',$all->id)}}"><i class=" text-dark ml-3 fas fa-trash"></i></a></td>
									</tr>
									@endforeach
									
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