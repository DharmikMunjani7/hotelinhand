@if(session()->has('reception') )
<!DOCTYPE html>
<html>
<!-- Mirrored from wahabali.com/work/pearl-demo/index-hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 11:51:00 GMT -->
<head>
    <title>HotelInHand | Enjoy Your Food With Us</title>
	 <script type="text/javascript" src="{{url('https://cdn.jsdelivr.net/npm/sweetalert2')}}"></script>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<meta charset="utf-8"/>
   	
	<meta name="csrf-token" content="{{csrf_token()}}"/>
   
	<link rel="icon" type="image/png" href="{{url('logo.png')}}">
	
    <!--main file-->
	<link href="{{url('hotel/css/pearl-hotel.css')}}" rel="stylesheet" type="text/css">
    
    <!--Medical Guide Icons-->
	<link href="{{url('hotel/fonts/pearl-icons.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Default Color-->
	<link href="{{url('hotel/css/default-color.css')}}" rel="stylesheet" id="color"  type="text/css">
    
    <!--bootstrap-->
	<link href="{{url('hotel/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="{{url('hotel/css/dropmenu.css')}}" rel="stylesheet" type="text/css">
    
	<!--Sticky Header-->
	<link href="{{url('hotel/css/sticky-header.css')}}" rel="stylesheet" type="text/css">
	
	<!--Sticky Countdown-->
	<link href="{{url('hotel/css/countdown.css')}}" rel="stylesheet" type="text/css">
	
	<!--revolution-->
	<link href="{{url('hotel/css/settings.css')}}" rel="stylesheet" type="text/css">    
    <link href="{{url('hotel/css/extralayers.css')}}" rel="stylesheet" type="text/css">    
   
    <!--Owl Carousel-->
	<link href="{{url('hotel/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">    
	
	<!--Date Picker-->
	<link href="{{url('hotel/css/date-pick.css')}}" rel="stylesheet" type="text/css">    
	
	<!--Form Dropdown-->
	<link href="{{url('hotel/css/form-dropdown.css')}}" rel="stylesheet" type="text/css">    
	
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="{{url('hotel/css/jquery.mmenu.all.css')}}" />
	
		<!--PreLoader-->
	<link href="{{url('hotel/css/loader.css')}}" rel="stylesheet" type="text/css">    
   
    <!--switcher-->
	<link href="{{url('hotel/css/switcher.css')}}" rel="stylesheet" type="text/css">	
	<Style>
		.hotel-rooms{
			padding-bottom:0px !important; 
		}
	</Style>
	
</head>
  <body>
 
	
	
  <div id="wrap">
   
   

  
  <!--Start Header-->
	<div id="header-2">
       <header class="header">
	   		<a href="index-hotel.html"><img class="logo" src="{{url('logo22.png')}}" height="60px" alt=""></a>
			
			
            <nav class="menu-5 nav">
            	<ul class="wtf-menu">
                	<li><a href="{{url('bookroom')}}" class="select-item" >Book Room</a></li>
					
			
            </nav>
            
            <nav class="menu-5 nav">
				
			 </ul>	
				 	<ul class="wtf-menu">
                	<li><a href="{{url('customer')}}" class="select-item" >Add Customer </a></li>
					
				 </ul></nav>


            <nav class="menu-5 nav">
				
			 </ul>	
				 	<ul class="wtf-menu">
                	<li><a href="{{url('rr')}}" class="select-item" >Room Cart </a></li>
					
				 </ul></nav>	
	
	 <nav class="menu-5 nav">
				
			 </ul>	
				 	<ul class="wtf-menu">
                	<li><a href="{{url('rs')}}" class="select-item" >Room Status</a></li>
					
				 </ul></nav>	
	<ul class="get-touch">
				<li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+91 80007 54750</span></a></li>
				<li class="book-table"><a href="{{url('logout6')}}"><span>LOG OUT</span> <i class="icon-angle-right"></i></a></li>
				
				
				
			</ul>
	
       </header>
	</div>
    
   <!--End Header-->
	
	
  
   <!--Start Header-->
	

    
    <!--End Header-->


<head>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


    
	 
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="icon" type="image/png" href="logo.png">
	
    <!--main file-->
	<link href="css/pearl-hotel.css" rel="stylesheet" type="text/css">
    
    <!--Medical Guide Icons-->
	<link href="fonts/pearl-icons.css" rel="stylesheet" type="text/css">
	
	<!-- Default Color-->
	<link href="css/default-color.css" rel="stylesheet" id="color"  type="text/css">
    
    <!--bootstrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="css/dropmenu.css" rel="stylesheet" type="text/css">
    
	<!--Sticky Header-->
	<link href="css/sticky-header.css" rel="stylesheet" type="text/css">
	
	<!--Sticky Countdown-->
	<link href="css/countdown.css" rel="stylesheet" type="text/css">
	
	<!--revolution-->
	<link href="css/settings.css" rel="stylesheet" type="text/css">    
    <link href="css/extralayers.css" rel="stylesheet" type="text/css">    
   
 <!--Date Picker-->
	<link href="css/date-pick.css" rel="stylesheet" type="text/css">    
	

    <!--Owl Carousel-->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">    
	
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	
	<!--PreLoader-->
	<link href="css/loader.css" rel="stylesheet" type="text/css">    
   
    <!--switcher-->
	<link href="css/switcher.css" rel="stylesheet" type="text/css">	
	
</head>

   
   

 @yield('contant')


<a href="#0" class="cd-top"></a>
  </div>




<script type="text/javascript" src="js/jquery.js"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="js/scroll-desktop.js"></script>
<script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>

<!-- Paralllax background -->
<script type="text/javascript" src="js/parallax.html"></script>

