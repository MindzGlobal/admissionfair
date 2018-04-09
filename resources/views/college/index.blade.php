@extends('college.layouts.app')
@section('css')
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
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
        top: 214px;
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
           <div class="col-md-4 col-xs-12">
              <div class="white-box">

                 <div class="user-bg">
                    <img width="100%" alt="user" src="{{ asset($user->college_img) }}">
                 </div>
                 <div class="ribbon ribbon-bookmark ribbon-right ribbon-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Image<i class="fa fa-edit pull-right m-t-10"></i></div>
                 <!-- <div class="pull-right add-btn">
                   <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Image +</button>
                 </div> -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title" id="exampleModalLabel1">Upload Images</h4>
                             </div>
                             <div class="modal-body">
                               <form action='{{url("college/index")}}' method="post" enctype="multipart/form-data">
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
                 <div class="user-btm-box">
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                       <div class="col-md-12">
                          <strong>College Name</strong>
                          <p>{{$user->college_name}}</p>
                       </div>
                    </div>
                    <hr>
                    <div class="row text-center m-t-10">
                       <div class="col-md-12">
                          <strong>College Location</strong>
                          <p>{{$user->college_state. ", " . $user->college_city}}</p>
                       </div>
                    </div>
                    <hr>
                    <div class="row text-center m-t-10">
                       <div class="col-md-12">
                          <strong>College Address</strong>
                          <p>{{$user->college_address}}
                          <br>{{$user->college_pincode}}</p>
                       </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <!-- <div class="col-md-12 col-sm-12 text-center">
                       <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fa fa-facebook"></i> </button>
                       <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fa fa-google-plus"></i> </button>
                       <button class="btn btn-linkedin waves-effect btn-circle waves-light" type="button"> <i class="fa fa-linkedin"></i> </button>
                   </div> -->
                 </div>
              </div>
           </div>
           <div class="col-md-8 col-xs-12">
              <div class="white-box">
                 <!-- Tabstyle start -->
                 <section class="m-t-20">
                    <div class="sttabs tabs-style-underline">
                       <nav>
                          <ul>
                             <li class=""><a href="#section-underline-1" class="sticon fa fa-university"><span>College Details</span></a></li>
                             <li class=""><a href="#section-underline-4" class="sticon fa fa-graduation-cap"><span>Courses Details</span></a></li>
                          </ul>
                       </nav>
                       <br>
                       <div class="content-wrap">
                          <section id="section-underline-1" class="">
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Official Email ID</label>
                                <div class="col-md-12">
                                   {{$user->college_email}}
                                </div>
                             </fieldset>
                             <hr>
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Mobile Number</label>
                                <div class="col-md-12">
                                   {{$user->college_number_1}}
                                </div>
                             </fieldset>
                             <hr>
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Landline Number</label>
                                <div class="col-md-12">
                                   {{$user->college_number_2}}
                                </div>
                             </fieldset>
                             <hr>
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Website URL</label>
                                <div class="col-md-12">
                                   {{$user->website}}
                                </div>
                             </fieldset>
                             <hr>
                             <div class="col-md-2 pull-right">
                                <a href='{{ url("college/update_profile") }}'><button class="btn btn-info waves-effect waves-light"><span>Edit</span> <i class="fa fa-edit m-l-5"></i></button></a>
                             </div>
                          </section>
                          <section id="section-underline-2" class="" style="padding:0px;">
                             <div class="white-box">
                                <div class="table-responsive">
                                   <table class="table table-bordered">
                                      <thead>
                                         <tr>
                                            <th>Course Department</th>
                                            <th>Courses Offered</th>
                                            <th>Course duration</th>
                                            <th>Fee Structure:</th>
                                            <th>Fee Structure (PDF Format)</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($course as $courses)
                                         <tr>
                                            <td>{{$courses->course_department}}</td>
                                            <td>{{$courses->course_offer}}</td>
                                            <td>{{$courses->course_duration}}</td>
                                            <td>{{$courses->course_total_fee}}</td>
                                            <td>
                                                @if($courses->fee_structure_file_name != '')
                                                    {{$courses->fee_structure_file_name}} 
                                                    <a href="{{$courses->fee_structure_file_url}}">
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                @else
                                                    <p>File Not Uploaded</p>
                                                @endif
                                            </td>
                                         </tr>
                                         @endforeach
                                      </tbody>
                                   </table>
                                   <br>
                                   <div class="col-md-2 pull-right">
                                     <a href='{{ url("college/update_profile") }}'><button class="btn btn-info waves-effect waves-light"><span>Edit</span> <i class="fa fa-edit m-l-5"></i></button></a>
                                   </div>
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
@endsection
