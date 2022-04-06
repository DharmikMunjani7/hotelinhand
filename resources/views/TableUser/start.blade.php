


 @if(session()->has('tid'))
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Hotel In Hand</title>
	 
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
 	<meta charset="utf-8"/>
   	
	<meta name="csrf-token" content="{{csrf_token()}}"/>
   
	<link rel="icon" type="image/png" href="{{url('logo.png')}}">
	
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
	
    
   <!--End Header-->



	
	

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 50px;
  margin: 2px 2px;
  cursor: pointer;
  align-content: center;

}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 7px;}
.button4 {border-radius: 10px;}
.button5 {border-radius: 60%;}
</style>

<body  style="background:url('imgs/testimonials-bg.jpg');background-repeat: no-repeat;background-size: 100%;" >
    
<form method="post" action="{{url('menu')}}" height="100%" width="100%">
	            	{{csrf_field()}}

					<div class="detail" align="right">
		
						<a href="{{url('logout3')}}" class="white-btn" >	LOGOUT</a>

	
						
					</div>
	<center>
		
					<div class="detail" style="margin-top: 15%;" >
		<h3 style="color: white">ENJOY YOUR FOOD WITH US</h3>
						<a href="{{url('menu')}}" class=" button button4 white-btn" >	ORDER YOUR FOOD</a>

	
						
					</div></center>
</form>
</body>
</html>

	

	
	
	
	
	



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

<!-- Switcher -->



</body>

</html>
@else
<script type="text/javascript">
  window.location = "{{url('/login')}}";
</script>
@endif