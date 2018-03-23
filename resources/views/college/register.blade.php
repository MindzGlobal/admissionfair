<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('college/images/favicon.png') }}">
    <title>Register|Virtual Admission Fair</title>
     <!-- Bootstrap Core CSS -->
     <link href="{{ asset('college/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
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
                <form class="form-horizontal form-material" id="register" method="POST" action="{{ route('register') }}">
                    @csrf
                    <a href="javascript:void(0)" class="text-center db"><br/><img src="{{ asset('college/images/logo.png') }}" alt="" style="width: 250px;"/></a>
                    <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
                    <div id="regForm">
                        <div class="form-group m-t-20">
                            <div class="col-xs-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Full Name"  autofocus>
                                @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email Id"> 
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-xs-12">
                                <input id="mobile" name="mobile" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="number" placeholder="Mobile Number">
                                @if ($errors->has('mobile'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                @endif
                        </div>
                        </div>
                        
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast 1 number & 1 uppercase & lowercase letter, & atleast 8 or more characters">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Match the entered password" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-primary p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button id="register" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </div>

                    <div id="otpForm" style="display:none">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="confirm-otp" type="text" class="form-control" name="otp_confirmation" placeholder="Confirm OTP" pattern="" title="Match the Sented OTP" >
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button id="otpVerifi" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
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
    <!--Style Switcher -->
    <script src="{{ asset('college/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    {{--  <script>
        $('#register').submit(function(e) {
            e.preventDefault();
            fd = new FormData($(this)[0]);
            url = $('#register' ).attr( 'action' );
            $.ajax({
                type: 'POST',
                url: url,
                data: fd,
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(op) {
                    // var res = $.parseJSON(op);
                    // if (res.res == 'Success') {
                    
                    // }
                    var errors = op.responseJSON;
                    console.log(errors);
                },
                error: function(data){
                    var errors = data.responseJSON;
                    console.log(errors);
                    // Render the errors with js ...
                }
            })
        });
    </script>  --}}
</body>

</html>
