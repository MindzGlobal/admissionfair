@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}">
<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
<link href="{{ asset('college/plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('college/plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('college/plugins/bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />
<link href="{{ asset('college/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />

<style>
   .sttabs{
   border:1px solid #eee;
   }
   .tabs-style-bar nav ul li a span{
   border: 1px solid rgba(120,130,140,.13);
   border-radius: 100%;
   border-color: #fff;
   color: #fff;
   padding: 10px;
   margin: 5px;
   }
   h4{
   color: #fff;
   }
   .tabs-style-bar nav ul li a{
   background-color: #03a9f3;
   }
   .doc{
   font-size: 11px;
   color: red;
   }

   .img-wrap {
   position: relative;
   display: inline-block;
   /* border: 1px #00000017 solid; */
   font-size: 0;
   /* margin: 5px; */
   }
   .img-wrap .close {
   position: absolute;
   right: 0px;
   z-index: 100;
   /* background-color: #FFF; */
   padding: 0px 8px 0px;
   color: red;
   font-weight: bold;
   cursor: pointer;
   opacity: .2;
   text-align: center;
   /* font-size: 22px; */
   line-height: 10px;
   border-radius: 50%;
   }
   .img-wrap:hover .close {
   opacity: 1;
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
      </div>
      <!-- /.col-lg-12 -->
   </div>
   <!-- .row -->
   <div class="row">
      <div class="col-md-12">
         <div class="white-box">
            <section>
               <div class="sttabs tabs-style-bar">
                  <nav>
                     <ul class="steps">
                        <li>
                           <a href="#section-bar-1">
                              <h4><span><i class="ti-user"></i></span>Edit Course Details</h4>
                           </a>
                        </li>
                        <li>
                           <a href="#section-bar-2">
                              <h4><span><i class="ti-credit-card"></i></span>Edit Course Staff</h4>
                           </a>
                        </li>
                        <li>
                           <a href="#section-bar-3">
                              <h4><span><i class="ti-check"></i></span>Edit Infrastructure</h4>
                           </a>
                        </li>
                        <li>
                           <a href="#section-bar-4">
                              <h4><span><i class="ti-check"></i></span>Edit Payment Option</h4>
                           </a>
                        </li>
                     </ul>
                  </nav>
                  <div class="content-wrap">
                     <!--Tab section1-->
                     <section id="section-bar-1">
                        <div id="div1">

                         

                           <div class="col-sm-12">
                              <div class="white-box">
                                 <div class="row">
                                    <div class="col-md-3 col-xs-12 b-r">
                                       <strong>Courses Offered:</strong>
                                       <br>
                                    <p class="text-muted">{{ $courses->course_offer }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-12 b-r">
                                       <strong>Departments:</strong>
                                       <br>
                                       <p class="text-muted">{{ $courses->course_department }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-12 b-r">
                                       <strong>Course duration:</strong>
                                       <br>
                                       <p class="text-muted">{{ $courses->course_duration }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                       <strong>Fee Structure</strong>
                                       <br>
                                       <p class="text-muted">{{ $courses->course_total_fee }}</p>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-6 col-xs-12 b-r">
                                       <strong>Available Seats :</strong>
                                       <br>
                                       <p class="text-muted">{{ $courses->available_seat }}</p>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                       <strong>Upload Document :</strong>
                                       <br>
                                       <p class="text-muted">{{ $courses->fee_structure_file_name }}</p>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-6 col-xs-12 b-r">
                                       <strong>Course Structure</strong>
                                       <br>
                                      
                                           {!! $courses->course_description !!}
                                       
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                       <strong>What course offers</strong>
                                       <br>

                                       {!! $courses->what_we_offer !!}
                                     
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-6 col-xs-12 b-r">
                                       <strong>Why join the course ?</strong>
                                       <br>
                                       {!! $courses->why_join_us !!}
                                       
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                       <strong>Fee Structure sem/yearly</strong>
                                       <br>
                                       {!! $courses->fee_structure !!}
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <button id="btn1" class="btn btn-success">Edit</button>
                        </div>

                        <div id="div2" style="display:none;">

                           <div class="col-md-12">
                              <label class="col-xs-3 control-label">Add Courses:</label> <br>
                             
                                 <div class ="col-md-3">Courses Offered:</div>
                                 <div class ="col-md-3">Departments:</div>
                                 <div class ="col-md-3">Course duration:</div>
                                 <div class ="col-md-3">Fee Structure</div>
                             
                           </div>

                           <form method="post" id="validation" enctype="multipart/form-data" action="{{ url('college/updatecourserecord') }}">
                           @csrf 
                           <input type="hidden" name="course_id" value="{{ $courses->id }}">

                           <div class ="col-md-3 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <input type="text" class="form-control textbox ui-autocomplete-input search_courses" autocomplete="off" id="search_text" value=" {{ $courses->course_offer }}" name="course_offer" placeholder="Course" >
                              </div>
                           </div>
                           <div class ="col-md-3 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <input type="text" class="form-control textbox ui-autocomplete-input search_department" value=" {{ $courses->course_department }}" autocomplete="off" name="course_department" placeholder="Add Departments" >
                              </div>
                           </div>
                           <div class ="col-md-3 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <input type="text" class="form-control textbox" id="" name="course_duration" value=" {{ $courses->course_duration }}" placeholder="Duration Of Course" >
                              </div>
                           </div>
                           <div class ="col-md-3 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <input type="text" class="form-control textbox" id="" name="course_total_fee" value=" {{ $courses->course_total_fee }}" placeholder="Overall Fee Of Course" >
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label m-t-10">Available Seats :</label>
                                 <input type="number" class="form-control textbox" id="" name="available_seat" value="{{ $courses->available_seat }}" placeholder="Seats available for course" >
                              </div>
                           </div>
                           <div class ="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label m-t-10">Upload Document : {{ $courses->fee_structure_file_name }}</label>
                                 <input type="file" class="form-control textbox"  value="{{ $courses->fee_structure_file_name }}" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="fee_structure_file_name"  placeholder="{{ $courses->fee_structure_file_name }}" >
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="row">
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                 <b>
                                    <p class="box-title">Course Structure</p>
                                 </b>
                                 <textarea class="summernote" name="course_description">{{ $courses->course_description }}</textarea>
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                 <b>
                                    <p class="box-title">What course offers</p>
                                 </b>
                                 <textarea class="summernote" name="what_we_offer">{{ $courses->what_we_offer }}</textarea>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                 <b>
                                    <p class="box-title">Why join the course ?</p>
                                 </b>
                                 <textarea class="summernote" name="why_join_us">{{ $courses->why_join_us }}</textarea>
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                 <b>
                                    <p class="box-title">Fee Structure sem/yearly</p>
                                 </b>
                                 <textarea class="summernote" name="fee_structure">{{ $courses->fee_structure }}</textarea>
                              </div>
                           </div>

                           <input type="button" id="btn2" class="btn btn-success" value="Cancel">

                           <input type="submit" id="" class="btn btn-success" value="submit">
                        </form>

                        

                        </div>
                    
                     </section>


                     <!--Tab section 2-->
                     <section id="section-bar-2">

                        <div id="editdiv1">

                            @foreach($facultie as $faculties)

                            <div class="col-sm-12 col-md-12 col-xs-12">
                                    <div class="media">
                                       <div class="col-md-12 col-sm-12 col-lg-12">
                                          <div class="col-sm-6 col-md-3 col-xs-12">
                                             <h3 class="box-title">Head Of Department</h3>
                                             <label for="input-file-now"></label>
                                             <img class="media" src="{{ asset($faculties->faculty_image) }}" width="200px" height="200px">
                                          </div>
                                          <div class="col-sm-9 col-md-9 col-xs-9">
                                             
                                                <h3 class="box-title">Add Details:</h3><br>

                                               <div class="col-md-12">

                                                    <div class="row">
                                                            <div class="col-md-4 col-xs-12 b-r">
                                                               <strong>Name:</strong>
                                                               <br>
                                                               <p class="text-muted">{{ $faculties->faculty_name }}</p>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 b-r">
                                                               <strong>Specialized in:</strong>
                                                               <br>
                                                               <p class="text-muted">{{ $faculties->specialization }}</p>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 b-r">
                                                               <strong>Designation:</strong>
                                                               <br>
                                                               <p class="text-muted">{{ $faculties->designation }}</p>
                                                            </div>
                                                            
                                                         </div>
                                                         <hr>

                                               </div>

                                             <div class="col-md-12">
                                                <div class="row">

                                                            <div class="col-md-12 col-xs-12 ">
                                                               <strong>About Faculty</strong>
                                                               <br>
                                                               <p class="text-muted">{{ $faculties->about_faculty }}</p>
                                                            </div>
                                                            
                                                         </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    
                                </div>
                                @endforeach
                                
                                <button id="editbtn1" class="btn btn-success">Edit</button>    
                        </div>

                        <div id="editdiv2" style="display:none;">

                        <form method="post" id="validation" enctype="multipart/form-data" action="{{ url('college/updatefaculty') }}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $courses->id }}">
                        <div class="col-sm-12 ol-md-12 col-xs-12">
                                @foreach($facultie as $faculties)
                                
                           <div class="media" id="divcourse">
                              <div class="col-md-12 col-sm-12 col-lg-12">

                                
                                 <div class="col-sm-3 col-md-3 col-xs-3">
                                    <h3 class="box-title">Head Of Department</h3>
                                    <label for="input-file-now"></label>
                                    <input type="file"  id="input-file-now-custom-1" name="faculty_image[]"  class="dropify" data-default-file="{{ asset($faculties->faculty_image) }}">
                                 </div>
                                 <div class="col-sm-9 col-md-9 col-xs-9">
                                    <div class="col-md-12">
                                       <h3 class="box-title">Add Details:</h3>
                                       <label for="input-file-now"></label>
                                       <div class="col-xs-5 m-t-10">
                                          <div class ="col-md-4">Name:</div>
                                          <div class ="col-md-4">Specialized in:</div>
                                          <div class ="col-md-4">Designation:</div>
                                       </div>
                                    </div>
                                    <div class ="col-md-4">
                                       <div class="form-group">
                                          <input type="text" class="form-control textbox" value="{{ $faculties->faculty_name }}"  id="search_text" name="faculty_name[]" placeholder="Name of HOD" >
                                       </div>
                                    </div>
                                    <div class ="col-md-4">
                                       <div class="form-group">
                                          <input type="text" class="form-control textbox" value="{{ $faculties->specialization }}"  id="search_text" name="specialization[]" placeholder="Specialized in" >
                                       </div>
                                    </div>
                                    <div class ="col-md-4">
                                       <div class="form-group">
                                        <select class="selectpicker" name="designation[]" data-style="form-control btn-info btn-outline">
                                            <option>{{ $faculties->designation }}</option>
                                            <option value="Head OF Department">Head OF Department</option> 
                                            <option value="Professor">Professor</option>
                                              <option value="Assistant Professor">Assistant Professor</option>
                                              <option value="Staff">Staff</option>
                                           </select>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="textarea" class="control-label">About HOD</label>
                                          <textarea id="textarea" class="form-control" name="about_faculty[]" required="">{{ $faculties->about_faculty }}</textarea>
                                          <span class="help-block with-errors">
                                             <ul class="list-unstyled">
                                                <li>Please fill in this field.</li>
                                             </ul>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <a class="btn btn-danger removecourse" style="margin-left: -21px; margin-top: -16px;" onclick="divRemove(this.id);"><i class="fa fa-times"></i></a>
                           </div>
                          <br>
                          @endforeach
                           <div class="add m-t-10"></div>
                           <br>
                           <a id="clonebtn" class="btn btn-success">Add More Staff</a>
                          
                        </div> 
                        
                        <br>


                        <input type="button" id="editbtn2" class="btn btn-success" value="Cancel">

                           <input type="submit" id="" class="btn btn-success" value="submit">

                        </form>
                        </div>
                     </section>

                     <!--Tab section 3-->
                     <section id="section-bar-3">

                            <div id="imgdiv1">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="white-box">
                                            <h3 class="box-title">Gallery Page</h3>
                                            <div id="gallery">
                                                    <div id="gallery-content-center">
                                                        <div class="popup-gallery m-t-10">
                                                        
                                                        @foreach($courseimg as $courseimgs)

                                                        <div class="img-wrap" id="divimg"> 
                                                        <span id="{{ $courseimgs->id }}" class="removeimg close"><i class="fa fa-times-circle-o"></i></span>
                                                        <a href="{{ asset($courseimgs->filePath) }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here" >
                                                        <img src="{{ asset($courseimgs->filePath) }}" class="all landscape" alt="gallery" /> </a>
                                                        </div>

                                                        @endforeach 

                                                        {{--<a href="{{asset('college/images/profile_images/profile.png')}}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                                        <img src="{{asset('college/images/profile_images/profile.png')}}" class="all landscape" alt="gallery" /> </a>
                                                        <a href="{{asset('college/images/profile_images/profile.png')}}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                                        <img src="{{asset('college/images/profile_images/profile.png')}}" class="all landscape" alt="gallery" /> </a>
                                                        <a href="{{asset('college/images/profile_images/profile.png')}}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                                        <img src="{{asset('college/images/profile_images/profile.png')}}" class="all landscape" alt="gallery" /> </a> --}}
                                                      
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <button id="imgbtn1" class="btn btn-success m-l-10">Edit</button>
                            </div>
                
                        <div id="imgdiv2" style="display:none;">
                        <div class="row">
                           <div class="col-md-12">
                              <h3 class="box-title m-b-0">Add Infrastructure Images </h3>
                              <p class="text-muted m-b-30">You can upload multiple images</p>

                                <input type="hidden" name="course_id" value="{{ $courses->id }}">
                              <div class="white-box">
                                    <h3 class="box-title">File Upload</h3>
                                    <form action='{{url("college/updateimages/".$courses->id)}}' method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                                        @csrf
                                     </form>
                                </div>

                              
                              <input type="button" id="imgbtn2" class="btn btn-success m-l-10" value="Cancel">
                            
                           </div>
                        </div>
                        <br>
                        
                        </div>

                     </section>


                     <!--Tab section 4-->
                     <section id="section-bar-4">

                            <div id="paydiv1">
                                    <div class="row ">

                                                <div class="col-md-12 col-xs-12 ">
                                                   <strong>Payment Options</strong>
                                                   <br><br>
                                                    <div class="b-all">
                                                    {!! $courses->Payment_mode !!}
                                                    </div>
                                                </div>
                                             </div><br>
                                             <button id="paybtn1" class="btn btn-success m-l-10">Edit</button>     
                                    </div>

                        <div id="paydiv2" style="display:none;">
                            
                        <form method="post" id="validation" enctype="multipart/form-data" action="{{ url('college/updatepayment') }}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $courses->id }}">
                        <div class="col-sm-12">
                           <b>
                              <p class="box-title">Payment Options Available For the Course:</p>
                           </b>

                           <textarea class="summernote" name="Payment_mode">{{ $courses->Payment_mode }}</textarea>
                        
                        <input type="button" id="paybtn2" class="btn btn-success m-l-10" value="Cancel">
                        <input type="submit" id="" class="btn btn-success" value="submit">
                        </div>
                        </form>
                    </div>

                     </section>
                  </div>
                  <!-- /content -->
               </div>
               <!-- /tabs -->
            </section>
         </div>
      </div>
   </div>
</div>

{{-- ###################################  Staff Clone Element ################################ --}}                       
<div class="media hidden" id="addmore" >

        <div class="col-md-12 col-sm-12 col-lg-12">
           <div class="col-sm-3 col-md-3 col-xs-3">
              <h3 class="box-title">Add Other Staff</h3>
              <label for="input-file-now"></label>
              <input type="file" id="input-file-now-custom-s" name="faculty_image[]" data-default-file="{{asset('college/images/profile_images/profile.png')}}">
           </div>
           <div class="col-sm-9 col-md-9 col-xs-9">
              <div class="col-md-12">
                 <h3 class="box-title">Add Details:</h3>
                 <label for="input-file-now"></label>
                 <div class="col-xs-5 m-t-10">
                    <div class ="col-md-4">Name:</div>
                    <div class ="col-md-4">Specialized in:</div>
                    <div class ="col-md-4 p-l-20"> Designation:</div>
                 </div>
              </div>
              <div class ="col-md-4">
                 <div class="form-group">
                    <input type="text" class="form-control textbox" value="" id="search_text" name="faculty_name[]" placeholder="Enter Name" >
                 </div>
              </div>
              <div class ="col-md-4">
                 <div class="form-group">
                    <input type="text" class="form-control textbox" value="" id="search_text" name="specialization[]" placeholder="Specialized in" >
                 </div>
              </div>
              <div class ="col-md-4">
                 <div class="form-group">
                    <div class="col-md-4">
                       <select class="selectpicker" name="designation[]" data-style="form-control btn-info btn-outline">
                        <option>Select</option>  
                        <option value="Professor">Professor</option>
                          <option value="Assistant Professor">Assistant Professor</option>
                          <option value="Staff">Staff</option>
                       </select>
                    </div>
                 </div>
              </div>
              <div class="col-md-12">
                 <div class="form-group">
                    <label for="textarea" class="control-label">About Faculty</label>
                 <textarea id="textarea" class="form-control" name="about_faculty[]" required=""></textarea>
                    <span class="help-block with-errors">
                       <ul class="list-unstyled">
                          <li>Please fill in this field.</li>
                       </ul>
                    </span>
                 </div>
              </div>
           </div>
        </div>
        <a class="btn btn-danger removebtn" style="display:none;margin-left: -21px; margin-top: -16px;" onclick="divRemove(this.id);"><i class="fa fa-times"></i></a>
 
</div>


<input type="hidden" id="ajaxCourseUrl" value="{{ route('searchcourseajax') }}">
<input type="hidden" id="ajaxDeparmentUrl" value="{{ route('searchdeparmentajax') }}">                          
@endsection
@section('js')

<script type="text/javascript" src="{{ asset('college/plugins/bower_components/gallery/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('college/js/UpdateformValidation.js') }}"></script>
<script src="{{ asset('college/js/state.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('college/plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('college/js/cbpFWTabs.js') }}"></script>
<script type="text/javascript">
   (function() {
   
       [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
           new CBPFWTabs(el);
       });
   
   })();
</script>
<script>
   $(document).ready(function(){
       $("#btn1").click(function(){
           $("#div1").toggle();
           $("#div2").toggle();
       });
       $("#btn2").click(function(){
           $("#div1").toggle();
           $("#div2").toggle();
       });
 
       $("#editbtn1").click(function(){
           $("#editdiv1").toggle();
           $("#editdiv2").toggle();
       });
       $("#editbtn2").click(function(){
           $("#editdiv1").toggle();
           $("#editdiv2").toggle();
       });

        $("#imgbtn1").click(function(){
           $("#imgdiv1").toggle();
           $("#imgdiv2").toggle();
       });
       $("#imgbtn2").click(function(){
           $("#imgdiv1").toggle();
           $("#imgdiv2").toggle();
       });

        $("#paybtn1").click(function(){
           $("#paydiv1").toggle();
           $("#paydiv2").toggle();
       });
       $("#paybtn2").click(function(){
           $("#paydiv1").toggle();
           $("#paydiv2").toggle();
       });

   });
</script>

<script>
   Dropzone.options.myDropzone = {
       paramName: 'file',
       maxFilesize: 1, // MB
       maxFiles: 10,
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       init: function() {
           this.on("success", function(file, response) {
               
           });
       }
   };
</script>
<script>
   jQuery(document).ready(function() {
   
       $('.summernote').summernote({
           height: 150, // set editor height
           minHeight: null, // set minimum height of editor
           maxHeight: null, // set maximum height of editor
           focus: false // set focus to editable area after initializing summernote
       });
   
       $('.inline-editor').summernote({
           airMode: true
       });
   
   });
</script>
<script>
        var cloneCount = 1;
        $("#clonebtn").click(function(){
            $(".dropifys").removeClass('dro');
            var cnt=cloneCount++;
            $("#addmore").clone()
            .attr('id', 'clone_'+ cnt)
            .appendTo(".add");
            $("#clone_"+cnt+" .removebtn").attr('id', 're'+cnt).show();
            $("#clone_"+cnt).removeClass('hidden');
            $("#clone_"+cnt+" #input-file-now-custom-s").addClass('dropifys');
            $('.dropifys').dropify();
        });
       
       function divRemove(value){
        $('#'+value).parent().remove();
       }
      
    </script>

    <script>
    $('.removeimg').on('click', function(){
        var divimg = $(this).closest("#divimg");
        var dataId = $(this).attr('id');
        var r = confirm("Confirm Delete");
        
        if (r == true) {
            $.ajax({
                headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'POST',
                url: "{{ url('college/deleteimages') }}",
                data: {'dataId':dataId},
                cache: false,
         
                success:function(data)
                {
                    console.log(data);
                    divimg.remove();
                }
            })
        }
    });

    $('.removecourse').on('click', function(){
    $(this).closest("#divcourse").remove();
    });
    </script>

@endsection