<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('college/images/favicon.png') }}">
    <title>Register|Virtual Admission Fair</title>
     <!-- Bootstrap Core CSS -->
     <link href="{{ asset('college/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('college/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('college/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('college/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('college/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    
</head>

<body>
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="register" method="POST" action="{{ route('otpverify') }}">
                    @csrf
                    <a href="javascript:void(0)" class="text-center db"><br/><img src="{{ asset('college/images/logo.png') }}" alt="" style="width: 250px;"/></a>
                    <h3 class="box-title m-t-40 m-b-0">Verify Now</h3><small>Access your account and enjoy</small>
                    <div id="regForm">
                        <div class="form-group m-t-20">
                            <div class="col-xs-12">
                                <input id="name" type="text" class="form-control" name="otp" value="" placeholder="Enter OTP"  autofocus>
                                @if (session('msg'))
                                    <span class="invalid-feedback">
                                        <strong>{{ session('msg') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xs-12">
                                <a href="#" class="pull-right m-t-10 loading" onClick="reSendOtp('{{ route('clgresendotp')}}')"><b><i class="fa fa-undo"></i> Resend</b></a>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button id="otpVerification" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Verify</button>
                            </div>
                        </div>
                    </div>
      

                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="{{ url('college/login') }}" class="text-primary m-l-5"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('college/js/custom.min.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>
    <!--Style Switcher -->
    <script src="{{ asset('college/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('college/js/all.ajax.js') }}"></script>
</body>

</html>
