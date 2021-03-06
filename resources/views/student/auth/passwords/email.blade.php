<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('college/images/favicon.png') }}">
    <title>Forgot Password|Virtual Admission Fair</title>
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
                <form method="POST" action="{{ route('student.password.email') }}" class="form-horizontal form-material" id="loginform">
                @csrf
                    <a href="javascript:void(0)" class="text-center db"><img src="{{ asset('college/images/logo.png') }}" alt="" style="width: 250px;"/>
                    <br/></a>
                    <div class="form-group m-t-40">
                        <label for="email" class="col-sm-12 col-form-label text-md-left">{{ __('E-Mail / Mobile ') }}</label>
                        <div class="col-xs-12">
                            <input id="emailOrMobile" type="text" class="form-control" name="emailOrMobile"  required>
                            {{-- @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif --}}
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light">
                                    {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="{{ route('student.registerform') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
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
    @include('alerts')
</body>

</html>

{{-- 

 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin {{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('student.password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

 --}}




