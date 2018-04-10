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
 {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
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
        <form method="POST" action="{{ route('student.password.resetdo') }}">
                @csrf

                <div class="form-group row">
                    <label for="c_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" name="currentPassword" class="form-control{{ $errors->has('c_password') ? ' is-invalid' : '' }}"  required>

                        @if ($errors->has('c_password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('c_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">New {{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="newpassword" type="password" minlength="6" name="newpassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required>

                        {{-- @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif --}}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" minlength="6" oninput="check(this)"  name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"  required>

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


@section('js')
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script >
    function check(input) {
        if (input.value != document.getElementById('newpassword').value) {
            input.setCustomValidity('Password Must be Match.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script> 
@endsection