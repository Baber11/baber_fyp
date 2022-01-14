<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button
  {
    -webkit-appearance: none;
    margin: 0;
  }
</style>

@extends('admin.adminsidenav')

@section('adddept')
active
@endsection

@section('content')


<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h1 class="font-weight-bold mt-2 admin_dashboard"><u>Add Departments</u></h1>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">


      <div class="col-md-5">
       @if(session()->has('success'))
       <div class="alert alert-success">
        {{session()->get('success')}}
      </div>
      @endif
      <div class="card shadow-lg mt-4">
        <div class="card-body">
          <form method="POST" action="{{route('admin.dept')}}">
            @csrf
             <!--  <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="number" class="textfield textfield_forms_resp" placeholder=" " >
                  <span class="placeholder">Department ID </span>
                </div>
              </label> -->
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="text" class="textfield textfield_forms_resp" placeholder=" " name="dept" autocomplete="off">
                  <span class="placeholder">Department Name</span>
                </div>
                @if($errors->has('dept'))
                <small class="text-danger">
                  {{$errors->first('dept')}}
                </small>
                @endif
              </label>
              <div class="row">
                <div class="col-md-12 text-center col-12">
                  <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 mt-n2">
        <img src="{{asset('img/adddept.jpg')}}" alt="person" class=" add_emp_form_pic img-fluid "
        height="1000" width="997">
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow border-top mt-n3">
          <div class="card-body">
            @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="table-responsive">
              <table class="table table-striped table-hover" >
                <thead>
                  <tr style="color: #ff9b44">
                    <th>Dept ID</th>
                    <th >Dept Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dept as $d)
                  <tr>
                    <th scope="row">{{$d->id}}</th>
                    <td >{{$d->dept_name}}</td>
                    <td><button value="{{$d->id}}" type="button" class="editbtn"><i class=" text-dark ml-1 far fa-edit"></i></button></td>
                    <td>
                      <form action="{{ route('admin.deletedept') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$d->id}}">
                        <button name="submit"><i class=" text-dark ml-3 fas fa-trash"></i></button>
                      </form>
                    </td>
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


  <!-- Edit modal -->
  
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="d-flex justify-content-end p-2 mt-n1"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="modal_close" style="">&times;</span>
        </button></div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div>
                <h5 class="modal-title text-center" style="font-size: 22px" id="exampleModalLongTitle" >Update Department</h5>
                
                <form method="POST" action="{{route('admin.updatedept')}}">
                  @csrf
                  <input type="hidden" id="dept_id" name="dept_id">

                  <label class="wrapper mt-4">
                    <div class="emp_input_div">
                      <input type="text" class="textfield textfield_forms_resp" placeholder=" " id="dname" name="dept" >
                      <span class="placeholder"> Department Name </span>
                      @if($errors->has('dept'))
                      <small class="text-danger">
                        {{$errors->first('dept')}}
                      </small>
                      @endif

                    </div> 
                  </label>
                  
                  <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">
                      Update
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
  <!-- end edit modal -->
  <script>
    

    //editbtn
    $(document).ready(function(){
      $(document).on('click', '.editbtn', function(){
        var dept_id = $(this).val();
        $('#dept_id').val(dept_id);
      //alert(dept_id);
      $('#editmodal').modal('show');
      console.log("{{url('/')}}/admin/editdept"+'/'+ dept_id);
      $.ajax({
        type: "GET",
        url: "{{url('/')}}/admin/editdept"+'/'+ dept_id,


        success: function (response){
                                    // DBcolname
                                    console.log(response.edit.dept_name);
                                    $('#dname').val(response.edit.dept_name);
                                  }

                                });

    });
    });

    //clear
    function myFunction() {
      document.getElementById("mybtn").reset();
    }
  </script>
</section> 
@endsection