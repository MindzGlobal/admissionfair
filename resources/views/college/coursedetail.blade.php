@extends('college.layouts.app')
@section('css')

<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css') }}">
<link href="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}">

<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">

    <link href="{{ asset('college/plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('college/plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('college/plugins/bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />



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
                       <!--  <li role="tab">
                            <h4><span><i class="ti-check"></i></span>Add Media</h4>
                        </li> -->
                    </ul>
                    <form id="validation" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('college/insertcourse') }}" >
                        @csrf
                        <div class="wizard-content">
                           
                           <div class="wizard-pane" role="tabpanel">

                                <div class="input_fields_wrap1">


                                    <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-xs-3 control-label">Add Courses:</label> <br><br>
                                        <div class="col-xs-5">

                                                <div class ="col-md-3">Courses Offered:</div>
                                                <div class ="col-md-3">Departments:</div>
                                                <div class ="col-md-3">Course duration:</div>
                                                <div class ="col-md-3">Fee Structure</div>
                                            </div>
                                        </div>
                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox ui-autocomplete-input search_courses" autocomplete="off" id="search_text" name="course_offer[]" placeholder="Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox ui-autocomplete-input search_department" autocomplete="off" name="course_department[]" placeholder="Add Departments" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" name="course_duration[]" placeholder="Duration Of Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">

                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" name="course_total_fee[]" placeholder="Overall Fee Of Course" >
                                                    </div>

                                                </div>
                                                <div class ="col-md-12">
                                                        <div class="form-group">
                                                        <textarea class="form-control textbox" id="" name="course_description[]" placeholder="Course Description"></textarea>
                                                        </div>
                                                    </div>

                                                <div class ="col-md-12">
                                                    <div class ="col-md-6"></div>
                                                    <div class="form-group col-md-3 ">
                                                    <label class="control-label pull-right">Fee Structure (PDF Format):</label><br><br>
                                                    </div>
                                                    <div class="form-group col-md-3 pull-right">
                                                    <input type="file" class="form-control textbox" id="" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="fee_structure_file_name[]" placeholder="" >
                                                    </div>
                                                </div>

                                        </div>
                                    </div>

                            <br>

                            <div class="col-md-12">
                                <button type="" name="submit" class="btn btn-primary add_field_button1" id="add-more" style="float:left; padding: 5px;">Add More Courses</button>
                            </div>
                            <br><br>
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
