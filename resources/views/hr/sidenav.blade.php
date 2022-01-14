@include('hr.head')
<link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <div class="sidenav-header-inner text-center">
        <div  style="position: absolute;top: 35px;right: 84px;"><i class="fas fa-camera" id="camera-hide"></i></div>
        <input type="image" src="{{asset('img/avatar-8.jpg')}}" width="40%" id="showimg" class="img-fluid rounded-circle">
        <input type="file" id="my_file" style="display: none;" />
        <h2 class="h5">H R</h2><span class="text-white mt-2" style="font-size: 18px">Duaa Khan</span>
        <div id="active_icon" style="position: relative;top: -84px;right: -33px"> <i class="fas fa-circle  shadow-lg" style="color: #00e700;border: 2px solid #555555;border-radius: 22px"></i></div>
      </div>
      <div class="sidenav-header-logo">
        <a href="#" class="brand-small text-center"> 
          <strong class="text-white">HR</strong>
          <div id="active_icon" style="position: relative;top: -44px;right: -20px"> <i class="fas fa-circle  shadow-lg" style="color: #00e700"></i></div>
          <st
          rong class="text-primary"></strong>
        </a>
      </div>
    </div>
    <div class="main-menu">

      <!-- All Left Side Attributes -->
      <ul id="side-main-menu side-navbar" class="side-menu list-unstyled">

       <li><a href="{{ url('/dashboard') }}" class="@yield('dashboard')"><i class="fas fa-tachometer-alt" ></i>Dashboard</a></li>

        <!-- Employees dropdown -->
        <li>
          <a href="#exampledropdownDropdown2" class="@yield('empl') custom" aria-expanded="false" data-toggle="collapse">
            <i class="fas fa-user-alt"></i>Employees
          </a>
          <ul id="exampledropdownDropdown2" class="collapse list-unstyled">
            <li><a href="{{ url('/addemployee') }}"  class="@yield('addemp')">Add  New  Employees</a></li>
            <li><a href="{{ url('/allemp') }}" class="@yield('viewemp')">View  Employees</a></li>
            <li><a href="{{ url('/viewteremp') }}" class="@yield('teremp')">Terminate  Employees</a></li>
            <li><a href="{{ url('/terview') }}"class="@yield('terview')" > View Terminate </a></li>
          </ul>
        </li>

        <!-- Designation dropdwon -->
        <li>
          <a href="#exampledropdownDropdown5" class="@yield('desg') custom" aria-expanded="false" data-toggle="collapse">
            <i class="fab fa-buysellads"></i>Designation
          </a>
          <ul id="exampledropdownDropdown5" class="collapse list-unstyled">
            <li><a href="{{ url('/adddes') }}"class="@yield('adddesg')">Add Designation</a></li>
            <li><a href="{{ url('/designation') }}"class="@yield('desgs')">Employees Designation</a></li>
            <li><a href="{{ url('/viewdes') }}"class="@yield('desgemp')">View designation</a></li>
          </ul>
        </li>

        <!-- account -->
        <li>
          <a href="#exampledropdownDropdown7" class="@yield('act') custom" aria-expanded="false" data-toggle="collapse">
            <i class="fas fa-comment-dollar"></i>Accounts
          </a>
          <ul id="exampledropdownDropdown7" class="collapse list-unstyled">
            <li><a href="{{ url('/accounts') }}" class="@yield('addact')">Add Accounts</a></li>
            <li><a href="{{ url('/viewaccounts') }}" class="@yield('viewact')">View Accounts</a></li>
          </ul>
        </li>


        <!-- Salary dropdwon -->
        <li>
          <a href="#exampledropdownDropdown4" class="@yield('pay') custom" aria-expanded="false" data-toggle="collapse">
            <i class="fas fa-money"></i>Payroll
          </a>
          <ul id="exampledropdownDropdown4" class="collapse list-unstyled">
            <li><a href="{{ url('/salary') }}" class="@yield('salary')">Employee Salary</a></li>
            <li><a href="{{ url('/viewsalary') }}" class="@yield('viewsalary')">View Salary</a></li>
            <li class="d-none"><a href="{{ url('/payrollitems') }}" class="@yield('payrollitems')">Payroll Items</a></li>
            <li><a href="{{ url('/salaryreport') }}" class="@yield('salaryreport')">Salary Report</a></li>
          </ul>
        </li>

        <!-- Attendence dropdwon -->
        <li>
          <a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse">
            <i class="fab fa-autoprefixer"></i>Leaves
          </a>
          <ul id="exampledropdownDropdown6" class="collapse list-unstyled">
            <li><a href="{{ url('/leaves') }}">Leave Request</a></li>
            <!-- <li><a href="{{ url('/attendence') }}">Attendence Report</a></li> -->
          </ul>
        </li>

        <!-- Salary dropdwon -->
       

        <li><a href="{{ url('/holidays') }}" class="@yield('holidays')"><i class="fas fa-holly-berry" ></i>Holidays</a></li>
        <li><a href="{{ url('/viewtax') }}" class="@yield('tax')"><i class="fas fa-user-alt"></i>Taxes</a></li>

        <!-- HR info and Company info dropdwon -->
        <li>
          <a href="#exampledropdownDropdown8" class="@yield('edit') custom" aria-expanded="false" data-toggle="collapse">
            <i class="fas fa-pen-square"></i>Edit
          </a>
          <ul id="exampledropdownDropdown8" class="collapse list-unstyled">
            <li><a href="{{ url('/hrprofile') }}" class="@yield('hrprofile')">My Profile</a></li>
            <li><a href="{{ url('/companysetting') }}" class="@yield('companysetting')">Settings</a></li>
          </ul>
        </li>

       




       
      </ul>
    </div>
  </div>
