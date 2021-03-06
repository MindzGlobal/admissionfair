<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @section('head')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{asset('college/images/favicon.png')}}">
            <title></title>
            <!-- Bootstrap Core CSS -->
            <link href="{{ asset('college/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('college/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
            <link href="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
            <!-- Menu CSS -->
            <link href="{{ asset('college/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
            <!-- Morris CSS -->
            <link href="{{ asset('college/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
            <link href="{{ asset('college/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
            <link href="{{ asset('college/plugins/bower_components/jquery-wizard-master/css/wizard.css') }}" rel="stylesheet">
            <!-- animation CSS -->
            <link href="{{ asset('college/css/animate.css') }}" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="{{ asset('college/css/style.css') }}" rel="stylesheet">
            <!-- color CSS -->
            <link href="{{ asset('college/css/colors/blue.css') }}" id="theme" rel="stylesheet">


            @yield('css')
        @show
    </head>
    <body>
        <div id="wrapper">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default navbar-static-top m-b-0">
                    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                        <div class="top-left-part"><a class="logo" href="{{ route('dashboard') }}">&nbsp &nbsp<span class="hidden-xs"><img src="{{ asset('college/images/logo.png') }}"  style="width: 150px;margin-top: -11px;">
                        </span></a></div>
                        <ul class="nav navbar-top-links navbar-left hidden-xs">
                            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                            {{-- <li>
                                <form role="search" class="app-search hidden-xs">
                                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                            </li> --}}
                        </ul>
                        <ul class="nav navbar-top-links navbar-right pull-right">
                            <!-- /.dropdown -->
                            <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset(Auth::user()->profile_image) }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->name }}</b> </a>
                                <ul class="dropdown-menu dropdown-user animated flipInY">
                                    <li><a href="{{ url('college/myprofile') }}"><i class="fa fa-graduation-cap"></i>  College Profile</a></li>
                                    <li><a href="{{ url('college/resetpwd') }}"><i class="ti-user"></i>  My Profile</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"  ></i>  Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <!-- /.dropdown -->
                        </ul>
                    </div>
                </nav>
                <!--End Navigation-->
                @if(Auth::user()->compilation_status=='Done' && Auth::user()->role=='Admin')
                <!-- Left navbar-header -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                                <!-- input-group -->
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                                    </span> </div>
                                <!-- /input-group -->
                            </li>
                            <li class="user-pro">
                                <a href="#" class="waves-effect"><img src="{{ asset(Auth::user()->profile_image) }}" alt="user-img" class="img-circle"> <span class="hide-menu">{{ Auth::user()->name}}</span>
                                </a>
                            </li>
                            <li> <a href="{{ route('dashboard') }}" class="waves-effect"><i class="fa fa-dashboard p-r-10"></i> <span class="hide-menu"> Dashboard</span></a></li>

                            <li> <a href="{{ url('college/myprofile') }}" class="waves-effect"><i class="fa fa-graduation-cap p-r-10"></i> <span class="hide-menu"> College Profile</span></a></li>

                            <li> <a href="{{ url('college/update_profile') }}" class="waves-effect"><i class="fa fa-edit p-r-10"></i> <span class="hide-menu"> Update Profile</span></a></li>

                            <li> <a href="{{ url('college/representative') }}" class="waves-effect"><i class="fa fa-edit p-r-10"></i> <span class="hide-menu"> Representative</span></a></li>

                            {{-- <li> <a href="{{ route('dashboard') }}" class="waves-effect"><i class="fa fa-user p-r-10"></i> <span class="hide-menu"> Student Profile</span></a></li> --}}

                            {{-- <li><a href="{{ route('dashboard') }}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Select Booth </span></a></li> --}}
                            <!-- <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bars p-r-10"></i> <span class="hide-menu"> Courses <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="">All Courses</a> </li>
                                    <li> <a href="">Add Course</a> </li>
                                    <li> <a href="">Edit Course</a> </li>
                                    <li> <a href="">Course Information</a> </li>
                                </ul>
                            </li> -->
                            {{-- <li> <a href="{{ route('dashboard') }}" class="waves-effect"><i class="icon-basket p-r-10"></i> <span class="hide-menu"> Subscription Price</span></a></li> --}}
                            <li> <a href="#" class="waves-effect"><i class="icon-picture p-r-10"></i><span class="hide-menu">Gallery<span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="{{ url('college/image_gallery') }}">Image Gallery</a></li>
                                    <li><a href="{{ url('college/video_gallery') }}">Video Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Left navbar-header end -->
                @endif

                <div id="{{ Auth::user()->compilation_status == 'Done' && Auth::user()->role=='Admin' ? 'page-wrapper' : '' }}">
                    @yield('content')
                    <!-- /.container-fluid -->
                    <footer class="footer text-center"> 2018 &copy; By ZRMindzGlobal </footer>

                    {{-- ## Notification  --}}
                    @if (session('msg') && session('status'))
                    <div class="myadmin-alert myadmin-alert-img myadmin-alert-click myadmin-alert-top alerttop2 {{ session('status')=='error'? 'alert-danger':'alert-success'}}" style="display:block">
                            {{-- <img src="../plugins/images/users/genu.jpg" class="img" alt="img"> --}}
                            <h4>{{ session('status') }}</h4>
                            <b>{{ session('msg') }}</b> 
                            <a href="#" class="closed">&times;</a>
                        </div>
                    @endif
                </div>
                    
                </div>
        </div>
        <!-- jQuery -->
        <script src="{{ asset('college/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('college/bootstrap/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('college/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('college/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{ asset('college/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{ asset('college/js/jquery.slimscroll.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('college/js/waves.js') }}"></script>
        <!--Morris JavaScript -->
        <script src="{{ asset('college/plugins/bower_components/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('college/plugins/bower_components/morrisjs/morris.js') }}"></script>
        <!-- Sparkline chart JavaScript -->
        <script src="{{ asset('college/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('college/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('college/js/custom.min.js') }}"></script>
        <script src="{{ asset('college/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js') }}"></script>
        <!-- FormValidation -->
        <link rel="{{ asset('college/stylesheet" href="plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css') }}">
        <script src="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js') }}"></script>
        <script src="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js') }}"></script>
        <script src="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('college/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

        @yield('js')
    </body>

</html>