<!-- Countdown -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/cart-detail.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="js/custom.js"></script> 


<!-- Date Picker and input hover -->
<script type="text/javascript" src="js/classie.js"></script> 
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>


<!-- Switcher -->
<script type="text/javascript" src="js/switcher-hotel.js"></script> 
<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  


</script>  


<!-- Date Picker -->	
<script type="text/javascript">
[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..

// events:
inputEl.addEventListener( 'focus', onInputFocus );
inputEl.addEventListener( 'blur', onInputBlur );
} );

function onInputFocus( ev ) {
classie.add( ev.target.parentNode, 'input--filled' );
}

function onInputBlur( ev ) {
if( ev.target.value.trim() === '' ) {
classie.remove( ev.target.parentNode, 'input--filled' );
}
}

//date picker
jQuery("#datepicker").datepicker({
inline: true
});

jQuery("#datepicker2").datepicker({
inline: true
});

<!-- Form Drop Down -->
$(document).ready(function() {

		$(".basic-example").heapbox();

});

</script>


	
	
	
	<!--Start Footer-->
		<footer class="footer-hotel-dark" id="footer">
			<div class="container">
				
				
				
				<div class="hotel-get-touch">
					<div class="row">
						
						<div class="col-md-4">
							<div class="get-touch-sec">
								
								<i class="icon-phone"></i>
								<div class="text">
									<span><strong>Phone</strong></span>
									<span>+91 80007 54750</span>
								</div>
								
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="get-touch-sec">
								
								<i class="icon-map"></i>
								<div class="text">
									<span><strong>Address</strong></span>
									<span>GF Golden Squre,Mota Varachha ,surat</span>
								</div>
								
							</div>
						</div>
						
						
						
					</div>
				</div>
				
				
			</div>
				
				
				
		
				
				
				
				<div class="copyrights">
					
					<div class="container">
				
					<p>Copyright ©2019 HotelInHand.</p>
			
					</div>
					
				</div>
				
				
		</footer>
	<!--End Footer-->
	
	
	
	
	



<a href="#0" class="cd-top"></a>
  </div>




<script type="text/javascript" src="{{url('hotel/js/jquery.js')}}"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="{{url('hotel/js/scroll-desktop.js')}}"></script>
<script type="text/javascript" src="{{url('hotel/js/scroll-desktop-smooth.js')}}"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="{{url('hotel/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('hotel/js/jquery.themepunch.tools.min.js')}}"></script>

<!-- Countdown -->
<script type="text/javascript" src="{{url('hotel/js/countdown.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{url('hotel/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('hotel/js/cart-detail.js')}}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{url('hotel/js/jquery.mmenu.min.all.js')}}"></script>

<!-- Form Drop Down -->
<script type="text/javascript" src="{{url('hotel/js/form-dropdown.js')}}"></script>

<!-- Date Picker and input hover -->
<script type="text/javascript" src="{{url('hotel/js/classie.js')}}"></script> 
<script type="text/javascript" src="{{url('hotel/js/jquery-ui-1.10.3.custom.js')}}"></script>

<!-- Booking Accordion -->
<script type="text/javascript" src="{{url('hotel/js/booking-accordiion.js')}}"></script> 

<!-- All Scripts -->
<script type="text/javascript" src="{{url('hotel/js/custom.js')}}"></script> 


<!-- Switcher -->
<script type="text/javascript" src="{{url('hotel/js/switcher-hotel.js')}}"></script> 



<!-- Date Picker -->	
<script type="text/javascript">
[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..

// events:
inputEl.addEventListener( 'focus', onInputFocus );
inputEl.addEventListener( 'blur', onInputBlur );
} );

function onInputFocus( ev ) {
classie.add( ev.target.parentNode, 'input--filled' );
}

function onInputBlur( ev ) {
if( ev.target.value.trim() === '' ) {
classie.remove( ev.target.parentNode, 'input--filled' );
}
}

//date picker
jQuery("#datepicker").datepicker({
inline: true
});

jQuery("#datepicker2").datepicker({
inline: true
});

<!-- Form Drop Down -->
$(document).ready(function() {

		$(".basic-example").heapbox();

});

</script>
 

<!-- Revolution Slider -->	
<script type="text/javascript">
jQuery('.tp-banner').show().revolution(
{
dottedOverlay:"none",
delay:16000,
startwidth:1170,
startheight:900,
hideThumbs:200,

thumbWidth:100,
thumbHeight:50,
thumbAmount:5,

navigationType:"nexttobullets",
navigationArrows:"solo",
navigationStyle:"preview",

touchenabled:"on",
onHoverStop:"on",

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

parallax:"mouse",
parallaxBgFreeze:"on",
parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

keyboardNavigation:"off",

navigationHAlign:"center",
navigationVAlign:"bottom",
navigationHOffset:0,
navigationVOffset:20,

soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:20,
soloArrowLeftVOffset:0,

soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:20,
soloArrowRightVOffset:0,

shadow:0,
fullWidth:"on",
fullScreen:"off",

spinner:"spinner4",

stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,

shuffle:"off",

autoHeight:"off",						
forceFullWidth:"off",						



hideThumbsOnMobile:"off",
hideNavDelayOnMobile:1500,						
hideBulletsOnMobile:"off",
hideArrowsOnMobile:"off",
hideThumbsUnderResolution:0,

hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
startWithSlide:0,
videoJsPath:"rs-plugin/videojs/",
fullScreenOffsetContainer: ""	
});
</script>


</body>

<!-- Mirrored from wahabali.com/work/pearl-demo/index-hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 11:55:09 GMT -->
</html>
@else
<script type="text/javascript">
  window.location = "{{url('/login')}}";
</script>
@endif