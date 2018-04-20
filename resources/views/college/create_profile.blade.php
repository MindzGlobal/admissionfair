@extends('college.layouts.app')
@section('css')

<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css') }}">
<link href="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}">

<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">

    <link href="{{ asset('college/plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('college/plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('college/plugins/bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />

<style>
    .wizard-buttons > a.disabled {
    color: #fff;
    border-color: #aaa;
    background: #03a9f3;
    
    }
    .wizard-buttons > a {
    color: #fff;
    border-color: #aaa;
    background: #03a9f3;
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
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                <div id="exampleValidator" class="wizard">
                    <ul class="wizard-steps" role="tablist">
                        <li class="active" role="tab">
                            <h4><span><i class="ti-user"></i></span>College Details</h4>
                        </li>
                       <!--  <li role="tab">
                            <h4><span><i class="ti-credit-card"></i></span>Add University And Courses</h4>
                        </li> -->
                        <li role="tab">
                            <h4><span><i class="ti-check"></i></span>Add Media</h4>
                        </li>
                    </ul>
                    <form id="validation" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('college/insertprofile') }}" >
                        @csrf
                        <div class="wizard-content">
                            <div class="wizard-pane active" role="tabpanel">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Type Of College</label><br>

                                    <div class="col-xs-5">
                                        <label for="chkYes">
                                        <input type="radio" id="chkYes" name="college_type" value="Affilated To" value="Aluminum" required onclick="ShowHideDiv('show')" 
                                        {{ Auth::user()->college_type == 'Affilated To' ? '' : '' }}  />
                                        Affilated To
                                        </label>&nbsp
                                        <label for="chkNo">
                                        <input type="radio" id="chkNo" name="college_type"  value="Autonomous" required onclick="ShowHideDiv('hide')" 
                                        {{ Auth::user()->college_type == 'Autonomous' ? '' : '' }} />
                                        Autonomous
                                        </label>&nbsp
                                        <label for="chkYes1">
                                        <input type="radio" id="chkYes1" name="college_type" value="Both" required onclick="ShowHideDiv('show')" 
                                        {{ Auth::user()->college_type == 'Both' ? '' : '' }}/>
                                        Both
                                        </label>
                                    
                                        <div id="dvtext" style="display:none;">
                                        Type University Name:
                                        <input class="form-control" type="text" name="university_name" id="txtBoxUn" />
                                        </div>


                                        <!-- <div id="dvtext1" style="display: none">
                                        Type University Name:
                                        <input class="form-control" name="university_name1" type="text" id="txtBox" />
                                        </div> -->

                                    </div>
                                </div>
                            </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Category Of College:</label><br>
                                      <select class="select2 m-b-10 select2-multiple" name="college_category[]" multiple="multiple" data-placeholder="Choose">
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
                                    <label class="col-xs-3 control-label">College Name<span class="text-danger">*</span></label>
                                    <div class="col-xs-5">
                                        <input type="text" value="" class="form-control" name="name" placeholder="College Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">College Official Email ID<span class="text-danger">*</span></label>
                                    <div class="col-xs-5">
                                        <input type="email" class="form-control" name="email" placeholder="College Email ID" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Official Number<span class="text-danger">*</span></label>
                                    <div class="col-xs-5">
                                        <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Official Number</label>
                                    <div class="col-xs-5">
                                        <input type="number" class="form-control" name="college_number_1" placeholder="Mobile Number" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">State<span class="text-danger">*</span></label>
                                        <div class="col-xs-5">
                                            <input type="hidden" id="selectedState" value=""/>
                                            <select class="form-control" name="state" id="listBox" onchange='selct_district(this.value)'></select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">City<span class="text-danger">*</span></label>
                                        <div class="col-xs-5">
                                            <select class="form-control" name="city" id="secondlist"></select>
                                        </div>
                                    </div>
                                </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Pin Code</label>
                                    <div class="col-xs-5">
                                        <input type="number" class="form-control" name="pincode" placeholder="Pin Code (optional)" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">College Website URL</label>
                                    <div class="col-xs-5">
                                        <input type="url" class="form-control" name="website" placeholder="College Website URL (optional)" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">College Address<span class="text-danger">*</span></label>
                                    <div class="col-xs-5">
                                        <textarea type="text" class="form-control" name="college_address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                   
                                        <h3 class="box-title">About College</h3>
                                        <textarea class="summernote" name="About_college">
                                            <h4>Write Something About Your College</h4>
                                        </textarea>
                                    
                                    </div>
                                </div>
                          

                            <div class="clearfix"></div>

                            </div>


                            <div class="wizard-pane" role="tabpanel">
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-6 ol-md-6 col-xs-12">
                                    <div class="white-box">
                                    <h3 class="box-title">College Images</h3>
                                    <input type="file" id="input-file-max-fs" class="dropify" name="college_img" data-allowed-file-extensions="jpg png" data-max-file-size="2M"/>
                                    <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 ol-md-6 col-xs-12">
                                    {{-- <div class="white-box">
                                    <h3 class="box-title">College Videos</h3>
                                    <input type="file" id="input-file-max-fs" class="dropify" name="college_video" data-allowed-file-extensions="mp4 3gp" data-max-file-size="8M"/>
                                    <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                    </div> --}}
                                    <div class="white-box">
                                            <h3 class="box-title">College Brochures</h3>
                                            <input type="file" id="input-file-max-fs" class="dropify" name="college_brochure" data-max-file-size="2M"/>
                                            <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                            </div>
                                    
                                    </div>

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
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div> 
        <!-- /.row -->
        <!-- .right-sidebar -->
        <!-- /.right-sidebar -->
    </div>
    <input type="hidden" id="ajaxCourseUrl" value="{{ route('searchcourseajax') }}">
    <input type="hidden" id="ajaxDeparmentUrl" value="{{ route('searchdeparmentajax') }}">
@endsection

@section('js')
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
    <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('college/js/formValidation.js') }}"></script>
    <script src="{{ asset('college/js/state.js') }}"></script>

    <script src="{{ asset('college/plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('college/plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>

    <script src="{{ asset('college/plugins/bower_components/summernote/dist/summernote.min.js') }}"></script>

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

   



    <script>
            $(document).ready(function() {
             
         });
  
    </script>
@endsection
