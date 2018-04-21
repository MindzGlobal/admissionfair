@extends('student.layouts.student_general')
@section('title', "Profile")

@section('css')
<style>
    .event-details{
        min-height:285px;
    }
    .mt5{
        margin-top: 15%;
    }
    .up_coming {
    position: absolute;
    display: block;
    top: 0;
    width: 100%;
    left: 0;
    z-index: 2;
    padding: 50px 0 150px;
    opacity: 0.7;
    height: 100vh;
    background:#100a07eb;
}
.service-box
{
    background:#fff;
}
.single-teacher .img-title {
    background-color: rgba(0, 0, 0, 0.9);
    bottom: 0;
    left: 50%;
    opacity: 0.8;
    overflow: hidden;
    padding: 0px 0 6px;
    position: absolute;
    text-align: center;
    transform: translateX(-50%);
    transition: all 0.3s ease 0s;
    width: 100%;
    opacity: 1;
}

#particles-js {
    margin-top: 20%;
}
.service-box:hover {
    background-image: url('{{ asset('student/images/header-bg.jpg') }}');
}
.header-navbar .navbar-default {
  
    padding: 0px 0 15px;
}
.heroaction {
    display: inline-block;
    padding: 10px;
    border: 2px solid #f39008;
    color: #fff;
    font-size: 20px;
    line-height: 25px;
    cursor: pointer;
}
.bl-white
{
    background:#fff;
}
.bg-gray
{
    background:#eee;
}
.justify
{
    text-align:justify;
    font-size: 15px;
    line-height: 25px;
}
    </style>
@endsection



@section('content')
<!-- Strat First Section -->
<div class="relative-div" style="background:url('{{ asset('student/images/admition.jpg') }}'); height:100vh;
    background-size: cover;
    background-repeat: no-repeat;">
    <!-- count particles -->
    <div class="count-particles">
        <span class="js-count-particles"></span>
    </div>
    <div class="up_coming">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 coming">
                    <div class="timieng">
                        <div class="content mt5 ">
                            <h2 class="animated fadeInLeft">Virtual Admission Fair -<span class="txt_blu">2018</span></h2>
                            <p class="animated fadeInRight"> We are working to bring best admission fair platform.<br>Now getting admission in your dream college is easy.
                                Stay tuned!</p>  
                                <div class="heroaction" data-ix="heroaction" onClick="parent.open('{{ route('student.registerform') }}')"><span>Student | Register | Sign in</div> 
                                                       
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- particles.js container -->
    <div id="particles-js"></div>
</div>
<!-- End First Section -->
<!--div class="text-center over-layer-black main-slider-bg parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Virtual Admission Fair - <span>2018</span></h2>
                <p>consectetur adipisicing elit. Laudantium dolore praesentium, tempore excepturi nihil ipsa totam, <br>perferendis placeat ex nostrum aperiam pariatur, amet sequi velit cupiditate blanditiis.</p>                
            </div>
        </div>
    </div>
</div-->
<!-- Start coll/std Section -->
<!--section class="event-area">
    <div class="container pb0">
    <div class="edu-sec-header text-center">
                    <div class="sec-title mar-btm-50">
                        <h2>Login As Student/College</h2>

                        <p>Deserunt quia ducimus ut illum optio cum eum voluptate <br> corrupti numquam.</p>
                    </div>
                </div>
        <div class="row">
            <div class="col-md-6 mar-btm-30">
                <div class="event-item">
                    <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                        <div class="images-box">
                            <img class="img-responsive" src="{{ asset('student/images/student.jpg') }}" alt="Events Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 event-details">
                        <div class="event-content">
                            <h4><a class="text-blu text-center" href="#">For Student</a></h4>
                           <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical.</p>
                          <button class="btn-form text-center" type="submit" value="Submit Form" onClick="parent.open('{{ route('student.registerform') }}')">Login</button>
                        </div>
                        <div class="pin-icon right">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mar-btm-30">
                <div class="event-item">
                    <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                        <div class="images-box">
                            <img class="img-responsive" src="{{ asset('student/images/coll.png') }}" alt="Events Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 event-details">
                        <div class="event-content">
                            <h4><a class="text-blu text-center" href="#">For College</a></h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical.</p>
                            <button class="btn-form text-center" type="submit" value="Submit Form" onClick="parent.open('{{ route('college.register') }}')">Login</button>
                        </div>
                        <div class="pin-icon right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section-->
