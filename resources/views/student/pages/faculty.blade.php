@extends('student.layouts.student_general')
@section('title', "Course Details")
@section('css')
<style type="text/css">

.thumb
{
    width:75%;
}

</style>
</style>
 <link rel="stylesheet" type="text/css" href="{{ asset('student/css/style-main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('student/css/custom-bootstrap-margin-padding.css') }}">

 <link rel="stylesheet" type="text/css" href="{{ asset('student/css/utility-classes.css') }}">
@endsection

@section('content')
      <!-- Strat Banner Section -->
      <div class="edu-banner padding-bt-150 banner-height">
        <div class="container">
           <div class="count-particles">
              <span class="js-count-particles"></span>
           </div>
           <div class="row">
              <div class="col-sm-12">
                 <div class="page-title-box">
                    <h2>Faculty Profile</h2>
                 </div>
              </div>
           </div>
        </div>
        <!-- particles.js container -->
        <div id="particles-js"></div>
     </div>
      <!-- End Banner Section -->
      <!-- Strat Category Section -->
     
      <!-- End Category Section -->

      <section>
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-4">
                <div class="thumb">
                  <img  src="{{ asset('student/images/3.jpg') }}" alt="">
                </div>
              </div>
              <div class="col-md-8">
                <h4 class="name font-24 mt-0 mb-0">fgfgh</h4>
                <h5 class="mt-5">Computer Engineer</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
                <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-skype"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
 @endsection
@section('js')


@endsection