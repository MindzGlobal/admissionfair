@extends('student.layouts.student_general')
@section('title', "Profile")
@section('css')
<style type="text/css">
   @import url('https://fonts.googleapis.com/css?family=Poppins');
   .banner {
   padding: 274px 0px!important;
   }    
   .wrapper1
   {
   padding: 12px;
   }
   .ptl
   {
   padding-left:2%;
   }
   .add-btn
   {
   position: absolute;
   left: 18%;
   top: 33.5%;
   }
   .remove-btn
   {
   position: absolute;
   top: 33.5%;
   left: 66%;
   }
   .bg-light1
   {
   background-color: #f5f5f5 !important;
   border-radius: 5px;
   border: 2px solid #eee;
   }
   .btn {
   font-size: 13px;
   padding: 4px 10px!important;
   }
   section > .container, section > .container-fluid {
   padding-top: 25px!important;
   }
   .college-img{
   width: 80px;
   /* //border-radius: 50%; */
   margin: 0 auto;
   height: 80px;
   float: left;
   }
   .label-text{
   /* background: #2980b9; */
   font-size: small;
   font-family: poppins;
   padding: 0px;
   width:60%;
   word-break: break-all;
   /* border-radius: 7px; */
   }
   .clg_applied
   {
   width:83%;
   }
   .font15{
   color:#2e6da4;
   }
   .textInfo{
   color:black;
   }
   .table-responsive {
   overflow-x: hidden;
   }
   ul.about-list li {
   display: inline-block;
   margin: 0px 0px;
   width: 31%;
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
   h4 {
   margin-top: 0px!important;
   }
  
   .clg-name {
   font-weight: bold;
   color: maroon;
   }
   .department {
   color: #2980b9;
   font-weight: bold;
   }
   .tags {
   color: #000;
   border-right: 3px solid #eb5273;
   border-radius: 0;
   width: 100%;
   padding: 10px 20px;
   outline: none;
   font-size: 1em;
   margin: 4% auto 0;
   font-weight: 600;
   letter-spacing: 4px;
   display: inline-block;
   text-transform: uppercase;
   }
   .title {
   background-color:#256d59e3;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   padding: 0px 20px;
   text-transform: capitalize;
   margin-bottom: 0;
   }

   table {
   font-family: arial, sans-serif;
   border-collapse: collapse;
   width: 100%;
   }
   td,
   th {
   text-align: left;
   padding: 0px!important;
   border-top: 0px solid #fff!important;
   }
   .college-list li {
   float: left;
   padding: 2px 10px;
   border-right: 1px solid #2980b9;
   text-align: center;
   line-height: 25px;
   }
   .icon,
   .college-list li:hover {
   color: #2980b9;
   }
   #accordion .panel-body {
   padding: 0px 8px 10px 20px;
}
   }
   .blog-page .title {
   margin-bottom: 10px;
   }
   .college-name{   
   color: #ff6b49;
   font-weight: 900;
   font-size: 14px;
   margin-bottom: 0;
   line-height: 3.1;}
   #accordion .panel-body {
    border-left: 1px solid #256d59e3!important;
    border-right: 1px solid #256d59e3!important;
    border-bottom: 1px solid #256d59e3!important;
}
.eclg
{
    margin-left: 77px;
    position: relative;
    top: -14px;
}
#accordion .panel-body:before {
    background:none;

.dlt {
    color: #333333;
    font-size: 14px;
    font-family: poppins;
}
hr {
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('student/css/style-main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('student/css/utility-classes.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('student/css/custom-bootstrap-margin-padding.css') }}">
<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
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
               <h2>Your Profile</h2>
            </div>
         </div>
      </div>
