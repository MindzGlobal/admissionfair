@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}">
<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">

    <link href="{{ asset('college/plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('college/plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('college/plugins/bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />
    
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
    .red{
       color:red;
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
                                            <li><a href="#section-bar-1"> <h4><span><i class="ti-user"></i></span>College Details</h4></a></li>
                                            <!-- <li><a href="#section-bar-2"><h4><span><i class="ti-credit-card"></i></span>Add University And Courses</h4></a></li> -->
                                            <li><a href="#section-bar-3"><h4><span><i class="ti-check"></i></span>Add Media</h4></a></li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap">
                                      <!--Tab section1-->
                                        <section id="section-bar-1">
                                          <form method="post" id="validation" action="{{ url('college/updatecollegedetails') }}">
                                          @csrf                                         
                                          <div class="wizard-pane active" role="tabpanel">

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-xs-3 control-label">Type Of College <span class="red">*</span></label><br>
                                                    <div class="col-xs-5">
                                                        <label for="chkYes">
                                                        <input type="radio" id="chkYes" name="college_type" value="Affilated To" required onclick="ShowHideDiv('show')" checked
                                                        {{ $user->college_type == 'Affilated To' ? 'checked' : '' }}  />
                                                        Affilated To
                                                        </label>&nbsp
                                                        <label for="chkNo">
                                                        <input type="radio" id="chkNo" name="college_type" value="Autonomous" required onclick="ShowHideDiv('hide')" 
                                                        {{ $user->college_type == 'Autonomous' ? 'checked' : '' }} />
                                                        Autonomous
                                                        </label>&nbsp
                                                        <label for="chkYes1">
                                                        <input type="radio" id="chkYes1" name="college_type" value="Both" required onclick="ShowHideDiv('show')" 
                                                        {{ $user->college_type == 'Both' ? 'checked' : '' }} />
                                                        Both
                                                        </label>
                                                    
                                                        <div id="dvtext" style="display:none;">
                                                        Type University Name:
                                                        <input class="form-control" type="text" name="university_name" id="txtBoxUn" value="{{ $user->university_name }}"/>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">Category Of College <span class="red">*</span></label><br>
                                                    <select class="select2 m-b-10 select2-multiple" name="college_category[]" value="{{ $user->college_category }}" multiple="multiple" data-placeholder="Choose">
                                                  <optgroup label="Alaskan/Hawaiian Time Zone">
                                                      <option value="Alaska">Alaska</option>
                                                      <option value="Hawaii">Hawaii</option>
                                                  </optgroup>
                                                  <optgroup label="Pacific Time Zone">
                                                      <option value="California">California</option>
                                                      <option value="Nevada">Nevada</option>
                                                      <option value="Oregon">Oregon</option>
                                                      <option value="Washington">Washington</option>
                                                  </optgroup>
                                              
                                          </select>

                                              </div>
                                          </div>
                                          <div class="clearfix"></div>
                                          
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">College Name</label>
                                                  <div class="col-xs-5">
                                                      <input type="text" class="form-control" name="name" required placeholder="College Name" value="{{ $user->college_name }}"/>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">College Official Email ID <span class="red">*</span></label>
                                                  <div class="col-xs-5">
                                                      <input type="email" class="form-control" name="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" required placeholder="College Email ID" value="{{ $user->college_email }}" />
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="clearfix"></div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">Official Mobile Number <span class="red">*</span></label>
                                                  <div class="col-xs-5">
                                                      <input type="text" class="form-control" required pattern="[6789][0-9]{9}" name="mobile" placeholder="Mobile Number" value="{{ $user->college_number_1 }}" />
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">Official Number</label>
                                                  <div class="col-xs-5">
                                                      <input type="number" class="form-control" name="college_number_1" placeholder="Mobile Number" value="{{ $user->college_number_2 }}"/>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="clearfix"></div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">State <span class="red">*</span></label>
                                                  <div class="col-xs-5">
                                                      <input type="hidden" id="selectedState" value="{{ $user->state }}"/>
                                                      <select class="form-control" name="state" required id="listBox" onchange='selct_district(this.value)'></select>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">City <span class="red">*</span></label>
                                                  <div class="col-xs-5">
                                                      <select class="form-control" name="city" id="secondlist" >
                                                        <option value="{{ $user->city }}" selected>{{ $user->city }}</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="clearfix"></div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">Pin Code</label>
                                                  <div class="col-xs-5">
                                                      <input type="number" class="form-control" name="pincode" placeholder="Pin Code (optional)" value="{{ $user->college_pincode }}"/>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">College Website URL</label>
                                                  <div class="col-xs-5">
                                                      <input type="url" class="form-control" name="website" placeholder="College Website URL (optional)" value="{{ $user->website }}"/>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="clearfix"></div>

                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label class="col-xs-3 control-label">College Address <span class="red">*</span></label>
                                                  <div class="col-xs-5">
                                                      <textarea type="text" class="form-control" required name="college_address">{{ $user->college_address }}</textarea>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="clearfix"></div>

                                           <div class="col-sm-12">
                                            <div class="form-group">
                                           
                                                <h3 class="box-title">About College</h3>
                                                <div class="summernote">
                                                    <h4>Write Something About Your College</h4>
                                                </div>
                                            
                                            </div>
                                        </div>
                                          
                                          </div>                                          
                                            <div class="col-sm-12">
                                              <button type="submit" name="submit" class="btn btn-info waves-effect waves-light m-l-10"><span>Update</span> <i class="fa fa-check"></i></button>
                                            </div>
                                          </form>
                                        </section>
                                        
                                        <!--Tab section 2-->
                                        <!-- <section id="section-bar-2">
                                          <form method="post" action="{{ url('college/updatecollegecourse')}}" enctype="multipart/form-data">
                                          @csrf
                                          <div class="wizard-pane active" role="tabpanel">

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-xs-3 control-label">Type Of College</label><br>
                                                    <div class="col-xs-5">
                                                        <label for="chkYes">
                                                        <input type="radio" id="chkYes" name="college_type" value="Affilated To" value="Aluminum" onclick="ShowHideDiv('show')" checked
                                                        {{ $user->college_type == 'Affilated To' ? 'checked' : '' }}  />
                                                        Affilated To
                                                        </label>&nbsp
                                                        <label for="chkNo">
                                                        <input type="radio" id="chkNo" name="college_type" value="Autonomous" onclick="ShowHideDiv('hide')" 
                                                        {{ $user->college_type == 'Autonomous' ? 'checked' : '' }} />
                                                        Autonomous
                                                        </label>&nbsp
                                                        <label for="chkYes1">
                                                        <input type="radio" id="chkYes1" name="college_type" value="Both" onclick="ShowHideDiv('show')" 
                                                        {{ $user->college_type == 'Both' ? 'checked' : '' }} />
                                                        Both
                                                        </label>
                                                    
                                                        <div id="dvtext" style="display:none;">
                                                        Type University Name:
                                                        <input class="form-control" type="text" name="university_name" id="txtBoxUn" value="{{ $user->university_name }}"/>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    @php
                                                        $cat = explode(',',$user->college_category);
                                                    @endphp
                                                    <label class="col-xs-3 control-label">catagory Of College: </label><br>
                                                    <div class="col-xs-5">
                                                        <label class="checkbox-inline"><input type="checkbox" value="Technology" name="college_category[]" {{ in_array('Technology',$cat)? 'checked':''}}>Technology</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="Medical" name="college_category[]" {{ in_array('Medical',$cat)? 'checked':''}}>Medical</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="Management" name="college_category[]" {{ in_array('Management',$cat)? 'checked':''}}>Management</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="Arts" name="college_category[]" {{ in_array('Arts',$cat)? 'checked':''}}>Arts</label>
                                                    </div>
                                                </div>
                                            </div>


                                                <div class="input_fields_wrap1">


                                                  <div class="form-group">
                                                  <div class="col-md-12">
                                                      <label class="col-xs-3 control-label">Add Courses:</label> <br>
                                                        <div class="col-xs-5">
                                                              <div class="col-md-3"><b>Courses Offered:</b></div>
                                                              <div class="col-md-3"><b>Add Department:</b></div>
                                                              <div class="col-md-3"><b>Course Duration:</b></div>
                                                              <div class="col-md-3"><b>Fee Structure:</b></div>
                                                        </div>
                                                            
                                                            @foreach($courseoffer as $courseoffer)
                                                            
                                                            <div style="border-top: 2px dotted #2b2b2b70;margin-bottom: 30px;"></div>
                                                              <div class ="col-md-3">
                                                                  <div class="form-group">
                                                                  <input type="text" class="form-control textbox ui-autocomplete-input search_courses" autocomplete="off" name="course_offer[]" placeholder="Course" value="{{ $courseoffer->course_offer }}" >
                                                                  </div>
                                                              </div>
                                                              <div class ="col-md-3">
                                                                  <div class="form-group">
                                                                  <input type="text" class="form-control textbox ui-autocomplete-input search_department" autocomplete="off" name="course_department[]" placeholder="Add Departments" value="{{ $courseoffer->course_department }}">
                                                                  </div>
                                                              </div>
                                                              <div class ="col-md-3">
                                                                  <div class="form-group">
                                                                  <input type="text" class="form-control textbox" id="" name="course_duration[]" placeholder="Duration Of Course" value="{{ $courseoffer->course_duration }}">
                                                                  </div>
                                                              </div>

                                                              <div class ="col-md-3">
                                                                  <div class="form-group">
                                                                  <input type="text" class="form-control textbox" id="" name="course_total_fee[]" placeholder="Overall Fee Of Course" value="{{ $courseoffer->course_total_fee }}">
                                                                  </div>
                                                              </div>
                                                              <div class ="col-md-12">
                                                                    <div class="form-group">
                                                                    <textarea class="form-control textbox" id="" name="course_description[]" placeholder="Course Description">{{ $courseoffer->course_description }}</textarea>
                                                                    </div>
                                                                </div>
                                                              <div class="col-md-12">
                                                                <div class="col-md-6">
                                                                    <p class="doc">selcted document*  {{ $courseoffer->fee_structure_file_name }}</p>        
                                                                </div>
                                                                <div class="col-md-3"><label class="control-label pull-right m-t-10">Fee Structure(Doc Format):</label></div>
                                                                <div class ="col-md-3 pull-right">                   
                                                                    <div class="form-group">
                                                                    <input type="file" class="form-control textbox" id="" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="fee_structure_file_name[]" placeholder="" >
                                                                    </div>                                                  
                                                                </div>
                                                              </div>
                                                              <div class="clearfix"></div>
                                                              
                                                            @endforeach
                                                      </div>
                                                   </div>
                                                   <br>
                                             
                                          </div>
										  <div class="col-md-12 m-l-10">
                                                <button  name="submit" class="btn btn-primary add_field_button1 m-t-15" id="add-more" style="float:left; padding: 5px;">Add More Courses</button>
                                             </div>
                                             <br><br>
                                          <div class="col-md-12 m-t-15 m-b-30 m-l-5">
                                          <button type="submit" class="btn btn-info waves-effect waves-light m-l-5"><span>Update</span> <i class="fa fa-check"></i></button>
                                          </div>
                                        </form>
                                        </section> -->

                                        <!--Tab section 3-->
                                        <section id="section-bar-3">
                                        <form method="post" action="{{ url('college/updatecollegemedia')}}" enctype="multipart/form-data">
                                          @csrf
                                          <div class="wizard-pane active" role="tabpanel">
                                            <div class="form-group">
                                                <div class="row">
                                                <div class="col-sm-6 ol-md-6 col-xs-12">
                                                <div class="white-box">
                                                <h3 class="box-title">College Images</h3>
                                                <input type="file" id="input-file-max-fs" class="dropify" name="college_img" accept="image/gif, image/jpeg, image/png" data-max-file-size="2M" data-default-file="{{ asset($user->college_img) }}"/>
                                                <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                                </div>
                                                </div>
                                                <div class="col-sm-6 ol-md-6 col-xs-12">
                                                <div class="white-box">
                                                <h3 class="box-title">College Brochure</h3>
                                                <input type="file" id="input-file-max-fs" class="dropify" name="college_brochure" accept="image/gif, image/jpeg, image/png" data-max-file-size="2M" data-default-file="{{ asset($user->college_brochure) }}"/>
                                                <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 ol-md-12 col-xs-12">
                                                    <div class="white-box">
                                                            <h3 class="box-title">College Youtube Link</h3>
                                                            <div class="b-all">
                                                                <input class="form-control" name="college_video" type="url" placeholder="Enter youtube video link"/>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                                <div class="col-md-12 m-l-15 p-b-30">
                                                <button type="submit" class="btn btn-info waves-effect waves-light m-l-5"><span>Update</span> <i class="fa fa-check"></i></button>
                                                </div>
                                          </div>
                                        </form>
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
                          <input type="hidden" id="ajaxCourseUrl" value="{{ route('searchcourseajax') }}">
                          <input type="hidden" id="ajaxDeparmentUrl" value="{{ route('searchdeparmentajax') }}">                          
@endsection

@section('js')
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>

    <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>

    <script src="{{ asset('college/js/UpdateformValidation.js') }}"></script>
    <script src="{{ asset('college/js/state.js') }}"></script>

    <script src="{{ asset('college/plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('college/plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>

    <script src="{{ asset('college/plugins/bower_components/summernote/dist/summernote.min.js') }}"></script>

    <script src="{{ asset('college/js/cbpFWTabs.js') }}"></script>
                   <script type="text/javascript">
                   (function() {

                       [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
                           new CBPFWTabs(el);
                       });

                   })();
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

    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>


    <script>
    jQuery(document).ready(function() {
       
        // For select 2

        $(".select2").select2();
        $('.selectpicker').selectpicker();

        // For multiselect

        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });

        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });

    });
    </script>

@endsection