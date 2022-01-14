@extends('admin.adminsidenav')


@section('viewleaves')
active
@endsection

@section('content')
<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h1 class="font-weight-bold mt-2 admin_dashboard"><u>All Employee Leaves</u></h1>
        <div class="mt-4">
          <label class="wrapper">
            <div class="emp_input_div ">
              <input type="text"id="myInput" onkeyup="myFunction()" class="shadow textfield textfield_forms_resp" placeholder=" " >
              <span class="placeholder">Search By Name </span>
            </div> 
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow border-top mt-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="myTable">
                <thead>
                  <tr style="color: #ff9b44">
                    <th>Emp ID</th>
                    <th>Employee Name</th>
                    <th>Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Reason</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($leave as $l)
                  <tr>
                    <th scope="row">00{{$l->addemployee_id}}</th>
                    <td>{{$l->employee->fname}} {{$l->employee->lname}}</td>
                    <td>{{$l->type}}</td>
                    <td>{{$l->start_date}}</td>
                    <td>{{$l->end_date}}</td>
                    <td>{{$l->reason}}</td>
                    <td>{{$l->status}}</td>
                  
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <script>
              function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[0];
                  if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }       
                }
              }
            </script>

          </div>
        </div>
      </div>
    </div>
  </div>





</section> 
@endsection