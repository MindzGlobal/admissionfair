@extends('student.layouts.student_general')
@section('title', "Course Details")
@section('css')
<style type="text/css">

hr {
    margin-top: 20px;
    margin-bottom: 0px!important;
    border: 0;
    border-top: 1px solid #eee;
}
.teacher-detail p {
    color: #3f3f3f;
    font-weight: 600;
    margin: 4px 0 0px;
    text-align: left;
    padding-top: 0px;
}
span.clg-deiatls {
	float: right;
}
h4
{
	margin-top:0px!important;
}
.clg-name{
    font-weight: bold;
    color: maroon;
}
.department {
    color: #2980b9;
    font-weight: bold;
}
   .blog-post .post-content blockquote {
   text-align: left;
   background: #f8f8f8;
   border-color: #2980b9;
   font-size: 14px;
   position: relative;
   overflow: hidden;
   font-family: poppins!important;
   }
   .question
   {
   float:left;
   color: #000;
   font-weight: 600;
   text-decoration: underline;
   }
   .blog-post .post-content {
   margin-bottom: 20px;
   margin-top: 0px;
   display: inline-block;
   }
   .single-teacher .img-title {
   background-color: rgba(0, 0, 0, 0.9);
   left: 50%;
   width:88%;
   }
   .blog-page .title {
   margin-bottom: 25px;
   line-height: 28px;
   font-weight: 500;
   padding-top: 0%;
   }
   .details {
   margin-left: -15%;
   }
   hr {
   margin-top: 30px;
   margin-bottom: 0px!important;
   border: 0;
   border-top: 1px solid #65535378;
   width: 109%;
   margin-left: -4%;
   }
   .blog-box .blog-image-box {
   overflow: initial!important;
   position: relative;
   }
   .blog-box .blog-image-box:after
   {
   background:none;
   }
   .blog-post .pin-icon {
   top: -8px;
   right: -63px;
   width: 171px;
   height: 76px;
   }
   .blog-page .blog-comment .comment-list li
   {
   margin:0px!important;
   }
   ol, ul {
   margin-top: 0;
   margin-bottom: -5px;
   }
   .single-teacher {
   border:none!important;
   margin-left:10px; 
   }
   .gallery-item:hover .gallery-hover {
   top: 0%;
   height: 101%;
   width: 84%;
   left: 8%;
   }
   .owl-carousel .owl-item img {
    display: block;
    max-width: 100%;
	min-height:270px;
}
.clgname
{
    font-size: 25px!important;
    color:#2980b9!important;
}
.clgname1
{
    color:#2980b9!important;
    font-size: 20px;
}
.pink-color
{
    color:#2980b9!important;
}
.infrastructure
{
    max-width: 100%;
    min-height: 157px;
}
.select_apply {
    background: #2980b9;
    border-radius: 50%;
    padding: 20px 22px;
    border: 1px solid #ff6b49;
    color: #fff;
    width: 5%;
    position: fixed;
    margin-left: 85%;
    top: 90%;
}
.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear;
    margin-left: 4px;
}
.btn.focus, .btn:focus, .btn:hover {
    color:pink!important;
    text-decoration: none;
}
i.fa.fa-paper-plane.fa-spin:hover {
    color: pink;
}
a:focus, a:hover {
    color: pink;
    text-decoration: underline;
}
.edu-banner{
   padding: 48px 0;
    height: 265px;
}
</style>
@endsection

@section('content')
      <!-- Strat Banner Section -->
      <div class="edu-banner padding-bt-150">
            <div class="col-sm-12">
                    <div class="page-title-box">
                       <h2>Course Details</h2>
                    </div>
                 </div>
         <div class="container">
            <div class="count-particles">
               <span class="js-count-particles"></span>
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
                     <form role="form" action="{{ url('student/course') }}" method="get">
                        <div class="form-group col-md-9">
                           <input type="hidden" name="reg_id" value="{{$college->reg_id}}"/>
                           <label>{{$course->course_offer}}</label>
                           <select class="form-control" name="DeptId">
                            @foreach($alldept as $d_data)
                              <option value="{{ $d_data->id}}" {{ $d_data->id ==$selected ? 'selected' : ''}}>{{$d_data->departments}}</option>
                            @endforeach
                           </select>
                        </div>
                        <div class="form-group col-md-3">{{--name="Apply" value="Search" --}}
                     <input type="submit"  class="form-submit btn pull-right">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Category Section -->
      <!-- Strat Advisors Area-->