<!-- End coll/std Section -->

<section class="partners-area bl-white" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10  col-md-12 ">
                    <div class="text-center mar-btm-50">
                        <div class="sec-title">
                            <h2>What Is Virtual Admission Fair?
                                </h2>
    
                            <p class="justify">Virtual Admission Fair (VAF) - 2018 is empowering students with an opportunity to connect with colleges through virtual platform all over India. The students can get a proper glimpse of the colleges and the admission process can be done through online. Virtual Admission Fair is a platform for both colleges and students to get their respective progressive students and dream colleges.  It is an incredible opportunity which will help a student choose the best college suitable for him.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Start HowItWorks Section  -->
<section class="services-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="edu-sec-header text-center">
                    <div class="sec-title mar-btm-50">
                        <h2>How It Works?</h2>

                        <p>Deserunt quia ducimus ut illum optio cum eum voluptate <br> corrupti numquam.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="flaticon-book"></i>
                    <h5><a href="#">Register</a></h5>

                    <p>Enter your Name, Phone Number, Email ID and password.
                </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box mr-0">
                    <i class="flaticon-atomic"></i>
                    <h5><a href="#"> Profile Details
                        </a></h5>

                    <p>Add your profile details like educational and personal details.
                        </p>
                 
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="flaticon-search"></i>
                    <h5><a href="#"> Attend Virtual Admission Fair 2018</a></h5>

                    <p>Attend VAF 2018 on scheduled date and find your dream college and course.
                        </p>
                
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="service-box mr-0">
                    <i class="flaticon-school-1"></i>
                    <h5><a href="#">College Search
                        </a></h5>

                    <p>You need to search the specific college as per your requirement and need.
                        </p>
                  
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="service-box">
                    <i class="flaticon-computer-1"></i>
                    <h5><a href="#">Get Your Dream College</a></h5>

                    <p>Congratulations… you enter into your dream college to meet your career goal.
                        </p>
                   
                </div>
            </div>

        </div>
    </div>
