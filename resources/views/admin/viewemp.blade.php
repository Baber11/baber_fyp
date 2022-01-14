@extends('admin.adminsidenav')


@section('viewemp')
active
@endsection

@section('content')
<section class="forms">
  <div class="container-fluid">
    <div class="row" id="hidess">
      <div class="col-md-4 mt-3">
        <h1 class="font-weight-bold mt-2 admin_dashboard"><u>View All Employee</u></h1>
        <div class="mt-4">
          <label class="wrapper">
            <div class="emp_input_div ">
              <input type="text" id="myInput" onkeyup="myFunction()" class="shadow textfield textfield_forms_resp" placeholder=" " >
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
                    <td>{{$v->fname}} {{$v->lname}}</td>
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