<<<<<<< HEAD
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
            <div class="col-xs-12 col-sm-8 col-md-8 pull-right pl-sm-15">
               <div>
                  <span style="font-size:25px;font-family:poppins;!important">{{ ucwords($students->first_name) }} {{ ucwords($students->last_name) }}</h4>
               </div>
               <div class="bg-light1 media  pt-15 mb-20">
                  <div class="media-left">
                     <i class="fa fa-user text-theme-colored  font-24 mt-5 ml-5"></i>
                  </div>
                  <div class="media-body">
                     <h5 class="mt-0 mb-0">About You:</h5>
                     <p> {{ $students->about_you }}</p>
                  </div>
               </div>
               <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="true">Colleges Applied</a></li>
                  <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">Personal Information</a></li>
                  <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">Educational Information</a></li>
               </ul>
               <div class="tab-content">
                  <div id="tab1" class="tab-pane fade active in ">
                     <div class="table-responsive">
                        <div class="container" style="margin-top: -17px;">
                           <!-- // End Row -->
                           <div class="row">
                              <div class="col-sm-12 col-md-7">
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                       <div class="panel-heading" role="tab" id="headingOne">
                                          <div class=" title ">
                                             <img src="https://www.collegesearch.in/upload/institute/logo/small/140325041422_Screenshot_18.png" style="margin-bottom: -4%;
                                                max-width: 59px;"> 
                                             &nbsp;  &nbsp;  &nbsp;
                                             <h5 style="display: inline-block;margin-left:-2%" class="text-center">MS Ramaiah Medical College (MSRMC) </h5>
                                             <br>
                                             <em class="eclg">Pune, Maharashtra</em>
                                          </div>
                                       </div>
                                       <div class="panel-body">
                                          <div class="table-responsive">
                                             <p class="college-name"> Bachelor of Medicine, Bachelor of Surgery (MBBS)</p>
                                             <table class="table">
                                                 <div class="col-md-12">
                                                     <div class="row">
                                                            <div class="col-md-6" style=" padding-left: 1px;">
                                                   <p>Duration : 4 Years 6 Months</p>
                                                   <p>Institute Type : Medical Institute</p>
                                                  
                                            </div>
                                            <div class="col-md-6" style=" padding-left: 1px;">
                                                    <p>Applied At : 4 Years 6 Months</p>
                                                    <p>Fees : <i class="fa fa-inr"> 28,340/-</i></p>
                                                   
                                             </div>
                                            </div>
                                        </div>
                                             </table>
                                          </div>
                                      
                                          <div class="row ">
                                             <div class="col-md-12">
                                                        <button class="btn btn-primary" style="float:right;margin-top:-5%;background-color: #256d59e3"><i class="fa fa-paper-plane">View College</i></button>
                                                   
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 <br>
                              </div>
                           </div>
