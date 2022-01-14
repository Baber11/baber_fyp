<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}
</style>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.switch2 {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch2 input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ff9b44;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #660004;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
@extends('admin.adminsidenav')
@section('addhr')
active
@endsection


@section('content')
<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-3">
        <h1 class="font-weight-bold mt-2 admin_dashboard"><u>Edit HR</u></h1>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-7">
        <div class="card shadow mt-4">
          <div class="card-body">
            @if(session()->has('success'))
            <div class="alert alert-success">
              {{session()->get('success')}}
            </div>
            @endif
            <form class="" method="POST" action="{{route('admin.updatehr')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="hr_id" value="{{$edit->id}}">
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="text" class="textfield textfield_forms_resp" placeholder=" " name="hrname" value="{{$edit->hrname}}">
                  <span class="placeholder">HR Name </span>
                </div>
                @if($errors->has('hrname'))
                <small class="text-danger">
                  {{$errors->first('hrname')}}
                </small>
                @endif
              </label>
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="email" class="textfield textfield_forms_resp" placeholder=" " name="email" value="{{$edit->email}}" autocomplete="off">
                  <span class="placeholder">Email</span>
                </div>
                @if($errors->has('email'))
                <small class="text-danger">
                  {{$errors->first('email')}}
                </small>
                @endif
              </label>
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="date" class="textfield textfield_forms_resp" placeholder=" " name="dateofjoining" value="{{$edit->date_of_joining}}">
                  <span class="placeholder">Date of Joining</span>
                </div>
                @if($errors->has('dateofjoining'))
                <small class="text-danger">
                  {{$errors->first('dateofjoining')}}
                </small>
                @endif
              </label>
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="text" class="textfield textfield_forms_resp" placeholder=" " name="number" value="{{$edit->phone_number}}" autocomplete="off">
                  <span class="placeholder">Phone Number</span>
                </div>
                @if($errors->has('number'))
                <small class="text-danger">
                  {{$errors->first('number')}}
                </small>
                @endif
              </label>
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="date" name= "dob" class="textfield textfield_forms_resp" value="{{$edit->date_of_birth}}">
                  <span class="placeholder"> Date Of Birth </span>
                </div>
                @if($errors->has('dob'))
                <small class="text-danger">
                  {{$errors->first('dob')}}
                </small>
                @endif
              </label>
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="text" class="textfield textfield_forms_resp" placeholder=" " name="gender" value="{{$edit->gender}}">
                  <span class="placeholder">Gender</span>
                </div>
                @if($errors->has('gender'))
                <small class="text-danger">
                  {{$errors->first('gender')}}
                </small>
                @endif
              </label>
              <label class="wrapper mt-4">
                <div class="emp_input_div">
                  <input type="text" class="textfield textfield_forms_resp" placeholder=" " name="address" value="{{$edit->address}}">
                  <span class="placeholder">Address</span>
                </div>
                @if($errors->has('address'))
                <small class="text-danger">
                  {{$errors->first('address')}}
                </small>
                @endif
              </label>
              <label class="wrapper mt-4">
                <div class="emp_input_div">                 
                  <input type="file" class="form-control textfield textfield_forms_resp" name="profile_image">
                  <img src="{{asset('uploads/hrpic/'.$edit->profile_image)}}" width="80px" height="80px" alt="Image">
                  @if($errors->has('profile_image'))
                  <small class="text-danger">
                    {{$errors->first('profile_image')}}
                  </small>
                  @endif
                </div>
              </label>


              <!-- Personal info section -->
              <div class="">
                <div class="row">
                  <div class="col-md-12 mt-3 mb-3">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h4 class="font-weight-bold admin_dashboard mt-4">
                          <u>Emergency Contact</u>
                        </h4>
                      </div>
                      <div class="mt-4">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round hide-off"></span>
                        </label>
                      </div>
                    </div>
                    <div class="hideme">
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="text" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->emergency_name}}" name="ename">
                          <span class="placeholder"> Name: </span>
                        </div>
                        @if($errors->has('ename'))
                        <small class="text-danger">
                          {{$errors->first('ename')}}
                        </small>
                        @endif
                      </label>
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="text" name= "relationship" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->relationship}}">
                          <span class="placeholder"> Relationship </span>
                        </div>
                        @if($errors->has('relationship'))
                        <small class="text-danger">
                          {{$errors->first('relationship')}}
                        </small>
                        @endif
                      </label>
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="text" name= "econtact" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->emergency_contact}}" autocomplete="off">
                          <span class="placeholder"> Contact: </span>
                        </div>
                        @if($errors->has('econtact'))
                        <small class="text-danger">
                          {{$errors->first('econtact')}}
                        </small>
                        @endif
                      </label>
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="text" name= "eaddress" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->emergency_address}}">
                          <span class="placeholder"> Address </span>
                        </div>
                        @if($errors->has('eaddress'))
                        <small class="text-danger">
                          {{$errors->first('eaddress')}}
                        </small>
                        @endif
                      </label>  
                    </div>
                  </div>
                </div>
              </div>

              <!-- account info section -->
              <div class="">
                <div class="row">
                  <div class="col-md-12 mt-3 mb-3">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h4 class="font-weight-bold admin_dashboard mt-4">
                          <u>Account Info</u>
                        </h4>
                      </div>
                      <div class="mt-4">
                        <label class="switch2">
                          <input type="checkbox">
                          <span class="slider round hide-off"></span>
                        </label>
                      </div>
                    </div>
                    <div class="hideme2">
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="text" name= "bank_name" class="textfield textfield_forms_resp" placeholder=" " value="{{$edit->bank_name}}">
                          <span class="placeholder"> Bank Name: </span>
                        </div>
                        @if($errors->has('bank_name'))
                        <small class="text-danger">
                          {{$errors->first('bank_name')}}
                        </small>
                        @endif
                      </label>
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="number" name= "acc_num" class="textfield textfield_forms_resp" placeholder=" " maxlength="9" value="{{$edit->account_num}}" autocomplete="off">
                          <span class="placeholder"> Account Number: </span>
                        </div>
                        @if($errors->has('acc_num'))
                        <small class="text-danger">
                          {{$errors->first('acc_num')}}
                        </small>
                        @endif
                      </label>
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="number" name= "iban_num" class="textfield textfield_forms_resp" placeholder=" " maxlength="12" value="{{$edit->iban_num}}" autocomplete="off">
                          <span class="placeholder"> IBAN No: </span>
                        </div>
                        @if($errors->has('iban_num'))
                        <small class="text-danger">
                          {{$errors->first('iban_num')}}
                        </small>
                        @endif
                      </label>
                      <label class="wrapper mt-4">
                        <div class="emp_input_div">
                          <input type="number" name= "swift_code" class="textfield textfield_forms_resp" maxlength="8" placeholder=" " value="{{$edit->swift_code}}">
                          <span class="placeholder"> Swift Code: </span>
                        </div>
                        @if($errors->has('swift_code'))
                        <small class="text-danger">
                          {{$errors->first('swift_code')}}
                        </small>
                        @endif
                      </label>  
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">
                      Update
                    </button>
                  </div>
                </div>
                <div class="col-md-6 col-6">
                  <div class="container-login100-form-btn m-t-32">

                    <a style="text-decoration:none" class="login100-form-btn" href="{{route('admin.viewhr')}}">Back</a>
                  </div>
                </div>

              </div>
            </form>
            </div>
        </div>
      </div>
   
    <div class="col-md-5 text-center">
      <img src="{{asset('img/addhr.jpg')}}" alt="person" class="mt-n2 add_emp_form_pic img-fluid "
      height="1000" width="997">
    </div>
  </div>
</div>


</section> 

<script type="text/javascript">
  $(".hideme").hide();
  $(".hideme2").hide();
  $(document).ready(function(){
    $(".switch input").on("change", function(e) {
      const isOn = e.currentTarget.checked;
      if (isOn) {
        $(".hideme").fadeToggle('200');
      } else {
        $(".hideme").fadeToggle('200');
      }
    });

    $(".switch2 input").on("change", function(e) {
      const acisOn = e.currentTarget.checked;
      if (acisOn) {
        $(".hideme2").fadeToggle('200');
      } else {
        $(".hideme2").fadeToggle('200');
      }
    });

  });


  //reset
  function myFunction() {
    document.getElementById("mybtn").reset();
  }
</script>
@endsection