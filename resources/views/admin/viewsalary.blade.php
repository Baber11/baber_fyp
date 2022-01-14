@extends('admin.adminsidenav')


@section('viewsalary')
active
@endsection

@section('content')
<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h1 class="font-weight-bold mt-2 admin_dashboard"><u>Salary Reports</u></h1>
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
                    <th>ID</th>
                    <th>Emp Name</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Account Num</th>
                    <th>Basic Pay</th>
                    <th>Travel Allowance</th>
                    <th>Medical Allowance</th>
                    <th>Provident Fund</th>
                    <th>GST</th>
                    <th>Income Tax</th>
                    <th>Bonus</th>
                    <th>Incentives</th>
                    <th>Month</th>
                    <th>Present Days</th>
                    <th>Final Salary</th>
                    <th>Year</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($sal as $s)
                  <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->emp_name}}</td>
                    <td>{{$s->designation}}</td>
                    <td>{{$s->dept}}</td>
                    <td>{{$s->emp_account}}</td>
                    <td>{{$s->basic_pay}}</td>
                    <td>{{$s->travel_allowance}}</td>
                    <td>{{$s->medical_allowance}}</td>
                    <td>{{$s->p_fund}}</td>
                    <td>{{$s->gst}}</td>
                    <td>{{$s->income_tax}}</td>
                    <td>{{$s->bonus}}</td>
                    <td>{{$s->incentives}}</td>
                    <td>{{$s->month}}</td>
                    <td>{{$s->present_days}}</td>
                    <td>{{$s->final_salary}}</td>
                    <td>{{$s->year}}</td>
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