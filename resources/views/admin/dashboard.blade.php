@extends('admin.adminsidenav')

@section('admindash')
active
@endsection

@section('content')


<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h1 class="font-weight-bold mt-2 admin_dashboard"><u>Welcome Admin!</u></h1>
      </div>
    </div>
  </div>

  <!-- Admin dashboard Employees and Other Activities Section -->
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-md-3">
        <div class="card shadow mb-4">
          <div class="card-body" style="border-left: 6px solid #ff9b44;">
            <div class="row">
              <div class="col-md-4 col-3">
                <div class=" d-flex justify-content-center admin_activity" >
                  <i class="fa fa-bolt fa-2x"></i>
                </div>
              </div>
              <div class="col-md-8 col-9">
                <div>
                  <h2 class="admin_color text-right">{{$a}}</h2>
                  <h2 class="admin_color text-right">Active Employess</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow mb-4">
          <div class="card-body" style="border-left: 6px solid #ff9b44;">
            <div class="row">
              <div class="col-md-4 col-3">
                <div class=" d-flex justify-content-center admin_activity" >
                  <i class="fab fa-creative-commons-nc-jp fa-2x"></i>
                </div>
              </div>
              <div class="col-md-8 col-9">
                <div>
                  <h2 class="admin_color text-right">{{$d}}</h2>
                  <h2 class="admin_color text-right">Deactive Employess</h2>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow mb-4">
          <div class="card-body" style="border-left: 6px solid #ff9b44;">
            <div class="row">
              <div class="col-md-4 col-3">
                <div class=" d-flex justify-content-center admin_activity" >
                  <i class="fas fa-building fa-2x"></i>
                </div>
              </div>
              <div class="col-md-8 col-9">
                <div>
                  <h2 class="admin_color text-right">{{$ad}}</h2>
                  <h2 class="admin_color text-right"> Total Departs</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow mb-4">
          <div class="card-body" style="border-left: 6px solid #ff9b44;">
            <div class="row">
              <div class="col-md-5 col-3">
                <div class=" d-flex justify-content-center admin_activity" >
                  <i class="fab fa-pagelines fa-2x"></i>
                </div>
              </div>
              <div class="col-md-7 col-9">
                <div>
                  <h2 class="admin_color text-right">05</h2>
                  <h2 class="admin_color text-right">Total Leaves</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Admin dashboard Chart and Graphs Section -->
  <div class="container-fluid">
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card line-chart-example shadow-lg">
          <div class="card-header d-flex align-items-center">
            <h4 class="admin_color">Sales OverView</h4>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="lineChartExample" style="display: block; width: 472px; height: 236px;" width="472" height="236" class="chartjs-render-monitor"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-lg bar-chart-example">
        <div class="card-header d-flex align-items-center">
          <h4 class="admin_color">Total Revenue</h4>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas id="barChartExample" width="472" height="236" style="display: block; width: 472px; height: 236px;" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
  </div>
</div>
</div>

<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h3 class="font-weight-bold mt-4 pt-3 admin_dashboard"><u>View Employee</u></h3>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow border-top mt-1">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" >
                <thead>
                  <tr style="color: #ff9b44 ;background: -webkit-linear-gradient(left, #200122,#6f0000);">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>DOJ</th>
                    <th>Address</th>
                    <th>Ph#</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($viewemp as $v)
                  <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->fname}}{{$v->lname}}</td>
                    <td>{{$v->email}}</td>
                    <td>{{$v->dept->dept_name}}</td>
                    <td>{{$v->date_of_joining}}</td>
                    <td>{{$v->address}}</td>
                    <td>{{$v->phone_number}}</td>
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


<section>
   <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h3 class="font-weight-bold mt-4 pt-3 admin_dashboard"><u>View Departments</u></h3>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow border-top mt-n3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" >
                <thead>
                  <tr  style="color: #ff9b44 ;background: -webkit-linear-gradient(left, #200122,#6f0000);">
                    <th>Dept ID</th>
                    <th >Dept Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dept as $d)
                  <tr>
                    <th scope="row">{{$d->id}}</th>
                    <td >{{$d->dept_name}}</td>
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


