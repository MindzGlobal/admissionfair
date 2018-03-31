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
        .ptl
        {
            padding-left:2%;
        }
        .add-btn
        {
            position: absolute;
            left: 18%;
            top: 32%;
        }
        .remove-btn
        {
            position: absolute;
            top: 32%;
            left: 66%;
        }
        .btn {

            font-size: 13px;
            padding: 4px 10px!important;
        }
</style>
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/responsive.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/style-main.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/utility-classes.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('student/css/custom-bootstrap-margin-padding.css') }}">
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
                        <span style="font-size:25px;">{{ ucwords($students->first_name) }} {{ ucwords($students->last_name) }}</h4>
                     </div>
                     <ul class="nav nav-tabs mt-30">
                        <li class=""><a data-toggle="tab" href="#tab1" aria-expanded="true">Colleges Applied</a></li>
                        <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">Personal Information</a></li>
                        <li class="active"><a data-toggle="tab" href="#tab3" aria-expanded="false">Educational Information</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="tab1" class="tab-pane fade ">
                           <dl class="dl-horizontal doctor-info">
                              <dt>Last Name</dt>
                              <dd>
                                 Roopa
                              </dd>
                              <hr>
                           </dl>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                      
                        <dl class="dl-horizontal doctor-info">
                           <div class="row"> 
                                <h4 class="ptl">About Me</h4>
                                <a href='{{ url("student/editprofile") }}'><button class="btn btn-primary" style="float:right;">Edit Info</button></a>
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
                        <div id="tab3" class="tab-pane fade active in">
                          <div class="row"> <h4 class="ptl" style="color:#02325d"><b>SSLC Information</b></h4><a href='{{ url("student/editprofile") }}'><button class="btn btn-primary" style="float:right;">Edit Info</button></a></div>
						  
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
                              <dt>Marks</dt>
                              <dd>
                              {{ $education->ssc_perc }}
                              </dd>
                              <hr>
                           </dl>
                      
                           <h4 style="color:#02325d"><b>PUC Information</b></h4>
                           <hr>
                           <dl class="dl-horizontal doctor-info">
                        
                              <dt>PUC College Name</dt>
                              <dd>
                              {{ $education->hsc_board }}
                              </dd>
                              <hr>
                              <dt>PUC Board</dt>
                              <dd>
                              {{ $education->hsc_yop }}
                              </dd>
                              <hr>
                              <dt>Medium</dt>
                              <dd>
                              {{ $education->hsc_medium }}
                              </dd>
                              <hr>
                              <dt>Year Of Pass</dt>
                              <dd>
                              {{ $education->hsc_marks }}
                              </dd>
                              <hr>
                              <dt>Marks</dt>
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
                              <dt>Degree College Name</dt>
                              <dd>
                               @if($graduation!=null)
                                {{ $graduation->university_name }}
                               @endif
                              </dd>
                              <hr>
                              <dt>University</dt>
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
                      <img src="{{ asset('student/images/profile_images/default.png') }}" alt="" style="height:200px;">
                    @endif
                     </div>
                     <br>
                     <div class="pull-right remove-btn">
                 <a href='{{ url("student/delete/") }}'>     <button type="button" class="btn btn-danger waves-effect waves-light"  data-whatever="@mdo"><i class="fa fa-trash"></i></button></a>
                 </div>
                     <div class="pull-left add-btn">
                   <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-upload"></i></button>
                 </div>
                
                 
                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" style="margin-top:8%;">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title" id="exampleModalLabel1">Upload Images</h4>
                             </div>
                             <div class="modal-body">

                               <form action='{{url("student/upload_image")}}' method="post" enctype="multipart/form-data">
                                 @csrf
                                  <div class="row">
                                   <div class="col-sm-12 ol-md-12 col-xs-12">
                                       <div class="white-box">
                                           <h3 class="box-title">File Upload</h3>
                                           <input type="file" id="input-file-now" class="dropify" name="image"/>
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
                     {{--  <h4 class="line-bottom">About Me:</h4>  --}}
                     <p class="text-center"> {{ $students->about_you }}</p>    
                     <div class="volunteer-address">
                        <ul>
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
                                  <p> {{ $students->city }}</p>
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
    {{--  <script type="text/javascript" src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>  --}}
  
@endsection
      
