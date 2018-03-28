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
                             <h4>Enter OTP to verify your Account</h4>
                          </div>
                           <div class="content">
                            <form method="POST" action="{{ route('student.otpVerify') }}">
                                    @csrf
                             <div class="form-group">
                                <div class="input-group col-sm-12">
                                   <span class="input-group-addon">
                                   <i class="fa fa-envelope-o"></i>
                                   </span>
                                   <input type="hidden"  name="userMobile" class="form-control" value="{{$mobile}}">
                                   <input type="text"  name="userMobile1" class="form-control" value="{{$mobile}}"  disabled>
                                </div>
                             </div>
                             <div class="form-group  padding-left-0">
                                <div class="input-group col-sm-12">
                                   <span class="input-group-addon" >
                                   <i class="fa fa-unlock"></i>
                                   </span>
                                   <input id="otp" type="number" name="otp_value" placeholder="Enter OTP" class="form-control"  required autofocus>
                                   @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <a  href="{{ route('student.resendotp') }}" taget="_self" >Resend OTP</a>
                             </div>
                             <button class="btn more-link" id="login">Submit</button>
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
                           <div class="title1">
                              <h4>Enter OTP to verify your Account</h4>
                           </div>
                           <div class="content">
                            <form method="POST" action="{{ route('student.otpVerify') }}">
                                @csrf
                             <div class="form-group">
                                <div class="input-group col-sm-12">
                                   <span class="input-group-addon">
                                   <i class="fa fa-envelope-o"></i>
                                   </span>
                                   <input type="hidden"  name="userMobile" class="form-control" value="{{$mobile}}">
                                   <input type="text"  name="userMobile1" class="form-control" value="{{$mobile}}"  disabled>
                                </div>
                                <div class="form-group">
                                   <div class="input-group col-sm-12">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                        </span>
                                    <input id="otp" type="number" name="otp_value" placeholder="Enter OTP" class="form-control"  required autofocus>
                                 </div>
                             </div>
                             
                             <button class="btn more-link" id="login">Login</button>
                             <br>
                             <a  href="{{ route('student.resendotp') }}" taget="_self" >Resend OTP</a>
                             <div class="dline"></div>
                          </form>
                          </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </section>
 @endsection  --}}

 @section('js')
    
@endsection