=======
      <!-- End Banner Section -->
      <!-- Strat Category Section -->
      <section class="stud-det">
         <div class="container">
            <div class="section-content">
               <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-8 pull-right pl-sm-15">
                     <div>
                        <span style="font-size:25px;font-family:poppins;!important">{{ ucwords($students->first_name) }} {{ ucwords($students->last_name) }}</h4>
                     </div>
                   
                                    <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                                       <div class="media-left">
                                          <i class="fa fa-user text-theme-colored font-24 mt-5"></i>
                                       </div>
                                       <div class="media-body">
                                          <h5 class="mt-0 mb-0">About You:</h5>
                                          <p> {{ $students->about_you }}</p>
                                       </div>
                                    </div>
                              
                   
                     <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="true">Colleges Applied</a></li>
                        <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">Personal Information</a></li>
                        <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">Educational Information</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="tab1" class="tab-pane fade active in ">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        @if(!is_null($appliedTo))
                                        @foreach($appliedTo as $applied)
                                        <tr>
                                            {{-- <td>
                                               <span class="label label-text" style="color:#884343;"><b>{{$applied->college[0]->collegeName}}</b></span>
                                               <br>
                                                <img alt="Blog_image" class="img-responsive college-img" src="{{ asset($applied->college[0]->college_img) }}">
                                                {{-- <br> --}}  
                                                {{-- @if ($applied->pay_status == "Pending")
                                                <center><span class="label label-rouded label-danger">Not Paid</span></center>
                                                @else<center><span class="label label-rouded label-success">Paid</span></center>
                                                @endif
                                            </td> --}}
                                            <td class="clg_applied">
                                                <div class="m-l-40">
                                                {{-- <p class="font15">
                                                   <b class="text-info ">College Name :</b> 
                                                </p>     --}}
                                                <p class="font15" ><b class=" textInfo ">College Name : </b> <b>{{$applied->college[0]->collegeName}}</b></p>
                                                <p class="font15"><b class=" textInfo ">Course :  </b> <b>{{$applied->course}}</b></p>
                                                <p class="font15"><b class="textInfo">Department : </b> <b>{{$applied->department}}</b></p>
                                                <p class="font15"><b class="textInfo ">Applied At : </b> <b>{{ date('d-m-Y', strtotime($applied->created_at))}}</b></p>
                                                {{-- <p class="font15"><b class="text-info ">Course Duartion :</b> </p>
                                                <p class="font15"><b class="text-info ">fees :</b> </p> --}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-t-20 text-center">
                                                    @if ($applied->pay_status == "Pending")
                                                    <button type="button" class="btn btn-danger btn-rounded ">Not Paid</button>
                                                    @else
                                                    <button type="button" class="btn btn-success btn-rounded ">Paid</button>
                                                    @endif   
                                                    <br>
                                                    <br>
                                                   <a href='{{ url('student/'.$applied->college[0]->collegeId.'/'.$applied->course_dept_id.'')}}'>
                                                     <button type="submit" class="btn btn-primary btn-rounded ">View College</button>
                                                   </a>
                                                </div>
                                            </td>   
                                        </tr>
                                        @endforeach  
                                        @else
                                        
                                        @endif                                     
                                    </tbody>
                                </table>
                                @if(!is_null($appliedTo))
                                <div class="pull-right">{{ $appliedTo->links() }}</div>
                                @endif
                            </div> 
                        </div>
                        <div id="tab2" class="tab-pane fade">
                      
                        <dl class="dl-horizontal doctor-info">
                           <div class="row"> 
                                <h4 class="ptl" style="color:#02325d;"><b>About You</b></h4>
                                <a href='{{ url("student/editprofile") }}'><button class="btn btn-primary" style="float:right;margin-right:3%;margin-top: -4%;">Edit Info</button></a>
                            </div>
                            <hr>
                               <dt>Birth Date</dt>
                              <dd>
                              {{ $students->date_of_birth }}
                              </dd>
                              <hr>
                              <dt>Gender</dt>
                              <dd>
                              {{ $students->gender }}
                              </dd>
                              <hr>
                              <dt>Father's Name</dt>
                              <dd>
                              {{ $students->fatherName }}
                              </dd>
                              <hr>
                              <dt>Father's Email</dt>
                              <dd>
                              {{ $students->fatherEmail }}
                              </dd>
                              <hr>
                              <dt>Father's Mobile</dt>
                              <dd>
                              {{ $students->fatherMobile }}
                              </dd>
                              <hr>
                              <dt>City</dt>
                              <dd>
                              {{ $students->city }}
                              </dd>
                              <hr>
                              
                              <dt>State</dt>
                              <dd>
                              {{ $students->state }}
                              </dd>
                              <hr>
                              <dt>Country</dt>
                              <dd>
                              {{ $students->country }}
                              </dd>
                              <hr>
                              <dt>Pin Code</dt>
                              <dd>
                              {{ $students->pincode }}
                              </dd>
                           </dl>
                        </div>
                        <div id="tab3" class="tab-pane fade ">
                          <div class="row"> <h4 class="ptl" style="color:#02325d"><b>SSLC Information</b></h4><a href='{{ url("student/editprofile") }}'><button class="btn btn-primary" style="float:right;margin-right:3%;margin-top: -4%;">Edit Info</button></a></div>
						  
                           <hr>
                           {{--  @foreach($education as $educations)  --}}
                           <dl class="dl-horizontal doctor-info">
                              <dt>SSLC Board</dt>
                              <dd>
                              {{ $education->ssc_board }}
                              </dd>
                              <hr>
                              <dt>Medium</dt>
                              <dd>
                              {{ $education->ssc_medium }}
                              </dd>
                              <hr>
                              <dt>Year Of Pass</dt>
                              <dd>
                              {{ $education->ssc_yop }}
                              </dd>
                              <hr>
                              <dt>Marks</dt>
                              <dd>
                              {{ $education->ssc_marks }}
                              </dd>
                              <hr>
                              <dt>Percentage</dt>
                              <dd>
                              {{ $education->ssc_perc }}
                              </dd>
                              <hr>
                           </dl>
                      
                           <h4 style="color:#02325d"><b>PUC Information</b></h4>
                           <hr>
                           <dl class="dl-horizontal doctor-info">
                        
                              <dt>PUC Board</dt>
                              <dd>
                              {{ $education->hsc_board }}
                              </dd>
                              <hr>
                              <dt>Year Of Pass</dt>
                              <dd>
                              {{ $education->hsc_yop }}
                              </dd>
                              <hr>
                              <dt>Medium</dt>
                              <dd>
                              {{ $education->hsc_medium }}
                              </dd>
                              <hr>
                              <dt>Marks</dt>
                              <dd>
                              {{ $education->hsc_marks }}
                              </dd>
                              <hr>
                              <dt>Percentage</dt>
                              <dd>
                              {{ $education->hsc_perc }}
                              </dd>
                              <hr>
                              {{--  @endforeach  --}}
                           </dl>
                
                            <button type="submit" id="status" class="button btn btn-primary" value="True">
                               <span>View More</span>
                            </button>
                           <hr>
                           <dl class="dl-horizontal doctor-info" id="View-Degree" Style="display:None">
                           {{--  @foreach($graduation as $graduations)  --}}
                              <h4 style="color:#02325d"><b>Graduation Information</b></h4>
                              <hr>
                              <dt>University</dt>
                              <dd>
                               @if($graduation!=null)
                                {{ $graduation->university_name }}
                               @endif
                              </dd>
                              <hr>
                              <dt>Degree College Name</dt>
                              <dd>
                               @if($graduation!=null)
                                 {{ $graduation->college_name }}
                               @endif
                              </dd>
                              <hr>
                              <dt>Year Of Pass</dt>
                              <dd>
                               @if($graduation!=null)
                                 {{ $graduation->college_yop }}
                               @endif
                              </dd>
                              <hr>
                              <dt>Marks</dt>
                              <dd>
                               @if($graduation!=null)
                                {{ $graduation->marks }}
                               @endif
                              </dd>
                              <hr>
                              {{--  @endforeach  --}}
                           </dl>
>>>>>>> b113bfbc8f8cb5943a3e0ad69769f474be99cb50
                        </div>
                     </div>
                  </div>
                  <div id="tab2" class="tab-pane fade">
                     <dl class="dl-horizontal doctor-info">
                        <div class="row">
                           <h4 class="ptl" style="color:#02325d;"><b>About You</b></h4>
                           <a href='{{ url("student/editprofile") }}'><button class="btn btn-primary" style="float:right;margin-right:3%;">Edit Info</button></a>
                        </div>
                        <hr>
                        <dt>Birth Date</dt>
                        <dd>
                           {{ $students->date_of_birth }}
                        </dd>
                        <hr>
                        <dt>Gender</dt>
                        <dd>
                           {{ $students->gender }}
                        </dd>
                        <hr>
                        <dt>City</dt>
                        <dd>
                           {{ $students->city }}
                        </dd>
                        <hr>
                        <dt>Pin Code</dt>
                        <dd>
                           {{ $students->pincode }}
                        </dd>
                        <hr>
                        <dt>State</dt>
                        <dd>
                           {{ $students->state }}
                        </dd>
                        <hr>
                        <dt>Country</dt>
                        <dd>
                           {{ $students->country }}
                        </dd>
                     </dl>
                  </div>
                  <div id="tab3" class="tab-pane fade ">
                     <div class="row">
                        <h4 class="ptl" style="color:#02325d"><b>SSLC Information</b></h4>
                        <a href='{{ url("student/editprofile") }}'><button class="btn btn-primary" style="float:right;margin-right:3%;">Edit Info</button></a>
                     </div>
                     <hr>
                     {{--  @foreach($education as $educations)  --}}
                     <dl class="dl-horizontal doctor-info">
                        <dt>SSLC Board</dt>
                        <dd>
                           {{ $education->ssc_board }}
                        </dd>
                        <hr>
                        <dt>Medium</dt>
                        <dd>
                           {{ $education->ssc_medium }}
                        </dd>
                        <hr>
                        <dt>Year Of Pass</dt>
                        <dd>
                           {{ $education->ssc_yop }}
                        </dd>
                        <hr>
                        <dt>Marks</dt>
                        <dd>
                           {{ $education->ssc_marks }}
                        </dd>
                        <hr>
                        <dt>Percentage</dt>
                        <dd>
                           {{ $education->ssc_perc }}
                        </dd>
                        <hr>
                     </dl>
                     <h4 style="color:#02325d"><b>PUC Information</b></h4>
                     <hr>
                     <dl class="dl-horizontal doctor-info">
                        <dt>PUC Board</dt>
                        <dd>
                           {{ $education->hsc_board }}
                        </dd>
                        <hr>
                        <dt>Year Of Pass</dt>
                        <dd>
                           {{ $education->hsc_yop }}
                        </dd>
                        <hr>
                        <dt>Medium</dt>
                        <dd>
                           {{ $education->hsc_medium }}
                        </dd>
                        <hr>
                        <dt>Marks</dt>
                        <dd>
                           {{ $education->hsc_marks }}
                        </dd>
                        <hr>
                        <dt>Percentage</dt>
                        <dd>
                           {{ $education->hsc_perc }}
                        </dd>
                        <hr>
                        {{--  @endforeach  --}}
                     </dl>
                     <button type="submit" id="status" class="button btn btn-primary" value="True">
                     <span>View More</span>
                     </button>
                     <hr>
                     <dl class="dl-horizontal doctor-info" id="View-Degree" Style="display:None">
                        {{--  @foreach($graduation as $graduations)  --}}
                        <h4 style="color:#02325d"><b>Graduation Information</b></h4>
                        <hr>
                        <dt>University</dt>
                        <dd>
                           @if($graduation!=null)
                           {{ $graduation->university_name }}
                           @endif
                        </dd>
                        <hr>
                        <dt>Degree College Name</dt>
                        <dd>
                           @if($graduation!=null)
                           {{ $graduation->college_name }}
                           @endif
                        </dd>
                        <hr>
                        <dt>Year Of Pass</dt>
                        <dd>
                           @if($graduation!=null)
                           {{ $graduation->college_yop }}
                           @endif
                        </dd>
                        <hr>
                        <dt>Marks</dt>
                        <dd>
                           @if($graduation!=null)
                           {{ $graduation->marks }}
                           @endif
                        </dd>
                        <hr>
                        {{--  @endforeach  --}}
                     </dl>
                  </div>
               </div>
            </div>
            <div class="col-sx-12 col-sm-4 col-md-4 sidebar pull-left">
               <div class="doctor-thumb">
                  @if(isset($students->profile_image))
                  <img src="{{ asset($students->profile_image) }}" alt="" style="height:200px;">
                  @else
                  <img src="{{ asset('student/images/profile_images/dummy_image.png') }}" alt="" style="height:200px;">
                  @endif
               </div>
               <br>
               @if(isset($students->profile_image))
               <div class="pull-right remove-btn">
                  <a href='{{ url("student/delete_image") }}' title="Delete image">   
                  <button type="button" class="btn btn-danger waves-effect waves-light"  data-whatever="@mdo"><i class="fa fa-trash"></i></button>
                  </a>
               </div>
               @endif
               <div class="pull-left add-btn">
                  <button type="button" title="Upload image" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-upload"></i></button>
               </div>
               <div class="volunteer-address">
                  <ul>
                     <li>
                        <!-- <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                           <div class="media-left">
                              <i class="fa fa-book text-theme-colored font-24 mt-5"></i>
                           </div>
                           <div class="media-body">
                              <h5 class="mt-0 mb-0">About You:</h5>
                              <p> {{ $students->about_you }}</p>  
                           </div>
                           </div> -->
                     </li>
                     <li>
                        <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                           <div class="media-left">
                              <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                           </div>
                           <div class="media-body">
                              <h5 class="mt-0 mb-0">Phone:</h5>
                              <p> {{ $students->mobile }}</p>
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
                              <p> {{ $students->email }}</p>
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
                              <p> {{ $students->address }}</p>
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
{{----------------------------------------------start of modal section of image upload------------------------------------------------------}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" style="margin-top:8%;">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel1">Upload Images</h4>
         </div>
         <div class="modal-body">
            <form action='{{url("student/upload_image")}}' method="POST" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-sm-12 ol-md-12 col-xs-12">
                     <div class="white-box">
                        <h3 class="box-title">File Upload</h3>
                        <input type="file" id="input-file-now" class="dropify" name="profileimage"/>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-info waves-effect waves-light">Upload</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
{{----------------------------------------------End of modal section of image upload------------------------------------------------------}}
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('student/js/dropify.js')}}"></script>
<!-- Import Particles Js -->
<script type="text/javascript">
   $(document).ready(function() {
   // Basic
   $('.dropify').dropify();
   
   // Translated
   $('.dropify-fr').dropify({
       messages: {
           default: 'Glissez-déposez un fichier ici ou cliquez',
           replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
           remove: 'Supprimer',
           error: 'Désolé, le fichier trop volumineux'
       }
   });
   
   // Used events
   var drEvent = $('#input-file-events').dropify();
   
   drEvent.on('dropify.beforeClear', function(event, element) {
       return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
   });
   
   drEvent.on('dropify.afterClear', function(event, element) {
       alert('File deleted');
   });
   
   drEvent.on('dropify.errors', function(event, element) {
       console.log('Has Errors');
   });
   
   var drDestroy = $('#input-file-to-destroy').dropify();
   drDestroy = drDestroy.data('dropify')
   $('#toggleDropify').on('click', function(e) {
       e.preventDefault();
       if (drDestroy.isDropified()) {
           drDestroy.destroy();
       } else {
           drDestroy.init();
       }
   })
   });// end of document ready function
    
   function myFunction() {
   var x = document.getElementById("View-Degree");
   if (x.style.display === "none") {
       x.style.display = "block";
   } else {
       x.style.display = "none";
   }
   if (this.value=="view more") this.value = "view less";
   else this.value = "view more";
   }
   
   $(".button").click(function() {
   $(".button span").html($(".button span").html() == 'View More' ? 'View Less' : 'View More');
   
   var x = document.getElementById("View-Degree");
       if (x.style.display === "none") {
           x.style.display = "block";
       } else {
           x.style.display = "none";
       }
   });
   
   
</script>
@endsection