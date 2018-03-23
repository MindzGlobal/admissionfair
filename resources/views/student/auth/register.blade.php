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
                     <div id="particles-js"></div>
                  </div>
               </div>
               <div class="col-sm-12 col-md-6">
                  <div class="blog-warpper wrapper1">
                     <article class="blog-post">
                        <div class="pin-icon">
                           <i class="fa fa-thumb-tack"></i>
                        </div>
                        <div class="comment-box">
                           <div class="title">
                              <h4>Login/Register</h4>
                           </div>
                           <div class="tab-2">
                              <input id="tab1" type="radio" name="tabs" checked="">
                              <label for="tab1">Login</label>
                              <input id="tab2" type="radio" name="tabs">
                              <label for="tab2">Register</label>
                              <div id="content1">
                                 <form>
                                    <div class="form-group">
                                       <div class="input-group col-sm-12">
                                          <span class="input-group-addon">
                                          <i class="fa fa-envelope-o"></i>
                                          </span>
                                          <input class="form-control" type="email" placeholder="Email address">
                                       </div>
                                    </div>
                                    <div class="form-group  padding-left-0">
                                       <div class="input-group col-sm-12">
                                          <span class="input-group-addon" >
                                          <i class="fa fa-unlock"></i>
                                          </span>
                                          <input class="form-control" type="password" placeholder="Your Password">
                                       </div>
                                    </div>
                                    <center><button class="btn more-link" id="login" onClick="parent.open('admission-fair/')">Login</button></center>
                                    <br>
                                    <a class="text-center" href="forgot-password" taget="_self" >Forgot Password</a>
                                    <div class="dline"></div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <a class="read-btn text-center"><img src="{{ asset('student/images/facebook.png')}}" width="13%">Facebook</a>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <a class="read-btn text-center"><img src="{{ asset('student/images/google_logo.png')}}" width="13%">Google</a>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              <div id="content2">
                                 <form >
                                    <div class="form-group col-sm-6 padding-left-0">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-user"></i>
                                          </span>
                                          <input class="form-control" type="text" placeholder="First Name">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="input-group col-sm-6">
                                          <span class="input-group-addon">
                                          <i class="fa fa-user"></i>
                                          </span>
                                          <input class="form-control" type="text" placeholder="Last Name">
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-6 padding-left-0">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-envelope-o"></i>
                                          </span>
                                          <input class="form-control" type="email" placeholder="Your Email">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="input-group col-sm-6">
                                          <span class="input-group-addon">
                                          <i class="fa fa-phone"></i>
                                          </span>
                                          <input class="form-control" type="tel" placeholder="Your Phone number">
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-6 padding-left-0">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-unlock-alt"></i>
                                          </span>
                                          <input class="form-control" type="text" placeholder="Enter Your Password">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="input-group col-sm-6">
                                          <span class="input-group-addon">
                                          <i class="fa fa-unlock"></i>
                                          </span>
                                          <input class="form-control" type="text" placeholder="Confirm Password">
                                       </div>
                                    </div>
                                    {{--  onClick="parent.open('edit-student-details1')"  --}}
                                    <center><button class="btn more-link" id="register" onClick="window.location='{{ url("/profile") }}'">Register Now</button></center>
                                    <div class="dline"></div>
                                    <br>								
                                 </form>
                              </div>
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