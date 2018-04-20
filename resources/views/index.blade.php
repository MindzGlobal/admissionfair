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

.navbar {
    position: relative;
    min-height: 67px;
}
#particles-js {
    margin-top: 20%;
}
.service-box:hover {
    background-image: url('{{ asset('student/images/header-bg.jpg') }}');
}
.header-navbar .navbar-default {
  
    padding: 0px 0 25px;
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
<section class="event-area">
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
</section>
<!-- End coll/std Section -->
<!-- Start HowItWorks Section  -->
<section class="services-area" style="background:#eee;">
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
                    <h5><a href="#">Geography</a></h5>

                    <p>Exclusively for educators, law enforcement officers and other drug prevention specialists who
                        teach students.</p>
                    <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box mr-0">
                    <i class="flaticon-atomic"></i>
                    <h5><a href="#">Mathematics</a></h5>

                    <p>Exclusively for educators, law enforcement officers and other drug prevention specialists who
                        teach students.</p>
                    <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="flaticon-search"></i>
                    <h5><a href="#">Science</a></h5>

                    <p>Exclusively for educators, law enforcement officers and other drug prevention specialists who
                        teach students.</p>
                    <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box mr-0">
                    <i class="flaticon-school-1"></i>
                    <h5><a href="#">Handwriting</a></h5>

                    <p>Exclusively for educators, law enforcement officers and other drug prevention specialists who
                        teach students.</p>
                    <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="flaticon-computer-1"></i>
                    <h5><a href="#">Physical Education (P.E.)</a></h5>

                    <p>Exclusively for educators, law enforcement officers and other drug prevention specialists who
                        teach students.</p>
                    <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box mr-0">
                    <i class="flaticon-education"></i>
                    <h5><a href="#">Dramatics</a></h5>

                    <p>Exclusively for educators, law enforcement officers and other drug prevention specialists who
                        teach students.</p>
                    <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End HowItWorks Section  -->
<!-- Start Video Section -->
<section class="about-area">
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
                        <h2>What Do You Achieve After This Course</h2>

                        <p class="mar-btm-30">In some countries around the world, teachers and students take it for
                            granted that education is easily
                            accessible.Â After all, the classrooms are equipped with desks, chairs, white boards,
                            writing
                            utensils, books and so much more limited.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-iteam">
                                <a href="#"><i class="ion-compose"></i></a>

                                <div class="title">
                                    <h4>HUMANITIES</h4>

                                    <p>Instant access to materials geared toward helping.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-iteam">
                                <a href="#"><i class="ion-ios-pie-outline"></i></a>

                                <div class="title">
                                    <h4>MEDICAL SCIENCE</h4>

                                    <p>Instant access to materials geared toward helping.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-iteam">
                                <a href="#"><i class="ion-ios-browsers-outline"></i></a>

                                <div class="title">
                                    <h4>SOCIAL SCIENCES</h4>

                                    <p>Instant access to materials geared toward helping.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-iteam">
                                <a href="#"><i class="ion-ios-color-filter-outline"></i></a>

                                <div class="title">
                                    <h4>TECHNOLOGY</h4>

                                    <p>Instant access to materials geared toward helping.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Video Section -->

<!-- Strat Partners Section -->
<section class="partners-area">
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