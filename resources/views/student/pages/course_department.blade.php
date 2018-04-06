@extends('student.layouts.student_general')
@section('title', "Course Details")

@section('css')
<style type="text/css">

</style>
@endsection

@section('content')
      
      <!-- Strat Banner Section -->
      <div class="edu-banner padding-bt-150">
         <div class="container">
            <div class="count-particles">
               <span class="js-count-particles"></span>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="page-title-box">
                     <h2>Engineering Courses</h2>
                  </div>
               </div>
            </div>
         </div>
         <!-- particles.js container -->
         <div id="particles-js"></div>
      </div>
      <!-- End Banner Section -->
      <!-- Strat Category Section -->
      <div class="edu-category">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="category bg-white">
                     <form>
                        <div class="form-group col-md-9">
                           <label>Engineering Courses</label>
                           <select class="form-control">
                              <option>Computer Science Engineering </option>
                              <option>Information Science Engineering</option>
                              <option>Civil Engineering</option>
                              <option>Mechanical Engineering</option>
                              <option>TeleCommunication Engineering</option>
                           </select>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Category Section -->
      <!-- Strat Advisors Area-->
      <section class="blog-page list-1 edu-course clearfix">
         <div class="container">
            <!-- // End Row -->
            <div class="row">
               <div class="col-sm-12 col-md-8">
                  <div class="blog-warpper">
                     <article class="blog-post">
                        <div class="pin-icon">
                           <i class="fa fa-thumb-tack"></i>
                        </div>
                        <div class="blog-box">
                           <div class="blog-image-box">
                              <div class=" comment-box title">
                                 <h4>COMPUTER SCIENCE ENGINEERING</h4>
                              </div>
                              <img class="img-responsive" src="{{ asset('student/images/blog/1.jpg') }}" alt="Blog_image">
                              <div class="social-icon-info">
                                 <ul class="icon">
                                    <li><a href="#" class="fa fa-search"></a></li>
                                    <li><a href="#" class="fa fa-link"></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="post-content">
                           <blockquote><i class="fa fa-quote-left"></i>
                              Higher education, also called tertiary, third stage, or post secondary education, is the
                              non-compulsory educational level
                              that follows the completion of a school providing a secondary education, such as a high
                              school or secondary school. Tertiary education is normally taken to include
                              undergraduate and postgraduate education.<i class="fa fa-quote-right"></i>
                           </blockquote>
                        </div>
                        <div class="course-info col-md-9">
                           <h3 class="sidebar-title">Courses Information</h3>
                           <ul class="bg-gray">
                              <li>Levels :<span>Beginner</span></li>
                              <li>Start On :<span>14.06.2017</span></li>
                              <li>Duration :<span>30 Hours</span></li>
                              <li>Time :<span>07am - 12pm</span></li>
                              <li>Fees :<span>1,00000/-</span></li>
                           </ul>
                           <button class="btn more-link pull-right next-step" id="send" data-toggle="modal" data-target="#apply">Apply</button>
                        </div>
                        <br>
                        </br>
                     </article>
                     <!--  // Artical 01 -->
                  </div>
               </div>
               <!-- //  End Left Sidber Sidber -->
               <div class="col-sm-12 col-md-4 sidber">
                  <!-- // End Widget -->
                  <div class="widget">
                     <div class="wiget-title">
                        <span>What You Get From Us</span>
                        <h4>Populer Courses</h4>
                     </div>
                     <div class="sidber-widget">
                        <div class="wiget-post">
                           <div class="wiget-img">
                              <img src="{{ asset('student/images/course/1.jpg')}}" alt="Sidber Image">
                           </div>
                           <div class="posi-inner">
                              <h6><a href="#">Students Have Enough</a></h6>
                              <span>John Milton</span>
                              <p>Price: <strong>Free</strong></p>
                           </div>
                        </div>
                        <div class="wiget-post">
                           <div class="wiget-img">
                              <img src="{{ asset('student/images/course/1.jpg')}}" alt="Sidber Image">
                           </div>
                           <div class="posi-inner">
                              <h6><a href="#">Students Have Enough</a></h6>
                              <span>John Milton</span>
                              <p>Price: <strong>$29</strong></p>
                           </div>
                        </div>
                        <div class="wiget-post">
                           <div class="wiget-img">
                              <img src="{{ asset('student/images/course/1.jpg') }}" alt="Sidber Image">
                           </div>
                           <div class="posi-inner">
                              <h6><a href="#">Students Have Enough</a></h6>
                              <span>John Milton</span>
                              <p>Price: <strong>$50</strong></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- // End Widget -->
                  <div class="widget">
                     <div class="video-widget clearfix">
                        <a class="demo" href="https://vimeo.com/209802644">
                        <img src="{{ asset('student/images/blog/3.jpg') }}" alt="Blog Image">
                        <i class="fa fa-play"></i>
                        </a>
                     </div>
                     <div class="widget-text clearfix text-center">
                        <span class="mar-btm-20">September 16, 2017</span>
                        <h5>
                           <a href="#">Tuition Is Crazy Expensive</a>
                        </h5>
                     </div>
                  </div>
               </div>
               <!-- Stra RIght Sidber Content -->
            </div>
         </div>
      </section>
      <!-- End Advisors Area-->
      <div class="modal fade" id="apply" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content body-back">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle" style="color:#000;"></i></button>
                  <h4 class="modal-title">Selection Of Courses</h4>
               </div>
               <div class="modal-body ">
                  <div class="comment-box">
                     <div class="title">
                        <h4>Leave a comment</h4>
                     </div>
                     <form>
                        <div class="form-group col-sm-6 padding-left-0">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                              </span>
                              <input class="form-control" type="text" placeholder="Course Name">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group col-sm-6">
                              <span class="input-group-addon">
                              <i class="fa fa-envelope-o"></i>
                              </span>
                              <input class="form-control" type="email" placeholder="Department Name">
                           </div>
                        </div>
                        <div class="form-group">
                           <textarea class="form-control message" rows="7" placeholder="Message..."></textarea>
                        </div>
                        <button class="btn more-link" id="send">Send Message</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
 @endsection

@section('js')


@endsection