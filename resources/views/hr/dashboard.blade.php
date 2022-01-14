@extends('hr.sidenav')
@section('dashboard')
active
@endsection
<style type="text/css">
	.admin_progress_leaves {
    width: 69%;
    background-color: #ff9b44;

  }
  .admin_progress_leaves1 {
    width: 50%;
    background-color: #ff9b44;

  }
  .progress_height{
    height: 7px!important
  }
  .admin_progress_leaves2{
    width: 40%;
    background-color: #ff9b44;
  }

}
.admin_progress_leaves4 {
  width: 60%;
}
.admin_textarea {
 border-radius: 6px;
 padding: 20px;
 width: 100%;
 background-color: #555555;
 height: 12vh;
 font-style: italic;
 color: #f1e7e7;
 outline: none;
}
.progress-bar{
  background: -webkit-linear-gradient(left, #a445b2, #d41872, #fa4299) !important;
}
</style>

<!-- Dashboard Page start here -->
@section('content')
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-3">
				<section class="dashboard-counts section-padding">
					<div class="container-fluid">
						<div class="row">
							<!-- Count item widget-->
							<div class=" col-md-3 col-12">
								<div class="card shadow" style="border-left: 6px solid #a544b1;">
									<div class="card-body">
										<div class="wrapper count-title d-flex">
											<div class="icon"><i class="fas fa-users-cog fa-2x text-dark mt-1"></i></div>
											<div class="name"><strong class="text-uppercase">TOTAL<br> EMPLOYESS</strong>
												<div class="count-number">{{$getrec}}</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Count item widget-->
							<div class=" col-md-3 col-12">
								<div class="card shadow" style="border-left: 6px solid #a544b1;">
									<div class="card-body">
										<div class="wrapper count-title d-flex">
											<div class="icon"><i class="fa fa-bolt text-dark mt-1"></i></div>
											<div><strong class="text-uppercase">ACTIVE<br> EMPLOYESS</strong>
												<div class="count-number">{{$a}}</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class=" col-md-3 col-12">
								<div class="card shadow" style="border-left: 6px solid #a544b1;">
									<div class="card-body">
										<div class="wrapper count-title d-flex">
											<div class="icon"><i class="fab fa-creative-commons-nc-jp text-dark mt-1"></i></div>
											<div><strong class="text-uppercase">DEACTIVE<br> EMPLOYESS</strong>
												<div class="count-number">{{$d}}</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Count item widget-->
							<div class=" col-md-3 col-12">
								<div class="card shadow" style="border-left: 6px solid #a544b1;">
									<div class="card-body">
										<div class="wrapper count-title d-flex">
											<div class="icon"><i class="fas fa-building text-dark mt-1"></i></div>
											<div class="name"><strong class="text-uppercase">TOTAL<br>DEPARTMENTS</strong>
												<div class="count-number">{{$ad}}</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

	</div>


	<div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header" style="background: #c1c1c1;padding-bottom:23px">
            <h3 class="admin_color font-weight-bold">Statistics</h3>
          </div>
          <div class="card-body">
            <div class="card">
              <div class="card-body">
                <h5 class="admin_color3">Total Employees</h5>
                <div class="progress mt-3 progress_height ">
                  <div class="progress-bar admin_progress_leaves" ></div>
                </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <h5 class="admin_color3">Active Employees</h5>
                <div class="progress mt-3 progress_height ">
                  <div class="progress-bar  admin_progress_leaves1" ></div>
                </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <h5 class="admin_color3">Total Leaves</h5>
                <div class="progress mt-3 progress_height ">
                  <div class="progress-bar admin_progress_leaves2" ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header" style="background: #c1c1c1;">
            <div class="d-flex justify-content-between">
              <h3 class="admin_color3 font-weight-bold">Save notes</h3>
              <i class="fas fa-pencil-alt fa-2x admin_color3"></i>
            </div>
          </div>  
          <div class="card-body">
            <input type="textarea" id="notepoints"  class="admin_textarea" id="input_hide" 
            placeholder="Write Some Important Notes...">
            <div class="d-flex justify-content-end">
              <button type="submit" class="login100-form-btn mt-4" id="submit"><h6>Save</h6></button>
            </div>
            <div class="card cardbook mt-4 shadow-lg mb-4" >
              <div class="card-body" style="height: 118px;">
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



  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header" style="background: #c1c1c1;padding-bottom:23px">
            <h3 class="admin_color font-weight-bold">Statistics</h3>
          </div>
          <div class="card-body">
            <div class="card">
              <div class="card-body">
                <h5 class="admin_color3">Total Employees</h5>
                <div class="progress mt-3 progress_height ">
                  <div class="progress-bar admin_progress_leaves" ></div>
                </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <h5 class="admin_color3">Active Employees</h5>
                <div class="progress mt-3 progress_height ">
                  <div class="progress-bar  admin_progress_leaves1" ></div>
                </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <h5 class="admin_color3">Total Leaves</h5>
                <div class="progress mt-3 progress_height ">
                  <div class="progress-bar admin_progress_leaves2" ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header" style="background: #c1c1c1;">
            <div class="d-flex justify-content-between">
              <h3 class="admin_color3 font-weight-bold">Save notes</h3>
              <i class="fas fa-pencil-alt fa-2x admin_color3"></i>
            </div>
          </div>  
          <div class="card-body">
            <input type="textarea" id="notepoints"  class="admin_textarea" id="input_hide" 
            placeholder="Write Some Important Notes...">
            <div class="d-flex justify-content-end">
              <button type="submit" class="login100-form-btn mt-4" id="submit"><h6>Save</h6></button>
            </div>
            <div class="card cardbook mt-4 shadow-lg mb-4" >
              <div class="card-body" style="height: 118px;">
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
</section> 
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
@endsection