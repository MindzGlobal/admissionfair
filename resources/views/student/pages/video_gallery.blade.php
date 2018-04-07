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
                              <div class="page-title-box" style="margin-top:-5%!important;">
                              <h2>Video Gallery</h2>
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
                           <h3><u>Video Gallery</u></h3>
                        </div>
                        <div class="gallery col-3 gutter">
                           @if(count($media)>0)
                               @foreach($media as $video)
                                    <div class="gallery-item gp-{{ $loop->iteration }}">
                                          <div class="thumb">
                                          <iframe class="video-size" src="{{ asset($video->file_url) }}" frameborder="0" allowfullscreen></iframe>
                                          </div>
                                    </div>
                                @endforeach
                           @else
                              <div class="gallery-item gp-three">
                              <div class="thumb">
                                    <iframe class="video-size" src="https://www.youtube.com/embed/KNChk5o8Fhg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                              </div>
                              </div>
                           @endif
                           {{-- <div class="gallery-item gp-three">
                              <div class="thumb">
                                 <iframe class="video-size" src="https://www.youtube.com/embed/KNChk5o8Fhg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                              </div>
                           </div>
                           <div class="gallery-item gp-four">
                              <div class="thumb">
                                 <iframe class="video-size" src="https://www.youtube.com/embed/KNChk5o8Fhg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                              </div>
                           </div>
                           <div class="gallery-item gp-five">
                              <div class="thumb">
                                 <iframe class="video-size" src="https://www.youtube.com/embed/KNChk5o8Fhg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                              </div>
                           </div>
                           <div class="gallery-item gp-five">
                              <div class="thumb">
                                 <iframe class="video-size" src="https://www.youtube.com/embed/KNChk5o8Fhg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                              </div>
                           </div>
                           <div class="gallery-item gp-two">
                              <div class="thumb">
                                 <iframe class="video-size" src="https://www.youtube.com/embed/KNChk5o8Fhg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                              </div>
                           </div> --}}
                        </div>
                     </div>
                     <span class="pull-right">
                         {{ $media->links()}}
                       </span>
                       @if(count($media)<0)
                        <span class="pull-left" >
                              <button  onclick="location.href='{{ url('student/singlebooth/'.$media[0]->reg_id)}}';"
                                    class="btn more-link pull-left" >Go back To college
                              </button>
                        </span>
                      @endif
                  </div>
               </section>
      
      @endsection

      @section('js')
      

      @endsection