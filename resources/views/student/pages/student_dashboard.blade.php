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
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/responsive.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/style-main.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/utility-classes.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/custom-bootstrap-margin-padding.css') }}">
@endsection



@section('content')
   <!-- Responsive stylesheet  -->
  
   
   {{--  <title>Student Profile|VAF-2018</title>  --}}
   <body>
      {{--  ?php include("common/header-hall.php")?>  --}}
      <!-- Strat Banner Section -->
      <div class="edu-banner padding-bt-150 banner-height">
         <div class="container">
            <div class="count-particles">
               <span class="js-count-particles"></span>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="page-title-box">
                     <h2>My Profile</h2>
                  </div>
               </div>
            </div>
         </div>
         <!-- particles.js container -->
         <div id="particles-js"></div>
      </div>
      <!-- End Banner Section -->
      <!-- Strat Category Section -->
      <section class="stud-det">
         <div class="container">
            <div class="section-content">
               <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-8 pull-right pl-60 pl-sm-15 student-info">
                     <div>
                        <h3>Dr. Jonathon Alex</h3>
                        <p>After graduating from West Virginia University Medical School, Dr. Jonathon Alex completed a two-year fellowship in sports medicine at Akron Children’s Hospital. During his training at Akron, Dr. Jonathon Alex was team physician for the University of Akron and Walsh University.</p>
                     </div>
                     <ul class="nav nav-tabs mt-30">
                        <li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="true">Personal Information</a></li>
                        <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">Educational Information</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="tab1" class="tab-pane fade active in">
                           <dl class="dl-horizontal doctor-info">
                              <dt>Last Name</dt>
                              <dd>
                                 Roopa
                              </dd>
                              <hr>
                              <dt>Country</dt>
                              <dd>
                                 India
                              </dd>
                              <hr>
                              <dt>Pin Code</dt>
                              <dd>
                                 562129
                              </dd>
                              <hr>
                              <dt>City</dt>
                              <dd>
                                 Bangalore
                              </dd>
                              <hr>
                              <dt>Birth Date:</dt>
                              <dd>
                                 30/1/1994
                              </dd>
                              <hr>
                              <dt>Gender:</dt>
                              <dd>
                                 Female
                              </dd>
                           </dl>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                           <h4>SSLC Information</h4>
                           <hr>
                           <dl class="dl-horizontal doctor-info">
                              <dt>SSC School Name</dt>
                              <dd>
                                 Sree Venkateshwara school
                              </dd>
                              <hr>
                              <dt>SSLC Board</dt>
                              <dd>
                                 Karnataka Board
                              </dd>
                              <hr>
                              <dt>Medium</dt>
                              <dd>
                                 Kannada
                              </dd>
                              <hr>
                              <dt>Year Of Pass</dt>
                              <dd>
                                 2008
                              </dd>
                              <hr>
                              <dt>Marks</dt>
                              <dd>
                                 78%
                              </dd>
                              <hr>
                           </dl>
                           <h4>PUC Information</h4>
                           <hr>
                           <dl class="dl-horizontal doctor-info">
                              <dt>PUC College Name</dt>
                              <dd>
                                 Sree Venkateshwara school
                              </dd>
                              <hr>
                              <dt>PUC Board</dt>
                              <dd>
                                 Karnataka Board
                              </dd>
                              <hr>
                              <dt>Medium</dt>
                              <dd>
                                 Kannada
                              </dd>
                              <hr>
                              <dt>Year Of Pass</dt>
                              <dd>
                                 2008
                              </dd>
                              <hr>
                              <dt>Marks</dt>
                              <dd>
                                 78%
                              </dd>
                              <hr>
                           </dl>
                           <button class="btn-success" onclick="myFunction()">View More</button>
                           <hr>
                           <dl class="dl-horizontal doctor-info" id="View-Degree" Style="display:None">
                              <h4>Graduation Information</h4>
                              <hr>
                              <dt>Degree College Name</dt>
                              <dd>
                                 Sree Venkateshwara school
                              </dd>
                              <hr>
                              <dt>University</dt>
                              <dd>
                                 Karnataka Board
                              </dd>
                              <hr>
                              <dt>Year Of Pass</dt>
                              <dd>
                                 2008
                              </dd>
                              <hr>
                              <dt>Marks</dt>
                              <dd>
                                 78%
                              </dd>
                              <hr>
                           </dl>
                        </div>
                     </div>
                  </div>
                  <div class="col-sx-12 col-sm-4 col-md-4 sidebar pull-left">
                     <div class="doctor-thumb">
                        <img src="{{ asset('student/images/1.jpg') }}" alt="">
                     </div>
                     <br>
                     <h4 class="line-bottom">About Me:</h4>
                     <div class="volunteer-address">
                        <ul>
                           <li>
                              <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                                 <div class="media-left">
                                    <i class="fa fa-book text-theme-colored font-24 mt-5"></i>
                                 </div>
                                 <div class="media-body">
                                    <h5 class="mt-0 mb-0">Education:</h5>
                                    <p>Bachelor’s degree in Engineering<br>From Rutgers University, California.</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                                 <div class="media-left">
                                    <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                                 </div>
                                 <div class="media-body">
                                    <h5 class="mt-0 mb-0">Address:</h5>
                                    <p>Village 856 Broadway New York</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                                 <div class="media-left">
                                    <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                                 </div>
                                 <div class="media-body">
                                    <h5 class="mt-0 mb-0">Phone:</h5>
                                    <p>+262 695 2601</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                                 <div class="media-left">
                                    <i class="fa fa-envelope-o text-theme-colored font-24 mt-5"></i>
                                 </div>
                                 <div class="media-body">
                                    <h5 class="mt-0 mb-0">Email:</h5>
                                    <p>you@yourdomain.com</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection

@section('js')
        <!-- Import Particles Js -->
       <script type="text/javascript">
         
         function myFunction() {
             var x = document.getElementById("View-Degree");
             if (x.style.display === "none") {
                 x.style.display = "block";
             } else {
                 x.style.display = "none";
             }
         	
         }
    </script>
@endsection
      
