@include('hr.head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<style>

@media only screen and (max-width: 812px){
	.loading_h1{
		font-size: 15px!important;
		line-height: 0px!important;
	}
	.loading_h2{
		font-size: 15px!important;
	}
	.video-para{
		font-size: 17px;
		line-height: 28px;
	}
	.btn_admin{
		color: white;
		font-weight: bolder;
		background: linear-gradient(270deg, #DDBF51 0%, #8B6302 100%);
		padding: 11px 34px !important;
		font-size: 13px !important;
		border-radius: 46px;
		border: none;
		font-family: 'Ubuntu', sans-serif;
	}
	.banner_heading1 {
		font-size: 32px !important;
		margin-top: -15px!important
	}
	.video_position{
		position: relative !important;
		top: 29px !important;
	}
	.banr_sec{
		margin-top: 36px!important;
	}
	.build_amz{
		font-size: 39px !important
	}
	.banner_heading {
		font-size: 50px !important;
		line-height: 56px!important;
	}
	.amx {
		font-size: 38px!important;
		margin-top: -31px!important;
		letter-spacing: 0px!important;
	}
	.amx1 {
		color: #353c48!important;
		font-size: 36px!important;
	}
	.footer_links div {
		color: #ae8a24;
		padding: 20px 2px!important;
		font-size: 20px !important;;
		font-weight: bolder!important;
		font-family: 'Raleway', sans-serif;
	}
	footer{
		display: none;
	}
}

.bgimg {
	background-image: url("img/background-img.png");
	background-color: #cccccc;
	background-repeat:no-repeat;
	width: 100%;
}
.svgtop{
	margin-top: 4rem
}
.feature{
	height: 400px;
	display: flex;
	flex-wrap: nowrap;
	flex-direction: column;
	align-content: space-around;
	align-items: center;
	padding: 59px 35px;
	border: solid 7px #ae8a24;
	color: #ae8a24;
	font-family: 'Raleway', sans-serif;
}
.feature  p{
	color: white !important;
	font-family: 'Raleway', sans-serif;	
}
.feature:hover{
	background-color: #323039;
	transition: .3s;
	border: solid 7px white;
	cursor: pointer;
}
.banner_heading{
	font-size: 6rem;
	line-height:74px;
	text-transform: capitalize;
	font-family: 'Raleway', sans-serif;
	color: #b18d26;
	font-weight: bold;
}
.banner_heading1{
	text-align: center;
	font-size: 6rem;
	align-items: center;
	line-height: 105px;
	margin-top: -236px;
	letter-spacing: -2px;
	text-transform: capitalize;
	font-family: 'Raleway', sans-serif;
	color: #b18d26;
	font-weight: bold;
}
.ban-img{
	position: absolute;
	top: -183px;
}
.amx1 {
	color: #353c48;
	font-size: 77px;
}
.banner_heading span{
	font-size: 59px;
	font-weight: 400;
	color: #dabc4e;
}
.loading_h1{
	line-height: 52px;
	text-transform: uppercase;
	font-size: 1.9rem;
	color: goldenrod;
	font-weight: bolder;
	font-family: 'Ubuntu', sans-serif;	
}
.loading_h2{
	line-height: 52px;
	text-transform: uppercase;
	font-size: 1.9rem;
	color: goldenrod;
	font-weight: bolder;
	font-family: 'Ubuntu', sans-serif;	
}


	/*p{
		font-size: 20px;
		line-height: 35px;
		font-weight: lighter;
		font-family: 'Raleway', sans-serif;	
		}*/
		.btn_admin{
			color: white;
			font-weight: bolder;
			background: linear-gradient(270deg, #DDBF51 0%, #8B6302 100%);
			padding: 6px 41px;
			font-size: 25px;
			border-radius: 46px;
			border: none;
			font-family: 'Ubuntu', sans-serif;	
		}
		.footer_links div:hover{
			color: #dabc4e;
			cursor: pointer;
			font-weight: bolder;
			font-family: 'Raleway', sans-serif;	
		}
		.footer_links div{
			color: #ae8a24;
			padding: 94px 25px;
			font-size: 25px; 
			font-weight: bolder;
			font-family: 'Raleway', sans-serif;	
		}
		.zoom:hover {
			-ms-transform: scale(0.9);
			-webkit-transform: scale(0.9);
			transform: scale(0.9);
			-webkit-transition: 0.6s all;

		}
		.footer_margin{
			border-left: solid 1px;
			margin-top: 27px;
			margin-bottom: 23px;
		}
		.course_img {
			-webkit-transition: 0.6s all;

		}
		.btn_admin:hover {
			color: white;
			background: linear-gradient(90deg, #DDBF51 0%, #8B6302 100%);
			-webkit-transition: 0.4s all;

		}
		.amx{
			font-size: 66px;
			letter-spacing: 4px;

		}
		.video_position{
			position: absolute ;
			top: 29px;
		}
		.build_amz{
			font-size: 46px;
			font-weight: 400;
		}
	</style>
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 p-0">
					<video width="100%" autoplay muted loop>
						<source src="img/bgvideo.mp4" type="video/mp4"></video>
						</div>
						<div class="row video_position" style="position: absolute;top: 29px;">
							<div class="col-md-6 col-12">
								<div class="">
									<div>
										<h1 class="loading_h1">"Payroll You Can Always Count On"</h1>
										<h1 class="loading_h2">---Company Name---</h1>
										<p class="video-para" style="color: #e2cf90";    font-style: italic;font-weight: 700;>
											Name has the best pool of designers and developers and incorporates top notch technological tools for all kinds of digital platforms. Our digital experts work rigorously to develop best digital solutions that exceed expectations.
											<br>
											Our clients’ satisfaction is our top most priority. With our premium quality services, timeliness, unfailing support and competitive rates, we have gained a vast customer base across the globe.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="d-flex justify-content-end mt-3">
									<div class="p-2">
										<a href="{{route('admin.login')}}">
											<button class="btn_admin loading_heading">Admin Login</button>
										</a>
									</div>
									<div class="p-2">
										<a href="{{url('/login')}}">
											<button class="btn_admin loading_heading">HR Login</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- banner section -->
			<section style="background: #1b1823;" class="mt-n2 banr_sec">
				<div class="container-fluid">
					<div class="row pb-4">
						<div class="col-md-6">
							<div>
								<img src="{{ asset('img/hero-img.png') }}" width="100%" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center" >
							<div class="">
								<h2 class="banner_heading">
									<span class="build_amz"> We Build Amazing </span><br>
									WEB AND MOBILE APPLICATION
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 p-0">
							<img src="img/img1.png" class="ban-img" width="100%">
						</div>
					</div>
				</div>
			</section>

			<!-- Amazaing Features -->
			<section style="background: #0c0c16;">
				<div class="container-fluid pt-5">
					<div class="row">
						<div class="col-md-12 pt-4 pb-4">
							<div class="d-flex justify-content-center banner_heading">
								<h2 class="amx font-weight-bold">Amazing Features</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="feature shadow-lg mt-3 mb-4">
								<div><i class="fas fa-laptop-code fa-6x"></i></div>
								<h3 class="mt-3">WEB DESIGNING</h3>
								<p class=" text-center">Innovative, appealing and creative web designing services.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature shadow-lg mt-3 mb-4">
								<div><i class="fas fa-mobile-alt fa-6x"></i></div>
								<h3 class="mt-3 text-center">App Design & Development</h3>
								<p class=" text-center">Services4digital is a leading mobile application development company.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature shadow-lg mt-3 mb-4">
								<div><i class="fas fa-share-alt fa-6x"></i></div>
								<h3 class="mt-3 text-center">Social Media Management</h3>
								<p class=" text-center">Social Media Management is imperative for marketing your business.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature shadow-lg mt-3 mb-4">
								<div><i class="fas fa-comments fa-6x"></i></div>
								<h3 class="mt-3 text-center">Customer Relationship</h3>
								<p class=" text-center ggg">Our team provides unfailing Customer Relation Management services.</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="bgimg mt-n2">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 p-0 svgtop">
							<svg id="eZvIpP3iQl61" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1854.962 593.343" shape-rendering="geometricPrecision" text-rendering="geometricPrecision"><g id="eZvIpP3iQl62" transform="matrix(1 0 0 1 -33 -2066.94)"><g id="eZvIpP3iQl63" transform="matrix(1 0 0 1 -3382 728.1)" opacity="0.7"><line id="eZvIpP3iQl64" x1="0" y1="0" x2="0" y2="139.589" transform="matrix(1 0 0 1 3429.93 1792.6)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl65" x1="0" y1="0" x2="0" y2="139.589" transform="matrix(1 0 0 1 4992.08 1567.34)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl66" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 3482.52 1658.29)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl67" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 5044.67 1433.04)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl68" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 3535.11 1644.15)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl69" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 5097.26 1418.89)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl610" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 3587.71 1621.73)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl611" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 5149.85 1396.47)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl612" x1="0" y1="0" x2="0" y2="217.928" transform="matrix(1 0 0 1 3798.07 1461.22)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl613" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 3903.25 1547.26)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl614" x1="0" y1="0" x2="0" y2="163.807" transform="matrix(1 0 0 1 3955.84 1587.36)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl615" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4008.43 1609.29)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl616" x1="0" y1="0" x2="0" y2="77.148" transform="matrix(1 0 0 1 3640.3 1698.41)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl617" x1="0" y1="0" x2="0" y2="77.148" transform="matrix(1 0 0 1 5202.44 1473.15)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl618" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 3692.89 1564.1)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl619" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 5255.03 1338.84)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl620" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 3745.48 1549.95)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl621" x1="0" y1="0" x2="0" y2="189.933" transform="matrix(1 0 0 1 3850.66 1534.38)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl622" x1="0" y1="0" x2="0" y2="139.589" transform="matrix(1 0 0 1 4061.02 1594.44)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl623" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4113.61 1460.13)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl624" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4166.21 1445.99)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl625" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4218.8 1423.57)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl626" x1="0" y1="0" x2="0" y2="139.589" transform="matrix(1 0 0 1 4421.37 1401.32)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl627" x1="0" y1="0" x2="0" y2="200.034" transform="matrix(1 0 0 1 4526.55 1395.71)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl628" x1="0" y1="0" x2="0" y2="217.594" transform="matrix(1 0 0 1 4579.14 1444.05)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl629" x1="0" y1="0" x2="0" y2="183.209" transform="matrix(1 0 0 1 4631.73 1517.69)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl630" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4684.32 1460.82)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl631" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4789.5 1428.18)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl632" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4842.09 1495.58)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl633" x1="0" y1="0" x2="0" y2="156.299" transform="matrix(1 0 0 1 4894.69 1532.47)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl634" x1="0" y1="0" x2="0" y2="121.007" transform="matrix(1 0 0 1 4947.28 1560.68)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl635" x1="0" y1="0" x2="0" y2="189.449" transform="matrix(1 0 0 1 4736.91 1532.47)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl636" x1="0" y1="0" x2="0" y2="77.148" transform="matrix(1 0 0 1 4271.39 1500.25)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl637" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4323.98 1365.94)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl638" x1="0" y1="0" x2="0" y2="218.06" transform="matrix(1 0 0 1 4376.57 1351.8)" fill="none" stroke="rgb(86,189,209)" stroke-width="2" stroke-miterlimit="1"/><line id="eZvIpP3iQl639" x1="0" y1="0" x2="0" y2="189.933" transform="matrix(1 0 0 1 4473.96 1405.28)" fill="none" stroke="rgb(249,93,158)" stroke-width="2" stroke-miterlimit="1"/><rect id="eZvIpP3iQl640" width="29.867" height="59.819" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3415 1820.68)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl641" width="29.867" height="59.819" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4977.14 1595.42)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl642" width="29.867" height="150.068" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3467.59 1720.52)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl643" width="29.867" height="150.068" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 5029.73 1475.27)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl644" width="29.867" height="85.79" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3520.18 1667.39)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl645" width="29.867" height="85.79" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 5082.32 1442.13)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl646" width="29.867" height="96.828" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3572.77 1706.93)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl647" width="29.867" height="96.828" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 5134.91 1481.68)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl648" width="29.867" height="76.76" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3625.36 1660.84)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl649" width="29.867" height="76.76" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 5187.5 1435.59)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl650" width="29.867" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3677.95 1602.98)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl651" width="29.867" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 5240.1 1377.72)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl652" width="29.867" height="78.689" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3730.54 1608.04)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl653" width="29.867" height="165.315" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3783.14 1479.12)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl654" width="29.867" height="147.546" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3835.73 1550.68)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl655" width="29.867" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3888.32 1595.75)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl656" width="29.867" height="49.756" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3940.91 1614.81)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl657" width="29.867" height="145.885" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 3993.5 1624.32)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl658" width="29.867" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4046.09 1569.5)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl659" width="29.867" height="75.68" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4098.68 1537.21)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl660" width="29.867" height="110.984" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4151.27 1506.29)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl661" width="29.867" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4203.86 1474.24)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl662" width="29.866" height="48.418" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4256.45 1515.13)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl663" width="29.866" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4309.04 1448.12)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl664" width="29.866" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4361.63 1374.35)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl665" width="29.866" height="59.819" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4616.8 1597.8)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl666" width="29.866" height="150.068" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4564.21 1477.64)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl667" width="29.866" height="85.79" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4511.62 1462)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl668" width="29.866" height="96.828" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4459.02 1464.05)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl669" width="29.866" height="76.76" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4406.43 1437.96)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl670" width="29.866" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4669.39 1547.9)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl671" width="29.866" height="78.689" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4721.98 1592.97)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl672" width="29.866" height="165.315" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4774.57 1444.05)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl673" width="29.866" height="147.546" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4827.16 1535.61)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl674" width="29.866" height="109.651" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4879.75 1560.68)" fill="rgb(249,93,158)" stroke="none" stroke-width="1" stroke-miterlimit="1"/><rect id="eZvIpP3iQl675" width="29.866" height="49.756" rx="1.866" ry="1.866" transform="matrix(1 0 0 1 4932.34 1579.74)" fill="rgb(86,189,209)" stroke="none" stroke-width="1" stroke-miterlimit="1"/></g></g><script><![CDATA[!function(t,n){"object"==typeof exports&&"undefined"!=typeof module?module.exports=n():"function"==typeof define&&define.amd?define(n):(t="undefined"!=typeof globalThis?globalThis:t||self).__SVGATOR_PLAYER__=n()}(this,(function(){"use strict";function t(n){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(n)}function n(t,n){if(!(t instanceof n))throw new TypeError("Cannot call a class as a function")}function r(t,n){for(var r=0;r<n.length;r++){var e=n[r];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&&(e.writable=!0),Object.defineProperty(t,e.key,e)}}function e(t,n,e){return n&&r(t.prototype,n),e&&r(t,e),t}function i(t){return(i=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function o(t,n){return(o=Object.setPrototypeOf||function(t,n){return t.__proto__=n,t})(t,n)}function u(t,n){return!n||"object"!=typeof n&&"function"!=typeof n?function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t):n}function a(t){var n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,e=i(t);if(n){var o=i(this).constructor;r=Reflect.construct(e,arguments,o)}else r=e.apply(this,arguments);return u(this,r)}}function l(t,n,r){return(l="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(t,n,r){var e=function(t,n){for(;!Object.prototype.hasOwnProperty.call(t,n)&&null!==(t=i(t)););return t}(t,n);if(e){var o=Object.getOwnPropertyDescriptor(e,n);return o.get?o.get.call(r):o.value}})(t,n,r||t)}var f=s(Math.pow(10,-6));function s(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:6;if(Number.isInteger(t))return t;var r=Math.pow(10,n);return Math.round((+t+Number.EPSILON)*r)/r}function c(t,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:f;return Math.abs(t-n)<r}var h=Math.PI/180;function v(t){return t}function y(t,n,r){var e=1-r;return 3*r*e*(t*e+n*r)+r*r*r}function d(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1;return t<0||t>1||r<0||r>1?null:c(t,n)&&c(r,e)?v:function(i){if(i<=0)return t>0?i*n/t:0===n&&r>0?i*e/r:0;if(i>=1)return r<1?1+(i-1)*(e-1)/(r-1):1===r&&t<1?1+(i-1)*(n-1)/(t-1):1;for(var o,u=0,a=1;u<a;){var l=y(t,r,o=(u+a)/2);if(c(i,l))break;l<i?u=o:a=o}return y(n,e,o)}}function g(){return 1}function p(t){return 1===t?1:0}function m(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(1===t){if(0===n)return p;if(1===n)return g}var r=1/t;return function(t){return t>=1?1:(t+=n*r)-t%r}}function b(t,n,r){return t>=.5?r:n}function w(t,n,r){return 0===t||n===r?n:t*(r-n)+n}function x(t,n,r){var e=w(t,n,r);return e<=0?0:e}function k(t,n,r){return 0===t?n:1===t?r:{x:w(t,n.x,r.x),y:w(t,n.y,r.y)}}function A(t,n,r){var e=function(t,n,r){return Math.round(w(t,n,r))}(t,n,r);return e<=0?0:e>=255?255:e}function _(t,n,r){return 0===t?n:1===t?r:{r:A(t,n.r,r.r),g:A(t,n.g,r.g),b:A(t,n.b,r.b),a:w(t,null==n.a?1:n.a,null==r.a?1:r.a)}}function S(t,n,r){if(0===t)return n;if(1===t)return r;var e=n.length;if(e!==r.length)return b(t,n,r);for(var i=[],o=0;o<e;o++)i.push(_(t,n[o],r[o]));return i}function O(t,n){for(var r=[],e=0;e<t;e++)r.push(n);return r}function M(t,n){if(--n<=0)return t;var r=(t=Object.assign([],t)).length;do{for(var e=0;e<r;e++)t.push(t[e])}while(--n>0);return t}var j,P=function(){function t(r){n(this,t),this.list=r,this.length=r.length}return e(t,[{key:"setAttribute",value:function(t,n){for(var r=this.list,e=0;e<this.length;e++)r[e].setAttribute(t,n)}},{key:"removeAttribute",value:function(t){for(var n=this.list,r=0;r<this.length;r++)n[r].removeAttribute(t)}},{key:"style",value:function(t,n){for(var r=this.list,e=0;e<this.length;e++)r[e].style[t]=n}}]),t}(),B=/-./g,E=function(t,n){return n.toUpperCase()};function F(t){return"function"==typeof t?t:b}function I(t){return t?"function"==typeof t?t:Array.isArray(t)?function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:v;if(!Array.isArray(t))return n;switch(t.length){case 1:return m(t[0])||n;case 2:return m(t[0],t[1])||n;case 4:return d(t[0],t[1],t[2],t[3])||n}return n}(t,null):function(t,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:v;switch(t){case"linear":return v;case"steps":return m(n.steps||1,n.jump||0)||r;case"bezier":case"cubic-bezier":return d(n.x1||0,n.y1||0,n.x2||0,n.y2||0)||r}return r}(t.type,t.value,null):null}function R(t,n,r){var e=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i=n.length-1;if(t<=n[0].t)return e?[0,0,n[0].v]:n[0].v;if(t>=n[i].t)return e?[i,1,n[i].v]:n[i].v;var o,u=n[0],a=null;for(o=1;o<=i;o++){if(!(t>n[o].t)){a=n[o];break}u=n[o]}return null==a?e?[i,1,n[i].v]:n[i].v:u.t===a.t?e?[o,1,a.v]:a.v:(t=(t-u.t)/(a.t-u.t),u.e&&(t=u.e(t)),e?[o,t,r(t,u.v,a.v)]:r(t,u.v,a.v))}function q(t,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return t&&t.length?"function"!=typeof n?null:("function"!=typeof r&&(r=null),function(e){var i=R(e,t,n);return null!=i&&r&&(i=r(i)),i}):null}function T(t,n){return t.t-n.t}function N(n,r,e,i,o){var u,a="@"===e[0],l="#"===e[0],f=j[e],s=b;switch(a?(u=e.substr(1),e=u.replace(B,E)):l&&(e=e.substr(1)),t(f)){case"function":if(s=f(i,o,R,I,e,a,r,n),l)return s;break;case"string":s=q(i,F(f));break;case"object":if((s=q(i,F(f.i),f.f))&&"function"==typeof f.u)return f.u(r,s,e,a,n)}return s?function(t,n,r){var e=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(e)return t instanceof P?function(e){return t.style(n,r(e))}:function(e){return t.style[n]=r(e)};if(Array.isArray(n)){var i=n.length;return function(e){var o=r(e);if(null==o)for(var u=0;u<i;u++)t[u].removeAttribute(n);else for(var a=0;a<i;a++)t[a].setAttribute(n,o)}}return function(e){var i=r(e);null==i?t.removeAttribute(n):t.setAttribute(n,i)}}(r,e,s,a):null}function C(n,r,e,i){if(!i||"object"!==t(i))return null;var o=null,u=null;return Array.isArray(i)?u=function(t){if(!t||!t.length)return null;for(var n=0;n<t.length;n++)t[n].e&&(t[n].e=I(t[n].e));return t.sort(T)}(i):(u=i.keys,o=i.data||null),u?N(n,r,e,u,o):null}function z(t,n,r){if(!r)return null;var e=[];for(var i in r)if(r.hasOwnProperty(i)){var o=C(t,n,i,r[i]);o&&e.push(o)}return e.length?e:null}function L(t,n){if(!n.duration||n.duration<0)return null;var r=function(t,n){if(!n)return null;var r=[];if(Array.isArray(n))for(var e=n.length,i=0;i<e;i++){var o=n[i];if(2===o.length){var u=null;if("string"==typeof o[0])u=t.getElementById(o[0]);else if(Array.isArray(o[0])){u=[];for(var a=0;a<o[0].length;a++)if("string"==typeof o[0][a]){var l=t.getElementById(o[0][a]);l&&u.push(l)}u=u.length?1===u.length?u[0]:new P(u):null}if(u){var f=z(t,u,o[1]);f&&(r=r.concat(f))}}}else for(var s in n)if(n.hasOwnProperty(s)){var c=t.getElementById(s);if(c){var h=z(t,c,n[s]);h&&(r=r.concat(h))}}return r.length?r:null}(t,n.elements);return r?function(t,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1/0,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,i=arguments.length>4&&void 0!==arguments[4]&&arguments[4],o=arguments.length>5&&void 0!==arguments[5]?arguments[5]:1,u=t.length,a=e>0?n:0;i&&r%2==0&&(a=n-a);var l=null;return function(f,s){var c=f%n,h=1+(f-c)/n;s*=e,i&&h%2==0&&(s=-s);var v=!1;if(h>r)c=a,v=!0,-1===o&&(c=e>0?0:n);else if(s<0&&(c=n-c),c===l)return!1;l=c;for(var y=0;y<u;y++)t[y](c);return v}}(r,n.duration,n.iterations||1/0,n.direction||1,!!n.alternate,n.fill||1):null}var D=function(){function t(r,e){var i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};n(this,t),this._id=0,this._running=!1,this._rollingBack=!1,this._animations=r,this.duration=e.duration,this.alternate=e.alternate,this.fill=e.fill,this.iterations=e.iterations,this.direction=i.direction||1,this.speed=i.speed||1,this.fps=i.fps||100,this.offset=i.offset||0,this.rollbackStartOffset=0}return e(t,[{key:"_rollback",value:function(){var t=this,n=1/0,r=null;this.rollbackStartOffset=this.offset,this._rollingBack||(this._rollingBack=!0,this._running=!0);this._id=window.requestAnimationFrame((function e(i){if(t._rollingBack){null==r&&(r=i);var o=i-r,u=t.rollbackStartOffset-o,a=Math.round(u*t.speed);if(a>t.duration&&n!=1/0){var l=!!t.alternate&&a/t.duration%2>1,f=a%t.duration;a=(f+=l?t.duration:0)||t.duration}var s=t.fps?1e3/t.fps:0,c=Math.max(0,a);if(c<n-s){t.offset=c,n=c;for(var h=t._animations,v=h.length,y=0;y<v;y++)h[y](c,t.direction)}var d=!1;if(t.iterations>0&&-1===t.fill){var g=t.iterations*t.duration,p=g==a;a=p?0:a,t.offset=p?0:t.offset,d=a>g}a>0&&t.offset>=a&&!d?t._id=window.requestAnimationFrame(e):t.stop()}}))}},{key:"_start",value:function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,r=-1/0,e=null,i={},o=function o(u){t._running=!0,null==e&&(e=u);var a=Math.round((u-e+n)*t.speed),l=t.fps?1e3/t.fps:0;if(a>r+l&&!t._rollingBack){t.offset=a,r=a;for(var f=t._animations,s=f.length,c=0,h=0;h<s;h++)i[h]?c++:(i[h]=f[h](a,t.direction),i[h]&&c++);if(c===s)return void t._stop()}t._id=window.requestAnimationFrame(o)};this._id=window.requestAnimationFrame(o)}},{key:"_stop",value:function(){this._id&&window.cancelAnimationFrame(this._id),this._running=!1,this._rollingBack=!1}},{key:"play",value:function(){!this._rollingBack&&this._running||(this._rollingBack=!1,this.rollbackStartOffset>this.duration&&(this.offset=this.rollbackStartOffset-(this.rollbackStartOffset-this.offset)%this.duration,this.rollbackStartOffset=0),this._start(this.offset))}},{key:"stop",value:function(){this._stop(),this.offset=0,this.rollbackStartOffset=0;var t=this.direction,n=this._animations;window.requestAnimationFrame((function(){for(var r=0;r<n.length;r++)n[r](0,t)}))}},{key:"reachedToEnd",value:function(){return this.iterations>0&&this.offset>=this.iterations*this.duration}},{key:"restart",value:function(){this._stop(),this.offset=0,this._start()}},{key:"pause",value:function(){this._stop()}},{key:"reverse",value:function(){this.direction=-this.direction}}],[{key:"build",value:function(n,r){return(n=function(t,n){if(j=n,!t||!t.root||!Array.isArray(t.animations))return null;for(var r=document.getElementsByTagName("svg"),e=!1,i=0;i<r.length;i++)if(r[i].id===t.root&&!r[i].svgatorAnimation){(e=r[i]).svgatorAnimation=!0;break}if(!e)return null;var o=t.animations.map((function(t){return L(e,t)})).filter((function(t){return!!t}));return o.length?{element:e,animations:o,animationSettings:t.animationSettings,options:t.options||void 0}:null}(n,r))?{el:n.element,options:n.options||{},player:new t(n.animations,n.animationSettings,n.options)}:null}}]),t}();function Q(t){return s(t)+""}function U(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return t&&t.length?t.map(Q).join(n):""}function V(t){return t?null==t.a||t.a>=1?"rgb("+t.r+","+t.g+","+t.b+")":"rgba("+t.r+","+t.g+","+t.b+","+t.a+")":"transparent"}!function(){for(var t=0,n=["ms","moz","webkit","o"],r=0;r<n.length&&!window.requestAnimationFrame;++r)window.requestAnimationFrame=window[n[r]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[n[r]+"CancelAnimationFrame"]||window[n[r]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(n){var r=Date.now(),e=Math.max(0,16-(r-t)),i=window.setTimeout((function(){n(r+e)}),e);return t=r+e,i},window.cancelAnimationFrame=window.clearTimeout)}();var G={f:null,i:function(t,n,r){return 0===t?n:1===t?r:{x:x(t,n.x,r.x),y:x(t,n.y,r.y)}},u:function(t,n){return function(r){var e=n(r);t.setAttribute("rx",Q(e.x)),t.setAttribute("ry",Q(e.y))}}},H={f:null,i:function(t,n,r){return 0===t?n:1===t?r:{width:x(t,n.width,r.width),height:x(t,n.height,r.height)}},u:function(t,n){return function(r){var e=n(r);t.setAttribute("width",Q(e.width)),t.setAttribute("height",Q(e.height))}}},Y=Math.sin,Z=Math.cos,J=Math.acos,K=Math.asin,W=Math.tan,X=Math.atan2,$=Math.PI/180,tt=180/Math.PI,nt=Math.sqrt,rt=function(){function t(){var r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,u=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,a=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0;n(this,t),this.m=[r,e,i,o,u,a],this.i=null,this.w=null,this.s=null}return e(t,[{key:"determinant",get:function(){var t=this.m;return t[0]*t[3]-t[1]*t[2]}},{key:"isIdentity",get:function(){if(null===this.i){var t=this.m;this.i=1===t[0]&&0===t[1]&&0===t[2]&&1===t[3]&&0===t[4]&&0===t[5]}return this.i}},{key:"point",value:function(t,n){var r=this.m;return{x:r[0]*t+r[2]*n+r[4],y:r[1]*t+r[3]*n+r[5]}}},{key:"translateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(!t&&!n)return this;var r=this.m;return r[4]+=r[0]*t+r[2]*n,r[5]+=r[1]*t+r[3]*n,this.w=this.s=this.i=null,this}},{key:"rotateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0;if(t%=360){var n=Y(t*=$),r=Z(t),e=this.m,i=e[0],o=e[1];e[0]=i*r+e[2]*n,e[1]=o*r+e[3]*n,e[2]=e[2]*r-i*n,e[3]=e[3]*r-o*n,this.w=this.s=this.i=null}return this}},{key:"scaleSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1;if(1!==t||1!==n){var r=this.m;r[0]*=t,r[1]*=t,r[2]*=n,r[3]*=n,this.w=this.s=this.i=null}return this}},{key:"skewSelf",value:function(t,n){if(n%=360,(t%=360)||n){var r=this.m,e=r[0],i=r[1],o=r[2],u=r[3];t&&(t=W(t*$),r[2]+=e*t,r[3]+=i*t),n&&(n=W(n*$),r[0]+=o*n,r[1]+=u*n),this.w=this.s=this.i=null}return this}},{key:"resetSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,o=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0,u=this.m;return u[0]=t,u[1]=n,u[2]=r,u[3]=e,u[4]=i,u[5]=o,this.w=this.s=this.i=null,this}},{key:"recomposeSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:null;return this.isIdentity||this.resetSelf(),t&&(t.x||t.y)&&this.translateSelf(t.x,t.y),n&&this.rotateSelf(n),r&&(r.x&&this.skewSelf(r.x,0),r.y&&this.skewSelf(0,r.y)),!e||1===e.x&&1===e.y||this.scaleSelf(e.x,e.y),i&&(i.x||i.y)&&this.translateSelf(i.x,i.y),this}},{key:"decompose",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,r=this.m,e=r[0]*r[0]+r[1]*r[1],i=[[r[0],r[1]],[r[2],r[3]]],o=nt(e);if(0===o)return{origin:{x:s(r[4]),y:s(r[5])},translate:{x:s(t),y:s(n)},scale:{x:0,y:0},skew:{x:0,y:0},rotate:0};i[0][0]/=o,i[0][1]/=o;var u=r[0]*r[3]-r[1]*r[2]<0;u&&(o=-o);var a=i[0][0]*i[1][0]+i[0][1]*i[1][1];i[1][0]-=i[0][0]*a,i[1][1]-=i[0][1]*a;var l=nt(i[1][0]*i[1][0]+i[1][1]*i[1][1]);if(0===l)return{origin:{x:s(r[4]),y:s(r[5])},translate:{x:s(t),y:s(n)},scale:{x:s(o),y:0},skew:{x:0,y:0},rotate:0};i[1][0]/=l,i[1][1]/=l,a/=l;var f=0;return i[1][1]<0?(f=J(i[1][1])*tt,i[0][1]<0&&(f=360-f)):f=K(i[0][1])*tt,u&&(f=-f),a=X(a,nt(i[0][0]*i[0][0]+i[0][1]*i[0][1]))*tt,u&&(a=-a),{origin:{x:s(r[4]),y:s(r[5])},translate:{x:s(t),y:s(n)},scale:{x:s(o),y:s(l)},skew:{x:s(a),y:0},rotate:s(f)}}},{key:"toString",value:function(){return null===this.s&&(this.s="matrix("+this.m.map((function(t){return s(t)})).join(" ")+")"),this.s}}]),t}();Object.freeze({M:2,L:2,Z:0,H:1,V:1,C:6,Q:4,T:2,S:4,A:7});var et={},it=null;function ot(n){var r=function(){if(it)return it;if("object"!==("undefined"==typeof document?"undefined":t(document))||!document.createElementNS)return{};var n=document.createElementNS("http://www.w3.org/2000/svg","svg");return n&&n.style?(n.style.position="absolute",n.style.opacity="0.01",n.style.zIndex="-9999",n.style.left="-9999px",n.style.width="1px",n.style.height="1px",it={svg:n}):{}}().svg;if(!r)return function(t){return null};var e=document.createElementNS(r.namespaceURI,"path");e.setAttributeNS(null,"d",n),e.setAttributeNS(null,"fill","none"),e.setAttributeNS(null,"stroke","none"),r.appendChild(e);var i=e.getTotalLength();return function(t){var n=e.getPointAtLength(i*t);return{x:n.x,y:n.y}}}function ut(t){return et[t]?et[t]:et[t]=ot(t)}function at(t,n,r,e){if(!t||!e)return!1;var i=["M",t.x,t.y];if(n&&r&&(i.push("C"),i.push(n.x),i.push(n.y),i.push(r.x),i.push(r.y)),n?!r:r){var o=n||r;i.push("Q"),i.push(o.x),i.push(o.y)}return n||r||i.push("L"),i.push(e.x),i.push(e.y),i.join(" ")}function lt(t,n,r,e){var i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:1,o=at(t,n,r,e),u=ut(o);try{return u(i)}catch(t){return null}}function ft(t,n,r,e){var i=1-e;return i*i*t+2*i*e*n+e*e*r}function st(t,n,r,e){return 2*(1-e)*(n-t)+2*e*(r-n)}function ct(t,n,r,e){var i=arguments.length>4&&void 0!==arguments[4]&&arguments[4],o=lt(t,n,null,r,e);return o||(o={x:ft(t.x,n.x,r.x,e),y:ft(t.y,n.y,r.y,e)}),i&&(o.a=ht(t,n,r,e)),o}function ht(t,n,r,e){return Math.atan2(st(t.y,n.y,r.y,e),st(t.x,n.x,r.x,e))}function vt(t,n,r,e,i){var o=i*i;return i*o*(e-t+3*(n-r))+3*o*(t+r-2*n)+3*i*(n-t)+t}function yt(t,n,r,e,i){var o=1-i;return 3*(o*o*(n-t)+2*o*i*(r-n)+i*i*(e-r))}function dt(t,n,r,e,i){var o=arguments.length>5&&void 0!==arguments[5]&&arguments[5],u=lt(t,n,r,e,i);return u||(u={x:vt(t.x,n.x,r.x,e.x,i),y:vt(t.y,n.y,r.y,e.y,i)}),o&&(u.a=gt(t,n,r,e,i)),u}function gt(t,n,r,e,i){return Math.atan2(yt(t.y,n.y,r.y,e.y,i),yt(t.x,n.x,r.x,e.x,i))}function pt(t,n,r){return t+(n-t)*r}function mt(t,n,r){var e=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i={x:pt(t.x,n.x,r),y:pt(t.y,n.y,r)};return e&&(i.a=bt(t,n)),i}function bt(t,n){return Math.atan2(n.y-t.y,n.x-t.x)}function wt(t,n,r){var e=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(kt(n)){if(At(r))return ct(n,r.start,r,t,e)}else if(kt(r)){if(n.end)return ct(n,n.end,r,t,e)}else{if(n.end)return r.start?dt(n,n.end,r.start,r,t,e):ct(n,n.end,r,t,e);if(r.start)return ct(n,r.start,r,t,e)}return mt(n,r,t,e)}function xt(t,n,r){var e=wt(t,n,r,!0);return e.a=function(t){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return n?t+Math.PI:t}(e.a)/h,e}function kt(t){return!t.type||"corner"===t.type}function At(t){return null!=t.start&&!kt(t)}var _t=new rt;var St={f:Q,i:w},Ot={f:Q,i:function(t,n,r){var e=w(t,n,r);return e<=0?0:e>=1?1:e}};function Mt(t,n,r,e,i,o,u,a){return n=function(t,n,r){for(var e,i,o,u=t.length-1,a={},l=0;l<=u;l++)(e=t[l]).e&&(e.e=n(e.e)),e.v&&"g"===(i=e.v).t&&i.r&&(o=r.getElementById(i.r))&&(a[i.r]=o.querySelectorAll("stop"));return a}(t,e,a),function(e){var i,o=r(e,t,jt);return o?"c"===o.t?V(o.v):"g"===o.t?(n[o.r]&&function(t,n){for(var r=0,e=t.length;r<e;r++)t[r].setAttribute("stop-color",V(n[r]))}(n[o.r],o.v),(i=o.r)?"url(#"+i+")":"none"):"none":"none"}}function jt(t,n,r){if(0===t)return n;if(1===t)return r;if(n&&r){var e=n.t;if(e===r.t)switch(n.t){case"c":return{t:e,v:_(t,n.v,r.v)};case"g":if(n.r===r.r)return{t:e,v:S(t,n.v,r.v),r:n.r}}}return b(t,n,r)}var Pt={fill:Mt,"fill-opacity":Ot,stroke:Mt,"stroke-opacity":Ot,"stroke-width":St,"stroke-dashoffset":{f:Q,i:w},"stroke-dasharray":{f:function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return t&&t.length>0&&(t=t.map((function(t){return s(t,4)}))),U(t,n)},i:function(t,n,r){var e,i,o,u=n.length,a=r.length;if(u!==a)if(0===u)n=O(u=a,0);else if(0===a)a=u,r=O(u,0);else{var l=(o=(e=u)*(i=a)/function(t,n){for(var r;n;)r=n,n=t%n,t=r;return t||1}(e,i))<0?-o:o;n=M(n,Math.floor(l/u)),r=M(r,Math.floor(l/a)),u=a=l}for(var f=[],c=0;c<u;c++)f.push(s(x(t,n[c],r[c])));return f}},opacity:Ot,transform:function(n,r,e,i){if(!(n=function(n,r){if(!n||"object"!==t(n))return null;var e=!1;for(var i in n)n.hasOwnProperty(i)&&(n[i]&&n[i].length?(n[i].forEach((function(t){t.e&&(t.e=r(t.e))})),e=!0):delete n[i]);return e?n:null}(n,i)))return null;var o=function(t,i,o){var u=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null;return n[t]?e(i,n[t],o):r&&r[t]?r[t]:u};return r&&r.a&&n.o?function(t){var r=e(t,n.o,xt);return _t.recomposeSelf(r,o("r",t,w,0)+r.a,o("k",t,k),o("s",t,k),o("t",t,k)).toString()}:function(t){return _t.recomposeSelf(o("o",t,wt,null),o("r",t,w,0),o("k",t,k),o("s",t,k),o("t",t,k)).toString()}},r:St,"#size":H,"#radius":G,_:function(t,n){if(Array.isArray(t))for(var r=0;r<t.length;r++)this[t[r]]=n;else this[t]=n}};return function(t){!function(t,n){if("function"!=typeof n&&null!==n)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(n&&n.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),n&&o(t,n)}(u,t);var r=a(u);function u(){return n(this,u),r.apply(this,arguments)}return e(u,null,[{key:"build",value:function(t){var n=l(i(u),"build",this).call(this,t,Pt);if(!n)return null;n.el,n.options;var r=n.player;return function(t,n,r){t.play()}(r),r}}]),u}(D)}));
								__SVGATOR_PLAYER__.build({"root":"eZvIpP3iQl61","animations":[{"duration":2000,"direction":1,"iterations":0,"fill":1,"alternate":false,"speed":1,"elements":{"eZvIpP3iQl640":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3415,"y":1820.68,"type":"corner"}},{"t":1000,"v":{"x":3415,"y":1838.84,"type":"corner"}},{"t":2000,"v":{"x":3415,"y":1820.68,"type":"corner"}}]}}},"eZvIpP3iQl641":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4977.14,"y":1595.42,"type":"corner"}},{"t":1000,"v":{"x":4977.14,"y":1615.42,"type":"corner"}},{"t":2000,"v":{"x":4977.14,"y":1595.42,"type":"corner"}}]}}},"eZvIpP3iQl642":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3467.59,"y":1720.52,"type":"corner"}},{"t":1000,"v":{"x":3467.59,"y":1700.52,"type":"corner"}},{"t":2000,"v":{"x":3467.59,"y":1720.52,"type":"corner"}}]}}},"eZvIpP3iQl643":{"transform":{"keys":{"o":[{"t":0,"v":{"x":5029.73,"y":1475.27,"type":"corner"}},{"t":1000,"v":{"x":5029.73,"y":1455.27,"type":"corner"}},{"t":2000,"v":{"x":5029.73,"y":1475.27,"type":"corner"}}]}}},"eZvIpP3iQl644":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3520.18,"y":1667.39,"type":"corner"}},{"t":1000,"v":{"x":3520.18,"y":1687.39,"type":"corner"}},{"t":2000,"v":{"x":3520.18,"y":1667.39,"type":"corner"}}]}}},"eZvIpP3iQl645":{"transform":{"keys":{"o":[{"t":0,"v":{"x":5082.32,"y":1442.13,"type":"corner"}},{"t":1000,"v":{"x":5082.32,"y":1462.13,"type":"corner"}},{"t":2000,"v":{"x":5082.32,"y":1442.13,"type":"corner"}}]}}},"eZvIpP3iQl646":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3572.77,"y":1706.93,"type":"corner"}},{"t":1000,"v":{"x":3572.77,"y":1676.93,"type":"corner"}},{"t":2000,"v":{"x":3572.77,"y":1706.93,"type":"corner"}}]}}},"eZvIpP3iQl647":{"transform":{"keys":{"o":[{"t":0,"v":{"x":5134.91,"y":1481.68,"type":"corner"}},{"t":1000,"v":{"x":5134.91,"y":1461.68,"type":"corner"}},{"t":2000,"v":{"x":5134.91,"y":1481.68,"type":"corner"}}]}}},"eZvIpP3iQl648":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3625.36,"y":1660.84,"type":"corner"}},{"t":1000,"v":{"x":3625.36,"y":1680.84,"type":"corner"}},{"t":2000,"v":{"x":3625.36,"y":1660.84,"type":"corner"}}]}}},"eZvIpP3iQl649":{"transform":{"keys":{"o":[{"t":0,"v":{"x":5187.5,"y":1435.59,"type":"corner"}},{"t":1000,"v":{"x":5187.5,"y":1455.59,"type":"corner"}},{"t":2000,"v":{"x":5187.5,"y":1435.59,"type":"corner"}}]}}},"eZvIpP3iQl650":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3677.95,"y":1602.98,"type":"corner"}},{"t":1000,"v":{"x":3677.95,"y":1582.98,"type":"corner"}},{"t":2000,"v":{"x":3677.95,"y":1602.98,"type":"corner"}}]}}},"eZvIpP3iQl651":{"transform":{"keys":{"o":[{"t":0,"v":{"x":5240.1,"y":1377.72,"type":"corner"}},{"t":1000,"v":{"x":5240.1,"y":1357.72,"type":"corner"}},{"t":2000,"v":{"x":5240.1,"y":1377.72,"type":"corner"}}]}}},"eZvIpP3iQl652":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3730.54,"y":1608.04,"type":"corner"}},{"t":1000,"v":{"x":3730.54,"y":1628.04,"type":"corner"}},{"t":2000,"v":{"x":3730.54,"y":1608.04,"type":"corner"}}]}}},"eZvIpP3iQl653":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3783.14,"y":1479.12,"type":"corner"}},{"t":1000,"v":{"x":3783.14,"y":1459.12,"type":"corner"}},{"t":2000,"v":{"x":3783.14,"y":1479.12,"type":"corner"}}]}}},"eZvIpP3iQl654":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3835.73,"y":1550.68,"type":"corner"}},{"t":1000,"v":{"x":3835.73,"y":1560.68,"type":"corner"}},{"t":2000,"v":{"x":3835.73,"y":1550.68,"type":"corner"}}]}}},"eZvIpP3iQl655":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3888.32,"y":1595.75,"type":"corner"}},{"t":1000,"v":{"x":3888.32,"y":1575.75,"type":"corner"}},{"t":2000,"v":{"x":3888.32,"y":1595.75,"type":"corner"}}]}}},"eZvIpP3iQl656":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3940.91,"y":1614.81,"type":"corner"}},{"t":1000,"v":{"x":3940.91,"y":1634.81,"type":"corner"}},{"t":2000,"v":{"x":3940.91,"y":1614.81,"type":"corner"}}]}}},"eZvIpP3iQl657":{"transform":{"keys":{"o":[{"t":0,"v":{"x":3993.5,"y":1624.32,"type":"corner"}},{"t":1000,"v":{"x":3993.5,"y":1604.32,"type":"corner"}},{"t":2000,"v":{"x":3993.5,"y":1624.32,"type":"corner"}}]}}},"eZvIpP3iQl658":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4046.09,"y":1569.5,"type":"corner"}},{"t":1000,"v":{"x":4046.09,"y":1589.5,"type":"corner"}},{"t":2000,"v":{"x":4046.09,"y":1569.5,"type":"corner"}}]}}},"eZvIpP3iQl659":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4098.68,"y":1537.21,"type":"corner"}},{"t":1000,"v":{"x":4098.68,"y":1517.21,"type":"corner"}},{"t":2000,"v":{"x":4098.68,"y":1537.21,"type":"corner"}}]}}},"eZvIpP3iQl660":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4151.27,"y":1506.29,"type":"corner"}},{"t":1000,"v":{"x":4151.27,"y":1526.29,"type":"corner"}},{"t":2000,"v":{"x":4151.27,"y":1506.29,"type":"corner"}}]}}},"eZvIpP3iQl661":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4203.86,"y":1474.24,"type":"corner"}},{"t":1000,"v":{"x":4203.86,"y":1454.24,"type":"corner"}},{"t":2000,"v":{"x":4203.86,"y":1474.24,"type":"corner"}}]}}},"eZvIpP3iQl662":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4256.45,"y":1515.13,"type":"corner"}},{"t":1000,"v":{"x":4256.45,"y":1535.13,"type":"corner"}},{"t":2000,"v":{"x":4256.45,"y":1515.13,"type":"corner"}}]}}},"eZvIpP3iQl663":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4309.04,"y":1448.12,"type":"corner"}},{"t":1000,"v":{"x":4309.04,"y":1427.12,"type":"corner"}},{"t":2000,"v":{"x":4309.04,"y":1448.12,"type":"corner"}}]}}},"eZvIpP3iQl664":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4361.63,"y":1374.35,"type":"corner"}},{"t":1000,"v":{"x":4361.63,"y":1394.35,"type":"corner"}},{"t":2000,"v":{"x":4361.63,"y":1374.35,"type":"corner"}}]}}},"eZvIpP3iQl665":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4616.8,"y":1597.8,"type":"corner"}},{"t":1000,"v":{"x":4616.8,"y":1577.8,"type":"corner"}},{"t":2000,"v":{"x":4616.8,"y":1597.8,"type":"corner"}}]}}},"eZvIpP3iQl666":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4564.21,"y":1477.64,"type":"corner"}},{"t":1000,"v":{"x":4564.21,"y":1497.64,"type":"corner"}},{"t":2000,"v":{"x":4564.21,"y":1477.64,"type":"corner"}}]}}},"eZvIpP3iQl667":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4511.62,"y":1462,"type":"corner"}},{"t":1000,"v":{"x":4511.62,"y":1442,"type":"corner"}},{"t":2000,"v":{"x":4511.62,"y":1462,"type":"corner"}}]}}},"eZvIpP3iQl668":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4459.02,"y":1464.05,"type":"corner"}},{"t":1000,"v":{"x":4459.02,"y":1484.05,"type":"corner"}},{"t":2000,"v":{"x":4459.02,"y":1464.05,"type":"corner"}}]}}},"eZvIpP3iQl669":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4406.43,"y":1437.96,"type":"corner"}},{"t":1000,"v":{"x":4406.43,"y":1417.96,"type":"corner"}},{"t":2000,"v":{"x":4406.43,"y":1437.96,"type":"corner"}}]}}},"eZvIpP3iQl670":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4669.39,"y":1547.9,"type":"corner"}},{"t":1000,"v":{"x":4669.39,"y":1567.9,"type":"corner"}},{"t":2000,"v":{"x":4669.39,"y":1547.9,"type":"corner"}}]}}},"eZvIpP3iQl671":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4721.98,"y":1592.97,"type":"corner"}},{"t":1000,"v":{"x":4721.98,"y":1572.97,"type":"corner"}},{"t":2000,"v":{"x":4721.98,"y":1592.97,"type":"corner"}}]}}},"eZvIpP3iQl672":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4774.57,"y":1444.05,"type":"corner"}},{"t":1000,"v":{"x":4774.57,"y":1464.05,"type":"corner"}},{"t":2000,"v":{"x":4774.57,"y":1444.05,"type":"corner"}}]}}},"eZvIpP3iQl673":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4827.16,"y":1535.61,"type":"corner"}},{"t":1000,"v":{"x":4827.16,"y":1515.61,"type":"corner"}},{"t":2000,"v":{"x":4827.16,"y":1535.61,"type":"corner"}}]}}},"eZvIpP3iQl674":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4879.75,"y":1560.68,"type":"corner"}},{"t":1000,"v":{"x":4879.75,"y":1580.68,"type":"corner"}},{"t":2000,"v":{"x":4879.75,"y":1560.68,"type":"corner"}}]}}},"eZvIpP3iQl675":{"transform":{"keys":{"o":[{"t":0,"v":{"x":4932.34,"y":1579.74,"type":"corner"}},{"t":1000,"v":{"x":4932.34,"y":1559.74,"type":"corner"}},{"t":2000,"v":{"x":4932.34,"y":1579.74,"type":"corner"}}]}}}}}],"options":{"start":"load","hover":null,"click":null,"scroll":null,"font":"embed","exportedIds":"unique","svgFormat":"animated","title":"Group 5738"},"animationSettings":{"duration":2000,"direction":1,"iterations":0,"fill":1,"alternate":false,"speed":1}})]]></script></svg>
							</div>
						</div>
					</div>

					<section style=" background: white">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12 pt-4 pb-4">
									<div class="d-flex justify-content-center banner_heading">
										<h2 class="amx1 font-weight-bold">Why Choose Us<br>Company Name </h2>
									</div>
									<hr class="">
								</div>

							</div>
							<div class="row p-0">
								<div class="col-md-12 mt-1">
									<div class="d-flex justify-content-center">
										<img src="{{ asset('img/why-choose-img.jpg') }}" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="p-0">
						<img src="img/img1.png" class="img-fluid py-3 mt-4">
						<div class="d-flex justify-content-center">
							<img src="img/bigicon.gif" class="img-fluid">
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<img src="img/course1.png" class="img-fluid zoom course_img">
							</div>
							<div class="col-md-3">
								<img src="img/course2.png" class="img-fluid zoom course_img">
							</div>
							<div class="col-md-3">
								<img src="img/course3.png" class="img-fluid zoom course_img">
							</div>
							<div class="col-md-3">
								<img src="img/course4.png" class="img-fluid zoom course_img">
							</div>
						</div>
					</div>
				</section>
			</section>

			<section>
				<div class="container-fluid">
					<div class="row pt-4">
						<div class="col-md-6">
							<div>
								<img src="{{ asset('img/laptop_img.png') }}" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center mt-5 pt-4" >
							<div class="">
								<h2 class="banner_heading1">
									Ready to Get Started...
								</h2>
								<div class="d-flex justify-content-center mt-4">
									<a href="{{url('/login')}}">
										<button class="btn_admin">Get Connected</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 p-0">
							<img src="img/img1.png" class="ban-img" width="100%">
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer style="background-color: #11121c">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="d-flex justify-content-start footer_links" style="">
							<div class="mx-1">Home</div>
							<div class="mx-1">Contact Us</div>
							<div class="mx-1">Services</div>
						</div>
					</div>
					<div class="col-md-1 footer_margin"> </div>
					<div class="col-md-2">
						<div class="mt-5 pt-5 d-flex justify-content-between">
							<i class="fab fa-facebook-square fa-2x text-white"></i>
							<i class="fab fa-linkedin fa-2x text-white"></i>
							<i class="fab fa-google-plus-square fa-2x text-white text-white"></i>
						</div>
					</div>
					
					
				</div>
			</div>
		</footer>
