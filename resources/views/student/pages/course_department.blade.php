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
                           <label>{{$course->course_offer}}</label>
                          
                           <select class="form-control">
                               @foreach($alldept as $d_data)
                              <option value="{{ $d_data->id}}">{{ $d_data->departments}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group col-md-3">
                           <input type="submit" name="Apply" value="Search" class="form-submit btn">
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
         <div class="container" style="margin-top: -17px;">
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
                                 <h4>{{$college->college_name}}</h4>
                              </div>
                              @if(!is_null($college->college_img))
                              <img class="img-responsive" src="{{ asset($college->college_img) }}" alt="Blog_image">
                             @else
                             <img class="img-responsive" src="{{ asset('student/images/blog/1.jpg') }}" alt="Blog_image">
                              @endif
                              <div class="social-icon-info">
                                 <ul class="icon">
                                    <li><a href="{{$college->website}}" class="fa fa-search"></a></li>
                                    <li><a href="{{$college->website}}" class="fa fa-link"></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="post-content">
                            <h4>{{ $course->course_department}}</h4>
                           <blockquote><i class="fa fa-quote-left"></i>
                              {{$course->course_description}}<i class="fa fa-quote-right"></i>
                           </blockquote>
                        </div>
                        <div class="course-info col-md-9">
                           <h3 class="sidebar-title">Courses Information</h3>
                           <ul class="bg-gray"> 
                              <li>Course :<span>{{$course->course_offer}}</span></li>
                              <li>Department :<span>{{$course->course_department}}</span></li>
                              <li>Duration:<span>{{$course->course_duration}} </span></li>
                              <li>Fees :<span>{{$course->course_total_fee}}  </span></li>
                              <li>File :<span>
                                          <a href="{{ url( 'student/document/'. $course->id)  }}" target="_blank">{{$course->fee_structure_file_name}}</a></span></li> 
                        {{-- {!! Html::link(asset($course->fee_structure_file_url), $course->fee_structure_file_name) !!}</span> {{$course->fee_structure_file_name}}</li>
                                     --}}
                                   
                              
                              
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
                        <h4>Populer Colleges</h4>
                     </div>
                     <div class="sidber-widget">
                        <div class="wiget-post">
                           <div class="wiget-img">
                              <img src="{{ asset('student/images/blog/1.jpg')}}" alt="Sidber Image">
                           </div>
                           <div class="posi-inner">
                              <h6><a href="#">Students Have Enough</a></h6>
                              <span>John Milton</span>
                              <p>Price: <strong>Free</strong></p>
                           </div>
                        </div>
                        <div class="wiget-post">
                           <div class="wiget-img">
                              <img src="{{ asset('student/images/blog/1.jpg')}}" alt="Sidber Image">
                           </div>
                           <div class="posi-inner">
                              <h6><a href="#">Students Have Enough</a></h6>
                              <span>John Milton</span>
                              <p>Price: <strong>$29</strong></p>
                           </div>
                        </div>
                        <div class="wiget-post">
                           <div class="wiget-img">
                              <img src="{{ asset('student/images/blog/1.jpg') }}" alt="Sidber Image">
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
                           @if(!is_null($college->college_video))
                              <a class="demo" href="{{ asset($college->college_video) }}">
                           @else
                               <a class="demo" href="https://vimeo.com/209802644">
                           @endif

                           @if(!is_null($college->college_img))
                              <img src="{{ asset($college->college_img) }}" alt="Blog Image">
                           @else
                             <img src="{{ asset('student/images/blog/3.jpg') }}" alt="Blog Image">
                           @endif
                        <i class="fa fa-play"></i>
                        </a>
                     </div>
                     <div class="widget-text clearfix text-center">
                        <span class="mar-btm-20">{{date('d-m-Y', strtotime($college->updated_at))}}</span>
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