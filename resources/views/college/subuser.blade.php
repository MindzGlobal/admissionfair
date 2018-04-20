@extends('college.layouts.app')
@section('css')
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
<style type="text/css">
    .tabs-style-underline nav li a::after {
    background: #03a9f3;
    }
    .sttabs nav li.tab-current a {
    color: #03a9f3;
    }
    .add-btn{
      position: relative;
      left: 8%;
    }
    .ribbon{
        /* top: 214px; */
        top: 156px;
        cursor:pointer;
    }
    .ribbon-right{
        right: 7px;
    }

</style>
@endsection

@section('content')
<!-- Page Content -->
<div class="container-fluid">
        <div class="row bg-title">
           <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">My Profile</h4>
           </div>
           <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <ol class="breadcrumb">
                 <li><a href="#">Dashboard</a></li>
                 <li class="active">My Profile</li>
              </ol>
           </div>
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
           <div class="col-md-9 col-xs-12">
              <div class="white-box">
                 <!-- Tabstyle start -->
                 <section class="m-t-20">
                    <div class="sttabs tabs-style-underline">
                       <nav>
                          <ul>
                             <li class=""><a href="#section-underline-1" class="sticon fa fa-graduation-cap"><span>Courses Details</span></a></li>
                             <li class=""><a href="#section-underline-4" class="sticon fa fa-university"><span>College Details</span></a></li>
                          </ul>
                       </nav>
                       <br>
                       <div class="content-wrap">
                          <section id="section-underline-1" class="">
                                        <div class="table-responsive">
                                           <table class="table table-bordered">
                                              <thead>
                                                 <tr>
                                                    <th>Course Department</th>
                                                    <th>Courses Offered</th>
                                                    <th>Course duration</th>
                                                    <th>Course Cost</th>
                                                    <th>Action</th>
                                                    {{-- <th>Fee Structure (PDF Format)</th> --}}
                                                 </tr>
                                              </thead>
                                              <tbody>
                                                {{-- @foreach($course as $courses)
                                                 <tr>
                                                    <td>{{$courses->course_department}}</td>
                                                    <td>{{$courses->course_offer}}</td>
                                                    <td>{{$courses->course_duration}}</td>
                                                    <td>{{$courses->course_total_fee}}</td>
                                                    <td class="text-nowrap">
                                                            <a href='{{ url("college/update_profile") }}' data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                            <span data-toggle="tooltip" data-original-title="Close" onClick="deleteCourse({{$courses->id}})"> <i class="fa fa-close text-danger"></i> </span>
                                                        </td>
                                                 </tr>
                                                 @endforeach --}}
                                              </tbody>
                                           </table>
                                           {{-- <div class="pull-right">{{ $course->links() }}</div> --}}
                                        </div>
                          </section>
                          <section id="section-underline-2" class="" style="padding:0px;">
                              <br>
                              <div class="container">
                                    <div class="row">
                                            <div class="col-md-6 col-xs-6 b-r"> <strong>College Official Email ID</strong>
                                                <br>
                                                <p class="text-muted">{{$user->college_email}}</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6"> <strong>College Mobile Number</strong>
                                                <br>
                                                <p class="text-muted">{{$user->college_number_1}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                                <div class="col-md-6 col-xs-6 b-r"> <strong>College Landline Number</strong>
                                                    <br>
                                                    <p class="text-muted">{{$user->college_number_2}}</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6"> <strong>College Website URL</strong>
                                                    <br>
                                                    <p class="text-muted">{{$user->website}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                     <div class="col-md-2 pull-right">
                                        <a href='{{ url("college/update_profile") }}'><button class="btn btn-info waves-effect waves-light"><span>Edit</span> <i class="fa fa-edit m-l-5"></i></button></a>
                                     </div>
                                    </div>
                          </section>
                       </div>
                       <!-- /content -->
                    </div>
                    <!-- /tabs -->
                 </section>
                 <!-- Tabstyle start -->
              </div>
           </div>
        </div>
        <!-- /.row -->
        <div class="row">
                <!-- .col -->
                <div class="col-sm-9">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">College gallery</h3>
                        <div class="row m-t-30">
                            <div class="col-sm-6">
                                    <a href="{{ asset($user->college_booth) }}" class="image-popup-vertical-fit" title="">
                                            <img src="{{ asset($user->college_booth) }}" class="img-responsive">
                                    </a>
                            </div>
                            <div class="col-sm-6">
                                    <a href="{{ asset($user->college_video) }}" class="popup-youtube m-b-30" title="">
                                            <video controls="" width="100%">
                                                <source src="{{ asset($user->college_video) }}" type="video/mp4">
                                          </video>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-sm-3">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Document</h3>
                        <div class="m-t-5">
                                <p>{{$user->college_name}}</p>
                                <a href="{{ asset($user->college_brochure) }}">
                                <img src="{{ asset('college/images/filedownload.png') }}" width="100%">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>





     </div>
<!-- /#page-wrapper -->
@endsection
@section('js')
    <!--Style Switcher -->
    <script src="{{ asset('college/js/dashboard1.js') }}"></script>
    <script src="{{ asset('college/js/cbpFWTabs.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    <script>
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
    });
    </script>
    <script type="text/javascript">
        (function() {

            [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();
    </script>
    <script>
    function deleteCourse(id) {
        var r = confirm("Are you sure you want to delete record?");
        if (r == true) {
            url = "{{url('college/destroy')}}" + id;
            window.location=url;
        } 
    }
        </script>
@endsection
