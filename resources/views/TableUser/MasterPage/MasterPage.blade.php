 @if(session()->has('tid'))
<!DOCTYPE html>
<html>
<head>
    <title> Hotel In Hand| Enjoy Your Food With Us </title>
	 
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
 	<meta charset="utf-8"/>
   	
	<meta name="csrf-token" content="{{csrf_token()}}"/>
   
	<link rel="icon" type="image/png" href="{{url('logo
	.png')}}">
	
    <!--main file-->
	<link href="{{url('tableuser/css/pearl-restaurant.css')}}" rel="stylesheet" type="text/css">

    
    <!--Medical Guide Icons-->
	<link href="{{url('tableuser/fonts/pearl-icons.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Default Color-->
	<link href="{{url('tableuser/css/default-color.css')}}" rel="stylesheet" id="color"  type="text/css">
    
    <!--bootstrap-->
	<link href="{{url('tableuser/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="{{url('tableuser/css/dropmenu.css')}}" rel="stylesheet" type="text/css">
    
	<!--Sticky Header-->
	<link href="{{url('tableuser/css/sticky-header.css')}}" rel="stylesheet" type="text/css">
	
	<!--Sticky Countdown-->
	<link href="{{url('tableuser/css/countdown.css')}}" rel="stylesheet" type="text/css">
	
	<!--revolution-->
	<link href="{{url('tableuser/css/settings.css')}}" rel="stylesheet" type="text/css">    
    <link href="{{url('tableuser/css/extralayers.css')}}" rel="stylesheet" type="text/css">    
   
    <!--Owl Carousel-->
	<link href="{{url('tableuser/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">    
	
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="{{url('tableuser/css/jquery.mmenu.all.css')}}" />
	
	<!--PreLoader-->
	<link href="{{url('tableuser/css/loader.css')}}" rel="stylesheet" type="text/css">    
    
	<!--switcher-->
	<link href="{{url('tableuser/css/switcher.css')}}" rel="stylesheet" type="text/css">	

	<style>
		.our-menu{
			padding-top: 10px !important;
			padding-bottom: 10px !important;
		}
		.our-menu.our-menu .menu-sec{
			margin-bottom: 10px !important;

		}
		.main-title span{
		font-family: Lobster !important;
		}
		.our-menu .menu-sec .menu-detail .food-detail span
		{
			font-family: fantasy !important;
		} 
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

	</style>

</head>
  <body>
    

	
  <div id="wrap">
   
   <!--Start PreLoader-->
   <div id="preloader">
		<div id="status">&nbsp;</div>
		<div class="loader">
			<h1>Loading...</h1>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--End PreLoader--> 

  
   <!--Start Header-->
	<div id="header-1">
       <header class="header-two">
		   <div class="container">
	   		
			<img class="logo-dark" src="logo22.png" height="70px">
			
			<div class="cont-right">
			
           
		
			
			
				
					<div class="detail">
		
						<a href="{{url('placeorder')}}" class="white-btn"> Your Order</a>
						<a href="{{url('logout3')}}" class="white-btn"> Log Out</a>
		
						
					</div>
		
	

				
			<ul>

				
			</ul>
			
			</div>
		</div>
	
       </header>
	</div>
    
   <!--End Header-->


	
	<!--Start Header-->
	<div id="header-2" style="display:none">
       <header class="header">
	   		<a><img class="logo" src="hotelicon.png" alt=""></a>
			
		
				
			<ul class="get-touch">
				<li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+91 80007 54750</span></a></li>
				<li class="book-table"><a href="{{url('/index')}}#book-table" class="topLink"><span>book a table</span> <i class="icon-angle-right"></i></a></li>
				
				
				
			</ul>
	
	
       </header>
	</div>
    
   <!--End Header-->
	
	


@yield('contant')
	
	
	<!--Start Footer-->
		<footer class="footer" id="footer">
			<div class="container">
				
				<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<span>Short Info</span>
						<h1>Get in touch</h1>
					</div>
				</div>
				</div>
				
				<div class="get-touch">
					<div class="row">
						
						<div class="col-md-4 col-md-offset-2">
							<div class="contact-us">
									<h4>Contact Us</h4>
									<div class="detail">
										
										<ul>
											<li class="phone"><i class="icon-telephone"></i> <span>+91 80007 54750</span></li>
											<li class="email"><i class="icon-email-1"></i> <span>Help@hotelinhand
											.com</span></li>
											<li class="location"><i class="icon-home"></i> <span>GF Golden Square ,Mota varachha ,Surat.</span></li>
										</ul>
									</div>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="open-hours">
									<h4>Opening Hour</h4>
									<div class="detail">
										<ul>
											<li><span class="day">Monday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Tuesday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Wednesday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Thursday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Friday</span> <span class="time">11 am - 08 pm</span></li>
											<li><span class="day">Saturday</span> <span class="time">10 am - 11 pm</span></li>
											<li><span class="day">Sunday</span> <span class="time">Closed</span></li>
										</ul>
									</div>
							</div>
						</div>
						
					
						
					</div>
				</div>
				
			</div>
			
		</footer>
	<!--End Footer-->
	
	
	
	
	



<a href="#0" class="cd-top"></a>
  </div>




<script type="text/javascript" src="{{url('tableuser/js/jquery.js')}}"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="{{url('tableuser/js/scroll-desktop.js')}}"></script>
<script type="text/javascript" src="{{url('tableuser/js/scroll-desktop-smooth.js')}}"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="{{url('tableuser/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('tableuser/js/jquery.themepunch.tools.min.js')}}"></script>

<!-- Countdown -->
<script type="text/javascript" src="{{url('tableuser/js/countdown.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{url('tableuser/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('tableuser/js/cart-detail.js')}}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{url('tableuser/js/jquery.mmenu.min.all.js')}}"></script>

<!-- All Scripts -->
<script type="text/javascript" src="{{url('tableuser/js/custom.js')}}"></script> 
<script type="text/javascript" src="{{url('https://cdn.jsdelivr.net/npm/sweetalert2')}}"></script>
<!-- Switcher -->



</body>

</html>

@else
<script type="text/javascript">
  window.location = "{{url('/login')}}";
</script>
@endif