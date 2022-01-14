@include('hr.head')
<link rel="stylesheet" href="{{ asset('css/admin_side_styling.css')}}" id="theme-stylesheet">
<link rel="stylesheet" href="{{ asset('css/admin_login_sigup_styling.css')}}" id="theme-stylesheet">

<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <div class="sidenav-header-inner text-center">
        <div id="camera-hide" style="position: absolute;top: 35px; right: 84px;">
          <i class="fas fa-camera "></i></div>
          <input type="image" src="{{asset('img/avatar-5.jpg')}}" width="40%" id="showimg" class="img-fluid rounded-circle">
          <input type="file" id="my_file" style="display: none;" />

          <h2 class="h5" style="color:#ff9b44"><b>A D M I N<b></h2><span class="text-light"></span>
          <div style="position: relative;top: -89px;right: -33px" id="active_icon"> <i class="fas fa-circle  shadow-lg"  style="color: #00e700"></i></div>
        </div>
        <div class="sidenav-header-logo">
          <a href="#" class="brand-small text-center"> 
            <st
            rong class="text-primary">Admin</strong>
          </a>
        </div>
      </div>
      <div class="main-menu">

        <!-- All Left Side Attributes -->
        <ul id="side-main-menu side-navbar" class="side-menu list-unstyled">

          <!-- Search dropdwon -->
       <!--    <li>
            <a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse">
              <i class="fas fa-search"></i>Serach
            </a>
            <ul id="exampledropdownDropdown1" class="collapse list-unstyled">
              <i>
                <input type="text" placeholder="Serach Employee" class="form-control border-0 sidenav_emp_search">
              </i>
            </ul>
          </li> -->

          <!-- Department dropdwon -->
        <!-- <li>
          <a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse">
            <i class="fas fa-building"></i>Departments
          </a>
          <ul id="exampledropdownDropdown1" class="collapse list-unstyled">
            <li><a href="adddept">Add  New  Department</a></li>
            <li><a href="viewdept">View  Department</a></li>
          </ul>
        </li> -->
        <li>
          <a href="{{ route('admin.dashboard') }}" class="@yield('admindash')">
            <i class="fas fa-tachometer-alt"></i>DashBoard</a>
        </li>

        <li>
          <a href="{{ route('admin.addhr') }}" class="@yield('addhr')">
          <i class="fas fa-user-tie"></i>Add New HR</a>
        </li>

        <li>
          <a href="{{ route('admin.viewhr') }}" class="@yield('viewhr')">
          <i class="fas fa-eye"></i>View HR</a>
        </li>

        <li><a href="{{ route('admin.adddept') }}" class="@yield('adddept')">
          <i class="fas fa-building"></i>Add New Department</a></li>

         <li>
          <a href="{{ route('admin.viewemp') }}" class="@yield('viewemp')">
          <i class="fas fa-eye"></i>View Employee</a>
        </li>

        <li>
          <a href="{{ route('admin.viewallsalary') }}" class="@yield('viewsalary')">
          <i class="fas fa-eye"></i>View Salary Reports</a>
        </li>

        <li>
          <a href="{{ route('admin.viewleaves') }}" class="@yield('viewleaves')">
          <i class="fas fa-eye"></i>View Employee Leaves</a>
        </li>

      <!--   <li>
          <a href="{{ route('admin.companysite') }}" class="@yield('viewsite')">
          <i class="fas fa-eye"></i>View Company Site</a>
        </li> -->

        <!-- <li><a href="#"><i class="fas fa-user-alt"></i>View Salary Reports</a></li>
        <li><a href="#"><i class="fas fa-user-alt"></i>View Leaves</a></li>
        <li><a href="#"><i class="fas fa-user-alt"></i>View Employess</a></li>
        <li><a href="#"><i class="fas fa-user-alt"></i>View Employess</a></li>
        <li><a href="#"><i class="fas fa-user-alt"></i>View Employess</a></li>
        <li><a href="#"><i class="fas fa-user-alt"></i>View Employess</a></li>
        <li><a href="#"><i class="fas fa-user-alt"></i>View Employess</a></li> -->


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
            <a href="{{route('admin.dashboard')}}" class="navbar-brand">
              <div class="brand-text d-none d-md-inline-block pb-0">
                <strong class="text-primary dashboard_heading">Admin Dashboard</strong>
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
  
  <!-- All the Admin forms and activity Pages to be manage from this section -->
  <section> 
    @yield('content')
  </section>
</div>

<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.js') }}"></script>
<!-- Data And Time Script -->
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
      $("#camera-hide").css("color", "white");
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
