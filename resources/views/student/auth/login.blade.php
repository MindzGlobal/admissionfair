@extends('student.layouts.student_general')

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
                             <h4>Login</h4>
                          </div>
                           <div class="content">
                            <form method="POST" action="{{ route('student.login') }}">
                                    @csrf
                             <div class="form-group">
                                <div class="input-group col-sm-12">
                                   <span class="input-group-addon">
                                   <i class="fa fa-envelope-o"></i>
                                   </span>
                                   <input id="email" type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             </div>
                             <div class="form-group  padding-left-0">
                                <div class="input-group col-sm-12">
                                   <span class="input-group-addon" >
                                   <i class="fa fa-unlock"></i>
                                   </span>
                                   <input id="password" type="password" placeholder="Your Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             </div>
                             <button class="btn more-link" id="login">Login</button>
                             <br>
                             <a  href="{{ route('student.registerform') }}" taget="_self" >Singup</a>Or<a  href="{{ route('password.request') }}" taget="_self" >Forgot Password</a>
                             <div class="dline"></div>
                             {{--  <br>  --}}
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
                       </div>
                    </article>
                 </div>
              </div>
           </div>
        </div>
     </section>
{{--  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student {{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student-login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection  
