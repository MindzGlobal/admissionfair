@extends('college.layouts.app')
@section('css')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css') }}">
<link href="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
=======
    <link rel="stylesheet" href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}">
>>>>>>> d907f5a7392a5ada4d82122eb6b01a2c8a1d8b06
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
                        <li role="tab">
                            <h4><span><i class="ti-credit-card"></i></span>Add University And Courses</h4>
                        </li>
                        <li role="tab">
                            <h4><span><i class="ti-check"></i></span>Add Media</h4>
                        </li>
                    </ul>
                    <form id="validation" class="form-horizontal" method="POST" action="{{ url('college/insertprofile') }}" >
                        @csrf
                        <div class="wizard-content">
                            <div class="wizard-pane active" role="tabpanel">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">College Name</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="clg_name" placeholder="College Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">College Official Email ID</label>
                                    <div class="col-xs-5">
                                        <input type="email" class="form-control" name="clg_offemail" placeholder="College Email ID" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Official Number</label>
                                    <div class="col-xs-5">
                                        <input type="number" class="form-control" name="clg_official_number1" placeholder="Mobile Number" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Official Number</label>
                                    <div class="col-xs-5">
                                        <input type="number" class="form-control" name="clg_official_number2" placeholder="Mobile Number" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">State</label>
                                    <div class="col-xs-5">
                                        <select class="form-control" name="clg_state" id="sel1">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">City</label>
                                    <div class="col-xs-5">
                                        <select class="form-control" name="clg_city" id="sel1">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Pin Code</label>
                                    <div class="col-xs-5">
                                        <input type="number" class="form-control" name="clg_pincode" placeholder="Pin Code (optional)" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">College Website URL</label>
                                    <div class="col-xs-5">
                                        <input type="url" class="form-control" name="clg_url" placeholder="College Website URL (optional)" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">College Address</label>
                                    <div class="col-xs-5">
                                        <textarea type="text" class="form-control" name="clg_address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            </div>

                            <div class="wizard-pane" role="tabpanel">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Type Of College</label><br>
                                    <div class="col-xs-5">
                                        <label for="chkYes">
                                        <input type="radio" id="chkYes" name="chk" value="" onclick="ShowHideDiv()" />
                                        Affilated To
                                        </label>&nbsp
                                        <label for="chkNo">
                                        <input type="radio" id="chkNo" name="chk" value="" onclick="ShowHideDiv()" />
                                        Autonomous
                                        </label>&nbsp
                                        <label for="chkYes1">
                                        <input type="radio" id="chkYes1" name="chk" value="" onclick="ShowHideDiv()" />
                                        Both
                                        </label>

                                        <div id="dvtext" style="display: none">
                                        Type University Name:
                                        <input class="form-control textbox" type="text" id="txtBox" />
                                        </div>


                                        <div id="dvtext1" style="display: none">
                                        Type University Name:
                                        <input class="form-control textbox" type="text" id="txtBox" />
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Type Of College:</label><br>
                                    <div class="col-xs-5">
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="optradio">Technology</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="optradio">Medical</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="optradio">Management</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="optradio">Arts</label>
                                    </div>
                                </div>
                            </div>


                                <div class="input_fields_wrap1">


                                    <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-xs-3 control-label">Add Cources:</label> <br>
                                        <div class="col-xs-5">

                                                <div class ="col-md-3">Courses Offered:</div>
                                                <div class ="col-md-3">Course duration:</div>
                                                <div class ="col-md-3">Fee Structure:</div>
                                                <div class ="col-md-3">Fee Structure (PDF Format):</div>
                                            </div>
                                        </div>
                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Duration Of Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Overall Fee Of Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="file" class="form-control textbox" id="" placeholder="" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-12">
                                                    <label class="col-xs-3 control-label">Add Departments</label><br>
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Add Departments" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Duration Of Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Overall Fee Of Course" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-3">
                                                    <div class="form-group">
                                                    <input type="file" class="form-control textbox" id="" placeholder="" >
                                                    </div>
                                                </div>

                                                <div class ="col-md-12">
                                                    <label class="col-xs-3 control-label">Add Departments</label><br>
                                                    <div class="form-group">
                                                    <input type="text" class="form-control textbox" id="" placeholder="Add Departments" >
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

                            <div class="wizard-pane" role="tabpanel">
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-6 ol-md-6 col-xs-12">
                                    <div class="white-box">
                                    <h3 class="box-title">College Images</h3>
                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M"/>
                                    <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 ol-md-6 col-xs-12">
                                    <div class="white-box">
                                    <h3 class="box-title">College Videos</h3>
                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M"/>
                                    <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 ol-md-12 col-xs-12">
                                    <div class="white-box">
                                    <h3 class="box-title">College Brochures</h3>
                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M"/>
                                    <label for="input-file-max-fs"><i>You can add a max file size 2MB</i></label>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <input type="submit" name="submit" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .right-sidebar -->
        <!-- /.right-sidebar -->
    </div>
@endsection

@section('js')
    <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('college/js/formValidation.js') }}"></script>  
@endsection

        