@extends('student.layouts.student_general')

@section('css')
    <style type="text/css">
        .banner {
        padding: 274px 0px!important;
        }    
        .wrapper1
        {
        padding: 12px;
        }
    </style>
@endsection


@section('content')
      <!-- Strat Banner Section -->
      <section class="edu-blog blog-page clearfix">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12 col-md-6">
                  <div class="edu-banner padding-bt-150 banner">
                     <!-- particles.js container -->
                     {{--  <div id="particles-js"></div>  --}}
                  </div>
               </div>
               <div class="col-sm-12 col-md-6">
                  <div class="blog-warpper wrapper1">
                     <article class="blog-post">
                        <div class="pin-icon">
                           <i class="fa fa-thumb-tack"></i>
                        </div>
                        <div class="comment-box">
                           <div class="title1">
                              <h4>Register</h4>
                                </div>
                                <div class="content">
                                 <form method="POST" action="{{ route('create-register') }}" >
                                        @csrf
                                    <div class="form-group col-sm-6 padding-left-0">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-user"></i>
                                          </span>
                                          <input id="first-name" type="text" placeholder="First Name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                          @if ($errors->has('first_name'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('first_name') }}</strong>
                                              </span>
                                          @endif
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="input-group col-sm-6">
                                          <span class="input-group-addon">
                                          <i class="fa fa-user"></i>
                                          </span>
                                          <input id="last-name" type="text" placeholder="Last Name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                          @if ($errors->has('last_name'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('last_name') }}</strong>
                                              </span>
                                          @endif                                       
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 padding-left-0">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-envelope-o"></i>
                                          </span>
                                          <input id="email" type="email" placeholder="Your Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                          @if ($errors->has('email'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="input-group col-sm-6">
                                          <span class="input-group-addon">
                                          <i class="fa fa-phone"></i>
                                          </span>
                                          <input id="tel" type="tel" placeholder="Your Phone number" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required>
                                          @if ($errors->has('mobile'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('mobile') }}</strong>
                                              </span>
                                          @endif
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-6 padding-left-0">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-unlock-alt"></i>
                                          </span>
                                          <input id="password" type="password" placeholder="Enter Your Password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="input-group col-sm-6">
                                          <span class="input-group-addon">
                                          <i class="fa fa-unlock"></i>
                                          </span>
                                          <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                                       </div>
                                    </div>
                                    <button class="btn more-link" id="register" >Register Now</button>
                                    </br>
                                    <a class="text-center" href="{{ route('student.loginform') }}"  style="float:left" taget="_self" >Login</a>
                                 </form>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </section>
 @endsection
{{--  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student {{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-register') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
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
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}

@section('js')
<!--Style Switcher -->
<script type="text/javascript">
    
</script>
@endsection