<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
     @section('head')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>@yield('title') |Virtual Admission Fair</title>
            <!-- Favicon -->
            <link rel="icon" type="image/png" href="{{ asset('student/images/favi.png')}}">
             
            <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png')}}">
                <!-- Bootstrap Core CSS -->
                <link rel="stylesheet" href="{{ asset('student/css/bootstrap.min.css')}}">
                <!-- Custom CSS -->
                <link rel="stylesheet" type="text/css" href="{{ asset('student/css/style.css')}}">
                <link rel="stylesheet" type="text/css" href="{{ asset('student/css/owl.carousel.min.css')}}">
                <!-- Responsive stylesheet  -->
                <link rel="stylesheet" type="text/css" href="{{ asset('student/css/responsive.css')}}">
                
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
            
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    @yield('css')
    @show
</head>

 <body>
     
      <!-- Strat Header Section -->
<header class="edu-herader">

    <!-- Header top start -->
    {{--  <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 full-wd-600">
                    <div class="header-topbar-col center767">
                        <ul class="list-inline">
                            <li><i class="fa fa-phone"></i></li>
                            <li><a href="#">+123 012 034 056</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 full-wd-600">
                    <div class="header-topbar-col center767">
                        <ul class="list-inline">
                            <li><i class="fa fa-envelope-o"></i></li>
                            <li><a href="#">info@yourmail.com</a></li>
                        </ul>
                        <p class="res-mb-10">
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-offset-5 col-md-4 col-sm-4 col-xs-4 full-wd-600">
                    <div class="header-topbar-col center767">
                        <form>
                            <div class="input-group">
                               <input placeholder="Search College List" class="form-control" name="search-field" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- Header top end -->
    @include('student.common.nav_bar_initial')
</header>
<!-- End Header Section -->


      <!-- Strat Banner Section -->
     @yield('content')
      <!--  End Form Section -->

      {{--   include("common/footer.php")?>  --}}
      <!-- Strat Footer Section -->
<footer class="footer clearfix">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 clearfix">
                    <div class="footer-service fo-title">
                        <div class="footer-logo">
                            <img src="{{ asset('student/images/logo.png')}}" alt="Gallery Image" style="width: 85%;
                            margin-top: -6%;">

                            <p class="cl-white">ZR Mindz Global believes in the power of each Human, 
                            the power to do smart, to make smart, to be Smart.</p>
                            <ul class="list-inline social-icon">
                                <li><a class="effect" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="effect" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="effect" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="effect" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 clearfix">
                    <aside class="widget-latestposts fo-title">
                        <h4>Links</h4>

                        <div class="small-border"></div>
                        <div class="latest-content">
                            <a href="#">
                                
                            <h6><i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp Neque porro est qui do</h6>
                            </a>
                        </div>
                        <div class="latest-content">
                            <a href="#">
                            
                            <h6><i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp Neque porro est qui do</h6></a>
                            
                        </div>

                        <div class="latest-content">
                            <a href="#">
                            
                            <h6><i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp Neque porro est qui do</h6></a>
                            
                        </div>
                    </aside>
                </div>
               
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 clearfix">
                    <div class="footer-contact fo-title">
                        <h4>User Links</h4>

                        <div class="small-border"></div>
                        <ul class="list-inline edu-brn">
                            <p style="color:#fff;">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp
                             ZR Mindz Global Technologies Pvt. Ltd.
                            #9,1st Floor, Chikka Bazaar Road Queens Road
                            Opposite to Genises Hospital Bengaluru, Karnataka 560052</p>
                            <p style="color:#fff;"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp Email : contact@mindzglobal.com</p>
                            <p style="color:#fff;"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp Contact No : 080 - 67515151</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-col text-center">
                        <p>© 2018 All rights reserved | ZR Mindz Global Technologies Pvt. Ltd.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->
<a href="#" class="scrollup">
    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</a>

        <!-- Import Jquery Min Js -->
        <script type="text/javascript" src="{{ asset('student/js/jquery.min.js')}}"></script>
            <!-- Import Bootstrap Min Js -->
      <script type="text/javascript" src="{{ asset('student/js/bootstrap.min.js')}}"></script>

      <script type="text/javascript" src="{{ asset('student/js/countries.js')}}"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    
      <!-- Import Jquery Min Js -->
      <script type="text/javascript" src="{{ asset('student/js/modernizr-custom.js')}}"></script>
    
      <!-- Import Css3 Animation It -->
      <script type="text/javascript" src="{{ asset('student/js/css3-animate-it.js')}}"></script>
      <!-- Import Bootstrap Dropdownhover Min Js -->
      <script type="text/javascript" src="{{ asset('student/js/bootstrap-dropdownhover.min.js')}}"></script>
      <!-- Import Videopopup Js -->
      <script type="text/javascript" src="{{ asset('student/js/VideoPopUp.jquery.js')}}"></script>
      <!-- Import Gallery Js -->
      <script type="text/javascript" src="{{ asset('student/js/gallery.js')}}"></script>
      <!-- Import Player Js -->
      <script type="text/javascript" src="{{ asset('student/js/player.min.js')}}"></script>
      <!-- Owl Catousel Mi Js -->
      <script type="text/javascript" src="{{ asset('student/js/owl.carousel.min.js')}}"></script>
      <!-- Import Jarallax Min Js -->
      <script type="text/javascript" src="{{ asset('student/js/jarallax.min.js')}}"></script>
      <!-- Import Header Amimation Js -->
      <script type="text/javascript" src="{{ asset('student/js/header-animation.js')}}"></script>
      <!-- Import Custom JS -->
      <script type="text/javascript" src="{{ asset('student/js/script.js')}}"></script>
      <!-- Import Particles Js -->
      <script type="text/javascript" src="{{ asset('student/js/particles.min.js')}}"></script>
      <!-- Import Comming Soon Js -->
      <script type="text/javascript" src="{{ asset('student/js/comming_soon.js')}}"></script>

      @include('alerts')
      @yield('js')

   </body>
</html>