<section class="edu-blog blog-page clearfix">
   <div class="container">
            <!-- // End Row -->
            <div class="row">
               <div class="col-sm-12 col-md-8">
                  <div class="blog-warpper">
                     <article class="blog-post">
                        <div class="pin-icon">
                           <i class="fa fa-thumb-tack"></i>
                        </div>
                  <div class="blog-comment" style="margin-top:-5%;">
                     <ul class="comment-list list-unstyled">
                        <li>
                           <a class="pull-left" href="#">
                           <img class="comment-avatar" src="{{ asset('student/images/student.jpg') }}" alt="">
                           </a>
                           <div class="comment-meta">
                              <a href="#" class="clgname">{{$college->college_name}} </a>
                              <span>
                              <em class="course_style">{{ $college->college_state}},{{ $college->college_city}}</em>
                              </span>
                              </div>
                        </li>
                                 </ul>
                              </div>
                  <hr>
                  <br>
                  <h3 class="clgname1">{{ $course->course_department}}</h3>
                  <div class="question">
                     <p>What we Offer?</p>
                           </div>
                  <div class="post-content col-md-12">
                     <blockquote>
                            {!! $course->what_we_offer!!}
                
                     </blockquote>
                        </div>
                  <div class="question">
                     <p>Why Join Us?</p>
                  </div>
                        <div class="post-content col-md-12">
                     <blockquote>
                        {!! $course->why_join_us!!}
                           </blockquote>
                        </div>
                  <div class="question">
                     <p >Course Structure?</p>
                  </div>
                  <div class="post-content col-md-12">
                     <blockquote>
                        {!! $course->course_description!!}
                     </blockquote>
                  </div>
                  <div class="question" style="padding-top:4%">
                        <p>Fee Structure</p>
                        </div>
                     <div class="post-content col-md-12">
                        <blockquote>
                           {!! $course->fee_structure!!}
                        </blockquote>
                        </div>
                  <div class="post-content col-md-12">
                       
                <p class="clgname1">Our Teaching Staffs</p>
                   
                      
                           </div>
                    <div class="container">
                         
						<div class="row ">            
                        <div class="partenr">
                               @foreach($faculties as $faculties)
                           <div class="item">
                              
                              <div class="team-info">
                                 <div class="single-teacher">
                                    <div class="teacher-img">
                                       <a href="#">
                                       <img alt="Teacher Images" src="{{ asset($faculties->faculty_image) }}" >
                                       </a>
                                       <div class="img-title">
                                          <h3>{{$faculties->faculty_name}}</h3>
                                          <p>{{$faculties->designation}}</p>
                                       </div>
                                    </div>
                                    <div class="teacher-details">
                                            <h3>{{$faculties->specialization}}</h3>
                                      
                                       <a class="read-btn" href="student/demo1">Read More</a>
                                    </div>
                                 </div>
                              </div>
                             
                           </div>
                           @endforeach
                     
                                  </div>
                            </div>
                        </div>
                  <div class="post-content">
                     <p class="clgname1">Infrastructure of BBM</p>
							</div>
                        </br>
                  <div class="row">
                        @foreach($courseGallery as $courseGallery)
                     <div class=" col-md-3 col-sm-3 col-xs-3">
                        <div class="gallery-item gp-two">
                           <div class="thumb">
                              <img src="{{ asset($courseGallery->filePath) }}" class="infrastructure" alt="">
                              <div class="gallery-hover">
                                 <div class="gallery-info">
                                    <div class="gallery-btn">
                                       <a href="{{ asset($courseGallery->filePath) }}" data-fancybox-group="gallery"
                                          class="lightbox-image" title="lightbox view"> <i class="pe-7s-graph2"></i> 
                                          @if( $loop->iteration==4)
                                         + {{ $loop->iteration }} More
                                          @endif
                                        </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                   
                    
                   
                    </div>
				
               <br>
                  <div class="post-content blog-comment col-md-12">
                     <h4 class="text-left" style="padding-top: 4%;">Payment Options</h4>
                     <blockquote>
                            
                        {!! $course->Payment_mode!!}
                     </blockquote>
                     </div>
                  <div class="blog-comment">
                     <div class="title">
                        <h4>Comments (3)</h4>
                  </div>
                     <ul class="comment-list list-unstyled">
                        <li>
                           <a class="pull-left" href="#">
                           <img class="comment-avatar img-circle" src="{{ asset('student/images/student.jpg') }}" alt="">
                           </a>
                           <div class="comment-meta">
                              <a href="#">JOHNATHON DOE </a>
                              <span>
                              <em class="pink-color">Sep 07, 2017, at 11:34</em>
 
                              </span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet
                                 urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor
                                 tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                              </p>
               </div>
                        </li>
                        <li class="comment-sub width-80 pull-right">
                           <a class="pull-left" href="#">
                           <img class="comment-avatar img-circle" src="{{ asset('student/images/student.jpg') }}">
                           </a>
                           <div class="comment-meta">
                              <a href="#">MATHEW ROOT </a>
                              <span>
                              <em class="pink-color">Sep 07, 2017, at 11:34</em>
                          
                              </span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet
                                 urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor
                                 tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                              </p>
            </div>
                        </li>
                        <li>
                           <a class="pull-left" href="#">
                           <img class="comment-avatar img-circle" src="{{ asset('student/images/student.jpg') }}" alt="">
                           </a>
                           <div class="comment-meta">
                              <a href="#">CAMERON DIAZ</a>
                              <span>
                              <em class="pink-color">Sep 07, 2017, at 11:34</em>
                           
                              </span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet
                                 urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor
                                 tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                              </p>
         </div>
                        </li>
                     </ul>
               </div>

                   <button  type="submit" data-target="#apply" data-toggle="modal" class="btn more-link pull-right" id="send">Apply For The Course</button>

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
                  <h4 class="clgname1">Populer Colleges</h4>
               </div>
               <div class="sidber-widget">
                  <div class="wiget-post">
                     <div class="wiget-img">
                        <img src="{{ asset('student/images/student.jpg') }}" alt="Sidber Image">
                     </div>
                     <div class="posi-inner">
                        <h6><a href="#">Students Have Enough</a></h6>
                        <span class="pink-color">John Milton</span>
                       
                     </div>
                  </div>
                  <div class="wiget-post">
                     <div class="wiget-img">
                        <img src="{{ asset('student/images/student.jpg') }}" alt="Sidber Image">
                     </div>
                     <div class="posi-inner">
                        <h6><a href="#">Students Have Enough</a></h6>
                        <span class="pink-color">John Milton</span>
                      
                     </div>
                  </div>
                  <div class="wiget-post">
                     <div class="wiget-img">
                        <img src="{{ asset('student/images/student.jpg') }}" alt="Sidber Image">
                  </div>
                     <div class="posi-inner">
                        <h6><a href="#">Students Have Enough</a></h6>
                        <span class="pink-color">John Milton</span>
                       
               </div>
            </div>
         </div>
      </div>
            <!-- // End Widget -->
           <div class="widget">
                    <div class="video-widget clearfix">
                        <a class="demo" href="https://vimeo.com/209802644">
                            <img src="{{ asset('student/images/3.jpg') }}"  alt="Blog Image">
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
      
         <!-- Stra RIght Sidber Content -->
      </div>
   </div>
   <a href="javascript:void(0)" data-target="#apply" data-toggle="modal" class="raise-2 select_apply trackCTA" data-cta-name="cp_apply" title="Apply Now" type="button" data-head="Apply">
                <i class="fa fa-paper-plane fa-spin"></i>
            </a>
