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
.thumb
{
    width:75%;
}
.header-navbar .navbar-brand img {
    width: 220px;
    height: auto;
    margin-top: -11%;
}
.navbar {
    position: relative;
    min-height: 67px;
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
                <h4 class="name font-24 mt-0 mb-0">Zakaria Smith</h4>
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