</nav>

<div class="page">
  <!--Top navbar-->
  <header class="header">
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-holder d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <a id="toggle-btn" href="#" class="menu-btn sidenav_hide_arrow"><i class="fas fa-bars fa-2x"></i>
            </a>
            <a href="{{url('/dashboard')}}" class="navbar-brand">
              <div class="brand-text d-md-inline-block pb-0">
                <strong class="text-primary dashboard_heading d-none d-sm-block"> HR Dashboard</strong>
              </div>
            </a>
          </div>
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

           <!-- Date and Time-->

           <li class="nav-item ">
             <form name="form_clock">  

              <input type="text" readonly name="clock_txt" class="border-0 font-weight-bold sidenav_date_time date_time_hide"
              size="21" id="clock_txt"> 
            </form>
          </li>
          <!-- Log out-->
          <li class="nav-item mt-2">
              <i class="fa fa-envelope text-white icons mx-3"></i>
            </li>
            <li class="nav-item mt-2">
              <i class="fa fa-bell text-white icons mx-3"></i>
            </li>
            <li class="nav-item mt-2">
              <i class="fa fa-cog text-white icons mx-3 pr-2"></i>
            </li>
          <li class="nav-item">
            <a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"class=" nav-link logout nav-item1 sidenav_logout_border" > <span class="d-none d-sm-inline-block">
              <h6 class="sidenav_logout">Logout</h6></span><i class="fa fa-sign-out fa-2x "></i></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <!-- All the employees forms to be manage from this section -->
  <section> 
    @yield('content')
  </section>
</div>




<!-- Date And Time Script -->
<script>
  $("input[type='image']").click(function() {
    $("input[id='my_file']").click();
  });

  $("#camera-hide").hide();
  $("#active_icon").hide();
  $(document).ready(function(){
    $("#showimg").mouseenter(function(){
      $("#camera-hide").show();
      $("#showimg").css("opacity", "0.5");
      $("#camera-hide").css("color", "black");
    });
    $("#showimg").mouseleave(function(){
      $("#camera-hide").hide();
      $("#showimg").css("opacity", "1");
    });

    $("#active_icon").show();
  });

  function new_clock(){ 
    clock       = new Date(); 
    hour        = clock.getHours(); 
    minutes     = clock.getMinutes(); 
    seconds     = clock.getSeconds(); 
    date        = clock.getDate();
    month       = clock.getMonth() + 1;
    year        = clock.getFullYear();
    print_clock = date + " - " + month + " - " + year + "   " + hour + " : " + minutes + " : " + seconds; 
    document.form_clock.clock_txt.value = print_clock;
    setTimeout(new_clock,1000);
  }
  new_clock();
</script>
