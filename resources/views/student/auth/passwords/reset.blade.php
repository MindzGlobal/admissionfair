{{-- //@extends('layouts.app') --}}
@extends('student.layouts.student_general')
@section('title', "Reset Password")
@section('css')
<style>
.blog-post {
    background: #ffffff;
    overflow: hidden;
    position: relative;
    margin-bottom: 57px;
    text-align: center;
    padding: 40px 30px 20px;
    box-shadow: 1px 0px 15px #2980b978!important;
    width: 70%;
    margin-left: 15%;
}
</style>
@endsection
@section('content')
<div class="edu-banner padding-bt-150 banner-height">
        <div class="container">
           <div class="count-particles">
              <span class="js-count-particles"></span>
           </div>
           <div class="row">
              <div class="col-sm-12">
                 <div class="page-title-box">
                    <h2>Reset Your Password</h2>
                 </div>
              </div>
           </div>
        </div>
        <!-- particles.js container -->
        <div id="particles-js"></div>
     </div>
     <!-- End Banner Section -->
     <div class="container wizardform">
    <div class="blog-post">
        <br>
        <form method="POST" action="{{ route('student.password.request') }}">
                @csrf

                {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

                {{-- <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-primary pull-right">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
                </div>
     </div>

@endsection
