@extends('admin.adminsidenav')

@section('viewdept')
active
@endsection


@section('content')
<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h1 class="font-weight-bold mt-2 admin_dashboard"><u>View Departments</u></h1>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow border-top mt-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" >
                <thead>
                  <tr style="color: #ff9b44 !important">
                    <th>Dept ID</th>
                    <th>Dept Name</th>
                    <th>Status</th>
                    <th>Eidt</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>001</td>
                    <td>Softwere Delevopement</td>
                    <td>Active</td>
                    <td><a href="#"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
                    <td><a href="#"><i class=" text-dark ml-3 fas fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td>001</td>
                    <td>Softwere Delevopement</td>
                    <td>Active</td>
                    <td><a href="#"><i class=" text-dark ml-1 far fa-edit"></i></a></td>
                    <td><a href="#"><i class=" text-dark ml-3 fas fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td>001</td>
                    <td>Softwere Delevopement</td>
                    <td>Active</td>
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