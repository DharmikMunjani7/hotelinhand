
 @if(session()->has('waiter') )
  <!DOCTYPE html>
<html lang="en" >
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>Hotel In Hand| Enjoy Your Food With Us
    </title>
    <meta name="description" content="Default form examples"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      .kt-grid__item--fluid{
        padding-top: 25px !important;
      }
      .kt-section,.form-group{
        margin-bottom: 0px !important;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css
" /> 
    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js">
    </script>
    <script>
      WebFont.load({
        google: {
          "families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]}
        ,
        active: function() {
          sessionStorage.fonts = true;
        }
      }
                  );
    </script>
    <!--end::Fonts -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{url('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{url('assets/demo/default/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/demo/default/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/demo/default/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/demo/default/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />        
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{url('logo.png')}}" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>
      (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){
          (h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={
          hjid:1070954,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');
        r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
      }
      )(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-37564768-1');
    </script>
  </head>
  <!-- end::Head -->
  <!-- begin::Body -->
  <body  class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
      <div class="kt-header-mobile__logo">
        <a href="{{url('../../../index.html')}}">
          <img alt="Logo" src="{{url('assets/media/logos/logo-light.png')}}"/>
        </a>
      </div>
      <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler">
          <span>
          </span>
        </button>
        <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler">
          <span>
          </span>
        </button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler">
          <i class="flaticon-more">
          </i>
        </button>
      </div>
    </div>
    <!-- end:: Header Mobile -->    
    <div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn">
          <i class="la la-close">
          </i>
        </button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
          <!-- begin:: Aside -->
          <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
            <div class="kt-aside__brand-logo">
         <h5>Hotel In Hand 
                   </h5>
              
            </div>
          </div>
          <!-- end:: Aside -->    
          <!-- begin:: Aside Menu -->
          <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1"
                 data-ktmenu-scroll="1" >       
              <ul class="kt-menu__nav ">
                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                  <a  href="{{url('javascript:;')}}" class="kt-menu__link kt-menu__toggle">
                
                    <span class="kt-menu__link-text"> Waiter 
                    </span>
                    <i class="kt-menu__ver-arrow la la-angle-right">
                    </i>
                  </a>
                  <div class="kt-menu__submenu ">
                   <!--  <span class="kt-menu__arrow">
                    </span> -->
                    
                      <li class="kt-menu__item {{Request::is('waiter')?'  kt-menu__item--active':''}}" aria-haspopup="true" >
                        <a  href="{{url('waiter')}}" class="kt-menu__link ">
                          <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                            <span>
                            </span>
                          </i>
                          <span class="kt-menu__link-text">Manage waiter
                          </span>
                        </a>
                      </li>
                          
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            </li>     
          </ul>
      </div>
    </div>
    <!-- end:: Aside Menu -->               
    </div>
  <!-- end:: Aside -->            
  <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >
      <!-- begin:: Header Menu jbbkk -->
      <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">
        <i class="la la-close">
        </i>
      </button>
      <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default "  >
          <ul class="kt-menu__nav ">
          </ul>
        </div>
      </div>
      <!-- end:: Header Menu -->      
      <!-- begin:: Header Topbar -->
      <div class="kt-header__topbar">
        <!--begin: Quick Actions -->
        <div class="kt-header__topbar-item dropdown">
          <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
            </span>
        </div>
      </div>
      <!--end: Quick Actions -->
      
      <!--begin: Quick panel toggler -->
      <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
      </div>
      <!--end: Quick panel toggler -->
      <!--begin: Language bar -->
      <div class="kt-header__topbar-item kt-header__topbar-item--langs">
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
        </div>
      </div>
      <!--end: Language bar -->
      <!--begin: User Bar -->
      <div class="kt-header__topbar-item kt-header__topbar-item--user">    
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
          <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,
            </span>
            <span class="kt-header__topbar-username kt-hidden-mobile">
              <?php echo session('cook');?>
              <?php echo session('waiter');?>

            </span>
            <img class="kt-hidden" alt="Pic" src="{{url('assets/media/users/300_25.jpg')}}" />
            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S
            </span>
          </div>
        </div>
        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
          <!--begin: Head -->
          <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">
            <div class="kt-user-card__avatar">
              <img class="kt-hidden" alt="Pic" src="{{url('assets/media/users/300_25.jpg')}}" />
              <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
              <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S
              </span>
            </div>
            <div class="kt-user-card__name">
             
              <?php echo session('waiter');?>

            </div>
          </div>
          <!--end: Head -->
          <!--begin: Navigation -->
          <div class="kt-notification">
            <div class="kt-notification__custom">
              <a href="{{url('logout5')}}" class="btn btn-label-brand btn-sm btn-bold">Sign Out
              </a>
            </div>
          </div>
          <!--end: Navigation -->    
        </div>
      </div>
      <!--end: User Bar -->   
    </div>
    <!-- end:: Header Topbar -->
  </div>
  <!-- end:: Header -->
  <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Content -->
    @yield('contant')             
    <!-- begin:: Footer -->
    <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
      <div class="kt-footer__copyright">
        2019&nbsp;&copy;&nbsp;
        <a href="{{url('http://keenthemes.com/metronic')}}" target="_blank" class="kt-link">copyright Hotel In Hand.
        </a>
      </div>
     
    </div>
    <!-- end:: Footer -->           
  </div>
  </div>
</div>
<!-- end:: Page -->
<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
  <i class="fa fa-arrow-up">
  </i>
</div>
<!-- end::Scrolltop -->
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
  var KTAppOptions = {
    "colors":{
      "state":{
        "brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"}
      ,"base":{
        "label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}
    }
  };
</script>
<!-- end::Global Config -->
<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{url('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript">
</script>
<script src="{{url('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript">
</script>
<!--end::Global Theme Bundle -->
<!--begin::Global App Bundle(used by all pages) -->
<script src="{{url('assets/app/bundle/app.bundle.js')}}" type="text/javascript">
</script>

<script type="text/javascript" src="{{url('https://cdn.jsdelivr.net/npm/sweetalert2')}}"></script>
<script>
      $(document).ready(function() {
        $('#kt_table_1').DataTable();
      } );
    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>

<!--end::Global App Bundle -->
</body>
<!-- end::Body -->
</html>
@else
<script type="text/javascript">
  window.location = "{{url('/login')}}";
</script>
@endif
