@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css') }}">
<link href="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}">
<link href="{{ asset('college/plugins/bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />
<link href="{{ asset('college/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
<link href="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
<style>
   .media{
   border:2px solid rgba(120,130,140,.13);
   }
   .red{
       color:red;
   }
   #accordion .panel-title a {
    padding: 6px 15px 10px 25px;
    font-weight: 400;
    color: #fff!important;
    background: #03a9f3;
    }
    #accordion .panel-title a.collapsed {
        background: #eee;
        color: #1e4276!important;
    }
    #accordion .panel-title a.done {
        background: #00c292;
        color: #fff!important;
    }
</style>
@endsection
@section('content')
<!-- Page Content -->
<div class="container-fluid">
   <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
         <h4 class="page-title">Add Courses</h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      </div>
   </div>
   <!-- /.row -->
   <!-- .row -->
   <div class="row">
      <div class="col-sm-12">
         <div class="panel-group wiz-aco" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
               <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Add Course Details
                     </a>
                  </h4>
               </div>
            <form id="validation" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('college/addcoursedetail') }}" >
            @csrf   
               <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                     <div class="form-group">
                        <div class="container">
                        <div class="col-md-12">
                           <label class="col-xs-3 control-label">Add Courses:</label> <br>
                           <div class="col-xs-5">
                              <div class ="col-md-3">Courses Offered<span class="red">*</span></div>
                              <div class ="col-md-3">Departments<span class="red">*</span></div>
                              <div class ="col-md-3">Course duration<span class="red">*</span></div>
                              <div class ="col-md-3">Fee Structure<span class="red">*</span></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                        <div class ="col-md-3">
                           <div class="form-group">
                              <input type="text" class="form-control textbox"  id="search_text" name="course_offer"  placeholder="Course" required >
                           </div>
                        </div>
                        <div class ="col-md-3">
                           <div class="form-group">
                              <input type="text" class="form-control textbox"  name="course_department"  placeholder="Add Departments" required >
                           </div>
                        </div>
                        <div class ="col-md-3">
                           <div class="form-group">
                              <input type="text" class="form-control textbox" id="" name="course_duration"  placeholder="Duration Of Course" required>
                           </div>
                        </div>
                        <div class ="col-md-3">
                           <div class="form-group">
                              <input type="text" class="form-control textbox" id="" name="course_total_fee"  placeholder="Overall Fee Of Course" required>
                           </div>
                        </div>
                        </div>
                        <div class ="col-md-12">
                           <div class="col-md-6">
                              <label class="control-label">Available Seats<span class="red">*</span></label>
                              <div class="form-group">
                                 <input type="number" class="form-control textbox" id="" name="available_seat"  placeholder="Seats available for course" required>
                              </div>
                           </div>
                           <div class ="col-md-6">
                              <label class="control-label">Upload Document:</label>
                              <div class="form-group">
                                 <input type="file" class="form-control textbox" id="" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="fee_structure_file_name" placeholder="" >
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="container">
                        <div class="row">
                           <div class="col-sm-6">
                              <b>
                                 <p class="box-title">Course Structure<span class="red">*</span></p>  
                              </b>
                              <textarea class="summernote" name="course_description"></textarea>
                           </div>
                           <div class="col-sm-6">
                              <b>
                                 <p class="box-title">What course offers<span class="red">*</span></p>
                              </b>
                              <textarea class="summernote" name="what_we_offer"></textarea>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-sm-6">
                              <b>
                                 <p class="box-title">Why join the course?<span class="red">*</span></p>
                              </b>
                              <textarea class="summernote" name="why_join_us"></textarea>
                           </div>
                           <div class="col-sm-6">
                              <b>
                                 <p class="box-title">Fee Structure sem/yearly<span class="red">*</span></p>
                              </b>
                              <textarea class="summernote" name="fee_structure"></textarea>
                           </div>
                        </div>
                      </div>
                     </div>
                    </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                     <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Add Course Staff
                        </a>
                     </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                     <div class="panel-body">
                        <div class="col-sm-12 ol-md-12 col-xs-12">
                           <div class="media">
                              <div class="col-md-12 col-sm-12 col-lg-12">
                                 <div class="col-sm-3 col-md-3 col-xs-3">
                                    <h3 class="box-title">Head Of Department</h3>
                                    <label for="input-file-now"></label>
                                    <input type="file" id="input-file-now-custom-1" name="faculty_image[]" class="dropify" data-default-file="{{asset('college/images/profile_images/profile.png')}}">
                                 </div>
                                 <div class="col-sm-9 col-md-9 col-xs-9">
                                    <div class="col-md-12">
                                       <h3 class="box-title">Add Details:</h3>
                                       <label for="input-file-now"></label>
                                       <div class="col-xs-5 m-t-10">
                                          <div class ="col-md-4">Name<span class="red">*</span></div>
                                          <div class ="col-md-4">Specialized in<span class="red">*</span></div>
                                          <div class ="col-md-4">Designation<span class="red">*</span></div>
                                       </div>
                                    </div>
                                    <div class ="col-md-4">
                                       <div class="form-group">
                                          <input type="text" class="form-control textbox"  id="search_text" name="faculty_name[]" placeholder="Name of HOD" >
                                       </div>
                                    </div>
                                    <div class ="col-md-4">
                                       <div class="form-group">
                                          <input type="text" class="form-control textbox"  id="search_text" name="specialization[]" placeholder="Specialized in" >
                                       </div>
                                    </div>
                                    <div class ="col-md-4">
                                       <div class="form-group">
                                          <input class="btn btn-block btn-info" name="designation[]" value="Head Of Department">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="textarea" class="control-label">About HOD</label>
                                          <textarea id="textarea" name="about_faculty[]" class="form-control" required=""></textarea>
                                          <span class="help-block with-errors">
                                             <ul class="list-unstyled">
                                                <li>Please fill in this field.</li>
                                             </ul>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br>                 
                           <div class="add m-t-10"></div>
                           <br>
                           <a id="clonebtn" class="btn btn-success">Add More Staff</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                               Payment  
                               </a>
                            </h4>
                         </div>
                         <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                               <div class="col-sm-12">
                                  <b>
                                     <p class="box-title">Payment Options Available For the Course:</p>
                                  </b>
                                  <textarea class="summernote" name="Payment_mode"></textarea>
                               </div>
                            </div>
                         </div> 
               </div>
            </form>
               <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               Add Infrastructure
                               </a>
                            </h4>
                         </div>
                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                               <div class="row">
                                  <div class="col-md-12">
                                     <h3 class="box-title m-b-0">Add Infrastructure Images </h3>
                                     <form action='{{url("college/image_gallery")}}' method="post" class="dropzone" id="my-dropzone" enctype="multipart/form-data">
                                        @csrf
                                     </form>  
                                  </div>
                               </div>
                               <br>
                               <div class="row">
                                       <div class="col-lg-12">
                                               <div class="input-group m-t-10" id="weburl">
                                                       <span class="input-group-addon" id="basic-addon3">Youtube URL</span>
                                                       <input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter youtube url" name="filePath[]">
                                                       <span class="input-group-btn">
                                                               <button class="btn btn-success" type="button" id="addmoreurl"><i class="fa fa-plus"></i></button>
                                                       </span>
                                                       <span class="input-group-btn removeurl" style="display:none;" onclick="divRemoveurl(this.id);">
                                                               <button class="btn btn-googleplus" type="button" ><i class="fa fa-times"></i></button>
                                                       </span>
                                               </div>
                                       </div>
                                       <div class="col-lg-12 addurl m-t-10"></div>
                               </div>
                            </div>
                         </div> 
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.row -->
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
                <input type="text" class="form-control textbox"  id="search_text" name="faculty_name[]" placeholder="Enter Name" >
             </div>
          </div>
          <div class ="col-md-4">
             <div class="form-group">
                <input type="text" class="form-control textbox"  id="search_text" name="specialization[]" placeholder="Specialized in" >
             </div>
          </div>
          <div class ="col-md-4">
             <div class="form-group">
                <div class="col-md-4">
                   <select class="selectpicker" name="designation[]" data-style="form-control btn-info btn-outline">
                      <option>Professor</option>
                      <option>Assistant Professor</option>
                      <option>Staff</option>
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
{{-- <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script> --}}
<script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('college/js/formValidation.js') }}"></script>
<script src="{{ asset('college/js/state.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.js') }}"></script>
<script>
    var drop_zone=null;   
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
   
            Dropzone.options.myDropzone = {
               autoProcessQueue: false,
               paramName: 'file',
               maxFilesize: 1, // MB
               maxFiles: 10,
               acceptedFiles: ".jpeg,.jpg,.png,.gif",
               init: function() {
                   myDropzone = this; // closure
                   this.on("success", function(file, response) {
                       
                   });
               }
           };
       
       });
   </script>
   <script>
   
   $('.dropify').dropify();
   
      $('#accordion').wizard({
        onInit: function() {
            $('#validation').formValidation({
                framework: 'bootstrap',
                fields: {
                    course_offer: {
                        validators: {
                            notEmpty: {
                                message: 'The College name is required'
                            },
                            stringLength: {
                                min: 3,
                                max: 100,
                                message: 'The username must be more than 3 and less than 100 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]+$/,
                                message: 'The College name can only consist of alphabetical A-Z a-z'
                            }
                        }
                    },
                    course_department: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    course_duration: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile Number is required'
                            },

                            regexp: {
                                regexp: /^[6789]{1}\d{5}\d{4}$/,
                                message: 'The Mobile Number should be start from 6789'
                            }
                        }
                    },
                    course_total_fee: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile State is required'
                            },
                        }
                    },
                    // city: {
                    //     validators: {
                    //         notEmpty: {
                    //             message: 'College Mobile City is required'
                    //         },
                    //     }
                    // },
                    college_address: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile Address is required'
                            },
                        }
                    },
                    college_category: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile City is required'
                            },
                        }
                    }
                }
            });
        },
        validator: function() {
            var fv = $('#validation').data('formValidation');

            var $this = $(this);

            // Validate the container
            fv.validateContainer($this);

            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
                return false;
            }

            return true;
        }, 
         step: '[data-toggle="collapse"]',
      
         buttonsAppendTo: '.panel-collapse',
      
         templates: {
             buttons: function() {
                 var options = this.options;
                 return '<div class="panel-footer"><ul class="pager">' +
                     '<li class="previous">' +
                     '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' +
                     '</li>' +
                     '<li class="next">' +
                     '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' +
                     '<a href="#' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' +
                     '</li>' +
                     '</ul></div>';
             }
         },
      
         onBeforeShow: function(step) {
             step.$pane.collapse('show');
         },
      
         onBeforeHide: function(step) {
             step.$pane.collapse('hide');
         },
      
         onFinish: function() {
           var fd = new FormData($('#validation')[0]);  
           image = myDropzone.getAcceptedFiles();
           var youtube = $('input[name="filePath[]"]').map(function(){return $(this).val();}).get();;
   
           for(var i=0;i<image.length;i++){
              fd.append('course_gallery[]', image[i]);
           }

           for(var i=0;i<youtube.length;i++){
              fd.append('filePath[]', youtube[i]);
           }

           url = $('#validation').attr( 'action' );
           $.ajax({
               type: 'POST',
               url: url,
               data:fd,
               cache: false,
               contentType: false,
               processData: false,
               enctype: 'multipart/form-data',
               success: function(op) {
                   console.log(op);
                   var res = $.parseJSON(op);
                   if (res.res == 'success') {
                       swal("Message Finish!",res.msg, res.res );
                       //window.location = "../select_booth";
                   }
               }
           })
         }
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
       }).click();
      
      function divRemove(value){
       $('#'+value).parent().remove();
      }
     
   </script>

{{-- Add More website Url --}}
<script>
    $(document).ready(function(){
     var cloneCount = 1;
     $("#addmoreurl").click(function(){
         var cnt=cloneCount++;
         $("#weburl").clone()
         .attr('id', 'clone_'+ cnt)
         .appendTo(".addurl");
         $('#clone_'+cnt).find('[name]').each(function() {
             $(this).val('');
         });
         $("#clone_"+cnt+" .removeurl").attr('id', 're'+cnt).show();
         $("#clone_"+cnt+" #addmoreurl").attr('id', 're'+cnt).hide();
     });
    });
    
    function divRemoveurl(value){
    $('#'+value).parent().remove();
    }  
</script>
@endsection