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

 @section('js')
    <!--Style Switcher -->
    <script type="text/javascript">
        
    </script>
@endsection