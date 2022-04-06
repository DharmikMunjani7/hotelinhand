 @if(session()->has('rid') )

<!DOCTYPE html>
<html>
<!-- Mirrored from wahabali.com/work/pearl-demo/index-hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 11:51:00 GMT -->
<head>
    <title>Welcome to Hotel In Hand</title>
	 <style type="text/css">
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
		
	 </style>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
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
	
</head>
  <body>
    

	
	
  <div id="wrap">
   
   

  
  <!--Start Header-->
	<div id="header-2">
       <header class="header">
	   		<a href="index-hotel.html"><img class="logo" src="{{url('logo22.png')}}" alt="" style="height: 60px;width: 100px;" ></a>
			
			
            <nav class="menu-5 nav">
            	<ul class="wtf-menu">
                	<li><a href="{{url('room')}}" class="select-item" >Home</a>
					
					</li>
					
					<li><a href="{{url('/rabout_us')}}">about us</a></li>
					
					
				

					
					<li><a href="{{url('rcontact_us')}}">contact us</a>
					

					
					</li>
					<li><a href="{{url('roomcart')}}">Your Order</a></li>
                </ul>

            </nav>
            
				
			<ul class="get-touch">
				<li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+91 80007 54750</span></a></li>
				<li class="book-table"><a href="{{url('logout2')}}"><span>LOG OUT</span> <i class="icon-angle-right"></i></a></li>
				
				
				
			</ul>
	
	
       </header>
	</div>
    
   <!--End Header-->
	
	
  
   <!--Start Header-->
	<div id="header-1" style="display:none">
       <header class="header-two">
		   <div class="container">
	   		<a href="index-hotel.html"><img class="logo2" src="{{url('hihlogo.png')}}" alt="" ></a>
			<a href="index-hotel.html"><img class="logo-dark" src="{{url('hihlogo.png')}}" alt="" ></a>
			
			<div class="cont-right">
			
            <nav class="menu-5 nav">
            	<ul class="wtf-menu">
                	<li class="select-item"><a href="{{url('room')}}">Home</a>
				
					</li>
					
					<li><a href="{{url('/rabout_us')}}">about us</a></li>
					

					
					<li><a href="{{url('rcontact_us')}}">contact us</a>
										
					</li>


								<li><a href="{{url('roomcart')}}">Your Order</a></li>

                </ul>	
            </nav>
            
			<ul class="social-icons">
				<li><a href="#."><i class="icon-facebook-1"></i></a></li>
				<li><a href="#."><i class="icon-twitter-1"></i></a></li>
				<li><a href="#."><i class="icon-google"></i></a></li>
			</ul>
			
			
			<ul class="get-touch">
				<li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+91 80007 54750</span></a></li>
			</ul>

			</div>
		</div>
	
       </header>
	   </div>

    
    <!--End Header-->
	
	
	
	
	<!-- Mobile Menu Start -->
	<div class="container">
    <div id="page">
			<header class="header">
				<a href="#menu"></a>
				
			</header>
			
			<nav id="menu">
				<ul>
					<li class="select"><a href="{{url('room')}}">Home</a>

                    </li>
					
					<li><a href="{{url('/rabout_us')}}">About Us</a></li>
					<li><a href="accommodation.html">Accommodation</a></li>
					
                    <li><a href="{{url('rblog_page')}}">Blog</a>
                    	
                    </li>
					
					<li><a href="{{url('rcontact_us')}}">Contact Us</a>

                    </li>
                    	<li><a href="{{url('roomcart')}}">Your Order</a></li>
					</ul>
                
                
			</nav>
		</div>
		</div>
    <!-- Mobile Menu End -->



 @yield('contant')




	
	
	
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
									<span>GF-GoldenSquare,MotaVaracha,Surat,Gujarat</span>
								</div>
								
							</div>
						</div>
						<!-- 
						<div class="col-md-4">
							<div class="get-touch-sec">
								
								<i class="icon-envelope"></i>
								<div class="text">
									<span><strong>E-mail</strong></span>
									<span></span>
								</div>
								
							</div>
						</div> -->
						
					</div>
				</div>
				
				
			</div>
				
				
				
				
				
				
				
				<div class="copyrights">
					
					<div class="container">
				
					<p>Copyright © HOTEL IN HAND</p>
			
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