<!-- Admin dashboard Progress Section 1-->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-lg">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3 border-right">
              <div class="d-flex justify-content-between">
                <h3 class="admin_color font-weight-bold">New Employees</h3>
                <h4 class="text-black">+%18</h4>
              </div>
              <div><h4 class="mt-3 font-weight-bold admin_color2">10</h4></div>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar admin_progress" ></div>
              </div>
              <div><h5 class="mt-3 font-weight-bold admin_color3">Overall Employees 218</h5></div>
            </div>
            <div class="col-md-3 border-right">
              <div class="d-flex justify-content-between">
                <h3 class="admin_color font-weight-bold">Earnings</h3>
                <h4 class="text-black">12%</h4>
              </div>
              <div><h4 class="mt-3 font-weight-bold admin_color2">PKR 1,42,300</h4></div>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar admin_progress" ></div>
              </div>
              <div><h5 class="mt-3 font-weight-bold admin_color3">Previous Month PKR 1,15,852</h5></div>
            </div>
            <div class="col-md-3 border-right">
              <div class="d-flex justify-content-between">
                <h3 class="admin_color font-weight-bold">Expenses</h3>
                <h4 class="text-black">2.8%</h4>
              </div>
              <div><h4 class="mt-3 font-weight-bold admin_color2">PKR 8,500</h4></div>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar admin_progress" ></div>
              </div>
              <div><h5 class="mt-3 font-weight-bold admin_color3">Previous Month PKR 7,500</h5></div>
            </div>
            <div class="col-md-3">
              <div class="d-flex justify-content-between">
                <h3 class="admin_color font-weight-bold">Profit</h3>
                <h4 class="text-black">75%</h4>
              </div>
              <div><h4 class="mt-3 font-weight-bold admin_color2">PKR 1,12,000</h4></div>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar admin_progress" ></div>
              </div>
              <div><h5 class="mt-3 font-weight-bold admin_color3">Previous Month PKR 1,42,000</h5></div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- Admin dashboard Progress Section 2-->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-lg">
        <div class="card-header">
          <h3 class="admin_color font-weight-bold">Statistics</h3>
        </div>
        <div class="card-body">
          <div class="card">
            <div class="card-body">
              <h5 class="admin_color3">Total Leaves</h5>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar admin_progress_leaves" ></div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="admin_color3">Pending Invoice</h5>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar bg-warning admin_progress_leaves1" ></div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="admin_color3">Completed Projects</h5>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar bg-success admin_progress_leaves2" ></div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="admin_color3">Open Tickets</h5>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar admin_progress_leaves3" ></div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="admin_color3">Close Tickets</h5>
              <div class="progress mt-3 progress_height">
                <div class="progress-bar bg-danger admin_progress_leaves4" ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-lg">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3 class="admin_color3 font-weight-bold">Save notes</h3>
            <i class="fas fa-pencil-alt fa-2x admin_color3"></i>
          </div>
        </div>  
        <div class="card-body">
          <input type="textarea" id="notepoints" class="admin_textarea" id="input_hide" 
          placeholder="Write Some Important Notes...">
          <div class="d-flex justify-content-end">
            <button type="submit" class="login100-form-btn mt-4" id="submit"><h6>Save</h6></button>
          </div>
          <div class="card cardbook mt-4 shadow-lg mb-4" >
            <div class="card-body" style="height: 354px;">
              <div class="displaynotessave"><u>Save Notes</u></div>
              <div id="displaynotes"></div>
              <i class="fas fa-times text-danger float-right mt-n3" id="remove"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>

  $('#remove').hide();
  $(document).ready(function(){
    $("#submit").click(function(){
     if (!$('#notepoints').val()) {
      alert('Type Some Thing Please. . . . '); 
    }
    var data=$('#notepoints').val();
    $('#displaynotes').html(data).fadeIn();
    $('.cardbook').fadeIn();
    $('#remove').fadeIn();
  });
    $('#remove').click(function(){
      $("#displaynotes").empty();
      $('#remove').fadeOut();
    });
  });
</script>

</section> 
@endsection