</section>
<section class="partners-area bl-white" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-12">
                    <div class="text-center mar-btm-50">
                        <div class="sec-title">
                            <h2>Why Is Virtual Admission Fair?
                                </h2>
    
                      <p class="justify"> Virtual Admission Fair 2018 will be an excellent platform for students to meet with colleges of different streams which will help reach their career destination. In this highly competitive education scenario, VAF can be an ideal opportunity to guide each student to explore Colleges and Universities on your finger tip through online platform. It will be a huge networking opportunity for students to connect with numerous colleges and their courses, availability of seats, facilities available in the college premises including individual department faculty profile details. So, after analyzing complete details a student can choose the best suitable college. 
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- End HowItWorks Section  -->
<!-- Start Video Section -->
<section class="about-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-box">
                    <div class="about-image">
                        <img src="{{ asset('student/images/1.jpg') }}" class="img-responsive" alt="About Imageo">

                        <div class="overly">
                            <div class="overly-icon">
                                <a class="demo" href="https://vimeo.com/135756482"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="edu-about-content">
                    <div class="sec-title">
                        <h2>Preparation For The Day:
                            </h2>

                        <p class="mar-btm-30">You need to be well prepared for this Big Day of yours. Keep the following things in your mind:
                            </p>
                    </div>
                    <p>1. Take a look at the list of participating colleges in advance of the program so that you can move towards the correct booth during the fair. 
                        </p>
                        <br>
                        <p>2. You need to be well prepared in order to represent yourself and your former school’s pride as they would want to see students excitement regarding their education plans for the future.
                            </p>
                            <br>
                            <p>3. You need to keep in mind that while talking with the college representatives your goal is to get answers to questions which are specific to your interests and needs.
                                </p>
           
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Video Section -->
<!-- Streat Counter Section -->
{{-- <section class="funfact-area parallax" data-parallax-bg-image="images/bg/1.jpg" style="background:url('http://localhost/Admission_fair/images/bg/2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col">
                    <div class="funfact-box text-center">
                        <i class="flaticon-book-4"></i>

                        <div class="start-count">12345</div>
                    </div>
                    <h4> Engineering Colleges
                        </h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col text-center">
                    <div class="funfact-box">
                        <i class="flaticon-wrench"></i>

                        <div class="start-count">23456</div>
                    </div>
                    <h4>Medical Colleges</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col text-center">
                    <div class="funfact-box">
                        <i class="flaticon-mathematics"></i>

                        <div class="start-count">34567</div>
                    </div>
                    <h4>Business Schools & Management Colleges</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col text-center">
                    <div class="funfact-box">
                        <i class="flaticon-school"></i>

                        <div class="start-count border-none">45678</div>
                    </div>
                    <h4> Nursing Colleges</h4>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col">
                        <div class="funfact-box text-center">
                            <i class="flaticon-book-4"></i>
    
                            <div class="start-count">12345</div>
                        </div>
                        <h4> Engineering Colleges
                            </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                        <div class="funfact-box">
                            <i class="flaticon-wrench"></i>
    
                            <div class="start-count">23456</div>
                        </div>
                        <h4>Medical Colleges</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                        <div class="funfact-box">
                            <i class="flaticon-mathematics"></i>
    
                            <div class="start-count">34567</div>
                        </div>
                        <h4>Business Schools & Management Colleges</h4>
                    </div>
                </div>
            </div>
    </div>
</section> --}}
<section class="partners-area bl-white" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-12">
                    <div class="text-center mar-btm-50">
                        <div class="sec-title" >
                            <h2>Benefits Of Virtual Admission Fair 2018:

                                </h2>
                                <br>
    
                     <p class="justify">1. VAF will help students participate in the fair which will help them make the right choice towards their career targets. 
                        </p>
                        <p class="justify">2. This will allow the students to directly communicate with the college representatives of interests using modern techniques like live chat tools which as youth they love doing</p>
                        <p class="justify">3. Students get easy and quick details about their favorite college, infrastructure facilities availability and they can put a step towards their next phase of life.
                            </p>
                        <p class="justify">4. Enrolments and admissions can be done without any further delay saving students precious time and travelling costs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="working-us parallax div-hafe" style="background:url('http://localhost/Admission_fair/images/bg/2.jpg');">
    <div class="relative" style="background: #000000bd;">
      <div class="layer-overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <div class="edu-about-content text-style pr-30">
                  <div class="sec-title" style="margin-top:12px;">
                      <h4 class="cl-pry" style="margin-left: 4%;"><i class="pe-7s-pin"></i> Virtual Admission Fair App: </h4>
            <br>
            <br>
                  </div>
  
                  <div class="row">
                      <div class="col-md-8">
                          <div class="quastion">
                              <h4>Download Virtual Admission App from Google Play
                                </h4>
                              <p>Virtual Admission Fair App facilitates students to view colleges, courses, number of seats available, infrastructure facilities, individual department faculty profile etc which will help in analyzing the best college by using handy tool.
                                </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          {{-- <div class="col-md-6">
                  <img src="https://www.moneymindz.com/newdesign/img/best%20property%20investment%20advisory.png">
          </div> --}}
        </div>
      </div>
    </div>
  </section>
<!-- Strat Partners Section -->
<section class="partners-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="text-center mar-btm-50">
                    <div class="sec-title">
                        <h2>Our Partners</h2>
                          <p>Deserunt quia ducimus ut illum optio cum eum voluptate <br> corrupti numquam.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="partenr">
                <div class="item"><img src="{{ asset('student/images/1.png') }}" alt="Partenr Images"></div>
                <div class="item"><img src="{{ asset('student/images/2.png') }}" alt="Partenr Images"></div>
                <div class="item"><img src="{{ asset('student/images/3.png') }}" alt="Partenr Images"></div>
                <div class="item"><img src="{{ asset('student/images/3.png') }}" alt="Partenr Images"></div>
                <div class="item"><img src="{{ asset('student/images/4.png') }}" alt="Partenr Images"></div>
                <div class="item"><img src="{{ asset('student/images/5.png') }}" alt="Partenr Images"></div>
                <div class="item"><img src="{{ asset('student/images/6.png') }}" alt="Partenr Images"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Partners Section -->
@endsection

@section('js')

@endsection