</section>
<!-- End Advisors Area-->
<!-- modal Section -->
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
                        <h4>{{$college->college_name}}</h4>
                     </div>
                     <form role="form" action="{{ route('studentPay') }}" method="post">
                        @csrf
                        <input  type="hidden" name="college_id" value="{{$course->reg_id}}"/>
                        <input type="hidden" name="dept_id" value="{{$course->id}}"/>

                        <div class="form-group col-sm-6 padding-left-0">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                              </span>
                              <input class="form-control" type="text" value="{{$course->course_offer}}" placeholder="Course Name">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group col-sm-6">
                              <span class="input-group-addon">
                              <i class="fa fa-envelope-o"></i>
                              </span>
                              <input class="form-control" type="text"  value="{{$course->course_department}}" placeholder="Department Name">
                           </div>
                        </div>
                        <div class="form-group col-sm-6 padding-left-0">
                                <div class="input-group">
                                   <span class="input-group-addon">
                                   <i class="fa fa-user"></i>
                                   </span>
                                   <input class="form-control" type="text" value="{{$course->course_duration}}" placeholder="Course Duration">
                                </div>
                             </div>
                             <div class="form-group">
                                <div class="input-group col-sm-6">
                                   <span class="input-group-addon">
                                   <i class="fa fa-envelope-o"></i>
                                   </span>
                                   <input class="form-control" type="text"  value="{{$course->course_total_fee}}" placeholder="Course Fees">
                                </div>
                             </div>
                          <div class="form-group">
                           <textarea class="form-control message" name="student_query" rows="7" placeholder="Query..."></textarea>
                        </div>  
                        <button  type="submit"  class="btn more-link" id="send">Send Message</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>


 @endsection
@section('js')


@endsection