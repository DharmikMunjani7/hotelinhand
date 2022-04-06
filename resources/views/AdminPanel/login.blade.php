<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    
<!-- Mirrored from keenthemes.com/metronic/preview/default/custom/user/login-v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 08:00:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8"/>
        
        <title>Hotel In Hand | Enjoy Your Food With Us</title>
        <meta name="description" content="Login page example"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8"/>
    <meta name="csrf-token" content="{{csrf_token()}}"/>
        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });

          
        </script>
             <style>
        .kt-login__title,.form-control{
            color:#fff !important;
        }
        ::-webkit-input-placeholder { /* Edge */
      color:#fff !important;
       }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
           color:#fff !important;
        }

::placeholder {
  color: #fff;
}


.select{
    
    color: #fff;
}

    </style>
        <!--end::Fonts -->

        
                    
            <!--begin::Page Custom Styles(used by this page) --> 
                             <link href="{{url('asset/app/custom/login/login-v4.default.css')}}" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="{{url('asset/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
                    <link href="{{url('asset/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="{{url('asset/demo/default/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" /><link href="{{url('asset/demo/default/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" /><link href="{{url('asset/demo/default/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" /><link href="{{url('asset/demo/default/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

        
        <link rel="shortcut icon" href="{{url('logo.png')}}" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1070954,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{url('https://www.googletagmanager.com/gtag/js?id=UA-37564768-1')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-37564768-1');
</script>
</head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

       
        <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(asset/media/bg/bg-2.jpg); color: #fff" >
        <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
            <div class="kt-login__container">
                <div class="kt-login__logo">
                    <a href="#">
                        <img src="{{url('logo2.png')}}" style="height: 200px; width: 200px">   
                    </a>
                </div>
                  <form class="kt-form" action="{{url('userlogin')}}" method="post" >
                         {{csrf_field()}}
                <div class="kt-login__signin" >
                    <div class="kt-login__head">
                        <h3 class="kt-login__title" style="color: #fff">Sign In To  <select  name="item_id"><option  value="admin">Admin</option>

                        <option  value="tableuser">Table User</option>
                        <option  value="cook">Cook</option>
                        <option  value="waiter">Waiter</option>
                        <option  value="roomuser">Room User</option>
                        <option  value="cashier">Cashier</option>
                        <option  value="reception">Reception</option>
                        
                        </select></h3>
                    </div>
                  
                        <div class="input-group" >
                            <input class="form-control" type="text" placeholder="User name" name="username" autocomplete="off" required="enter valid user name" >
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="password" placeholder="Password" name="password" required="enter valid password">
                        </div>
                      
                       <div class="kt-portlet__foot">
                    <div class="kt-form__actions " align="center">
                        <button type="submit" class="btn btn-primary">login</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
                    </form>
                </div>
                
               

            </div>  
        </div>
    </div>
</div>  
    </div>
    
<!-- end:: Page -->


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
                   <script src="{{url('asset/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
                   <script src="{{url('asset/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

         

                    
            <!--begin::Page Scripts(used by this page) -->
                            <script src="{{url('asset/app/custom/login/login-general.js')}}" type="text/javascript"></script>
                        <!--end::Page Scripts -->
        
                    
            <!--begin::Global App Bundle(used by all pages) -->
                            <script src="{{url('asset/app/bundle/app.bundle.js')}}" type="text/javascript"></script>
                        <!--end::Global App Bundle -->
            </body>
    <!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/default/custom/user/login-v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 08:00:56 GMT -->
</html>