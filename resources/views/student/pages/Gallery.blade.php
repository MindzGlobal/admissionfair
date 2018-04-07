@extends('student.layouts.student_general')
@section('title', "Gallery")
@section('css')

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
                              <h2>Image Gallery</h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- particles.js container -->
               </div>
               <!-- End Banner Section -->
               <!-- Start form section-->
               <!-- Start Portfolio Section -->
               <section class="gallery-area">
                  <div class="container">
                     <div class="row clearfix" style="box-shadow:1px 0px 15px;padding:10px;">
                        <div class="gallery-filter-item text-center">
                           <h3><u>Image Gallery</u></h3>
                        </div>
                        <div class="gallery col-3 gutter">
                           <div class="gallery-item gp-two">
                              <div class="thumb">
                                 <img src="{{ asset('student/images/blog/1.jpg') }}" alt="">
                                 <div class="gallery-hover">
                                    <div class="gallery-info">
                                       <div class="gallery-btn">
                                          <a href="{{ asset('student/images/blog/1.jpg') }}" data-fancybox-group="gallery"
                                             class="lightbox-image" title="lightbox view"> <i class="pe-7s-graph2"></i> </a>
                                       </div>
                                       <h4><a href="{{ asset('student/images/blog/1.jpg') }}" data-fancybox-group="gallery"
                                          class="lightbox-image"
                                          title="lightbox view">Your title here</a></h4>
                                       <p><a href="#">Sub Title here</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="gallery-item gp-three">
                              <div class="thumb">
                                 <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                                 <div class="gallery-hover">
                                    <div class="gallery-info">
                                       <div class="gallery-btn">
                                          <a href="{{ asset('student/images/blog/2.jpg') }}" data-fancybox-group="gallery"
                                             class="lightbox-image" title="lightbox view"> <i class="pe-7s-graph2"></i> </a>
                                       </div>
                                       <h4><a href="{{ asset('student/images/blog/2.jpg') }}" data-fancybox-group="gallery"
                                          class="lightbox-image"
                                          title="lightbox view">Your title here</a></h4>
                                       <p><a href="#">Sub Title here</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="gallery-item gp-four">
                              <div class="thumb">
                                 <img src="{{ asset('student/images/blog/3.jpg') }}" alt="">
                                 <div class="gallery-hover">
                                    <div class="gallery-info">
                                       <div class="gallery-btn">
                                          <a href="{{ asset('student/images/blog/3.jpg') }}" data-fancybox-group="gallery"
                                             class="lightbox-image" title="lightbox view"> <i class="pe-7s-graph2"></i> </a>
                                       </div>
                                       <h4><a href="{{ asset('student/images/blog/3.jpg') }}" data-fancybox-group="gallery"
                                          class="lightbox-image"
                                          title="lightbox view">Your title here</a></h4>
                                       <p><a href="#">Sub Title here</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="gallery-item gp-five">
                              <div class="thumb">
                                 <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                                 <div class="gallery-hover">
                                    <div class="gallery-info">
                                       <div class="gallery-btn">
                                          <a href="{{ asset('student/images/blog/2.jpg') }}" data-fancybox-group="gallery"
                                             class="lightbox-image" title="lightbox view"> <i class="pe-7s-graph2"></i> </a>
                                       </div>
                                       <h4><a href="{{ asset('student/images/blog/2.jpg') }}" data-fancybox-group="gallery"
                                          class="lightbox-image"
                                          title="lightbox view">Your title here</a></h4>
                                       <p><a href="#">Sub Title here</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="gallery-item gp-two">
                              <div class="thumb">
                                 <img src="{{ asset('student/images/blog/3.jpg') }}" alt="">
                                 <div class="gallery-hover">
                                    <div class="gallery-info">
                                       <div class="gallery-btn">
                                          <a href="{{ asset('student/images/blog/3.jpg') }}" data-fancybox-group="gallery"
                                             class="lightbox-image" title="lightbox view"> <i class="pe-7s-graph2"></i> </a>
                                       </div>
                                       <h4><a href="{{ asset('student/images/blog/3.jpg') }}" data-fancybox-group="gallery"
                                          class="lightbox-image"
                                          title="lightbox view">Your title here</a></h4>
                                       <p><a href="#">Sub Title here</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="gallery-item gp-three">
                              <div class="thumb">
                                 <img src="{{ asset('student/images/blog/1.jpg') }}" alt="">
                                 <div class="gallery-hover">
                                    <div class="gallery-info">
                                       <div class="gallery-btn">
                                          <a href="{{ asset('student/images/blog/1.jpg') }}"data-fancybox-group="gallery"
                                             class="lightbox-image" title="lightbox view"> <i class="pe-7s-graph2"></i> </a>
                                       </div>
                                       <h4><a href="{{ asset('student/images/blog/1.jpg') }}" data-fancybox-group="gallery"
                                          class="lightbox-image"
                                          title="lightbox view">Your title here</a></h4>
                                       <p><a href="#">Sub Title here</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                           <br>
                   
               </section>
      
      @endsection

     