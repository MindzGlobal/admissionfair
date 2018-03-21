<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
      <title>Virtual Admission Fair|Dashboard</title>
      <!-- Bootstrap Core CSS -->
      <link href="{{ asset('college/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('college/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
      <link href="{{ asset('plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
      <!-- Menu CSS -->
      <link href="{{ asset('college/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
      <!-- Morris CSS -->
      <link href="{{ asset('college/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
      <link href="{{ asset('college/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
      <link href="{{ asset('college/plugins/bower_components/jquery-wizard-master/css/wizard.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}">
      <!-- animation CSS -->
      <link href="{{ asset ('college/css/animate.css') }}" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="{{ asset('college/css/style.css') }}" rel="stylesheet">
      <!-- color CSS -->
      <link href="{{ asset('college/css/colors/blue.css') }}" id="theme" rel="stylesheet"
   </head>
   <body>
      <div id="wrapper">
         <?php include('common/nav.php');?>
         <?php include('common/leftmenu.php');?>
         <!-- Page Content -->
         <div id="page-wrapper">
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
                           <form id="validation" class="form-horizontal">
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

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-xs-3 control-label">Mobile Number</label>
                                          <div class="col-xs-5">
                                             <input type="number" class="form-control" name="clg_mob" placeholder="Mobile Number" />
                                          </div>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-xs-3 control-label">College Location</label>
                                          <div class="col-xs-5">
                                             <select class="form-control" name="clg_location" id="sel1">
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
                                          <label class="col-xs-3 control-label">Landline Number</label>
                                          <div class="col-xs-5">
                                             <input type="number" class="form-control" name="clg_landline" placeholder="Landline Number (optional)" />
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


                                       <div class="form-group">
                                          <label class="col-xs-3 control-label">College Address</label>
                                          <div class="col-xs-5">
                                             <textarea type="text" class="form-control" name="clg_add">
                                             </textarea>
                                          </div>
                                       </div>

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
                                       <button type="" name="" class="btn btn-primary add_field_button1" id="add-more" style="float:left; padding: 5px;">Add More Courses</button>
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

            <?php include('common/footer.php');?>
         </div>
         <!-- /#page-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="{{ asset('college/bootstrap/dist/js/tether.min.js') }}"></script>
      <script src="{{ asset('college/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="{{ asset('college/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
      <!--slimscroll JavaScript -->
      <script src="{{ asset('college/js/jquery.slimscroll.js') }}"></script>
      <!--Wave Effects -->
      <script src="{{ asset('college/js/waves.js') }}"></script>
      <!--Morris JavaScript -->
      <script src="{{ asset('college/plugins/bower_components/raphael/raphael-min.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/morrisjs/morris.js') }}"></script>
      <!-- Sparkline chart JavaScript -->
      <script src="{{ asset('college/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
      <!-- Custom Theme JavaScript -->
      <script src="{{ asset('college/js/custom.min.js') }}"></script>
      <script src="{{ asset('college/js/dashboard1.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js') }}"></script>
      <!-- FormValidation -->
      <link rel="stylesheet" href="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css') }}">
      <script src="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
      <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>

      <script type="text/javascript">
         (function() {
             $('#exampleBasic').wizard({
                 onFinish: function() {
                     swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
                 }
             });
             $('#exampleBasic2').wizard({
                 onFinish: function() {
                     swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
                 }
             });
             $('#exampleValidator').wizard({
                 onInit: function() {
                     $('#validation').formValidation({
                         framework: 'bootstrap',
                         fields: {
                             clg_name: {
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
                             clg_offemail: {
                                 validators: {
                                     notEmpty: {
                                         message: 'The email address is required'
                                     },
                                     emailAddress: {
                                         message: 'The input is not a valid email address'
                                     }
                                 }
                             },
                             clg_mob: {
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
                              clg_location: {
                                 validators: {
                                     notEmpty: {
                                         message: 'Please Select Location'
                                     }

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
                 onFinish: function() {
                     $('#validation').submit();
                     swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
                 }
             });

             $('#accordion').wizard({
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
                     swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
                 }
             });
         })();
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
             var max_fields      = 10; //maximum input boxes allowed
             var wrapper         = $(".input_fields_wrap1"); //Fields wrapper
             var add_button      = $(".add_field_button1"); //Add button ID

         var x = 1; //initlal text box count
         $(add_button).click(function(e){ //on add input button click
         e.preventDefault();
         if(x < max_fields){ //max input box allowed
             x++; //text box increment
             $(wrapper).append('<div>  <div class="form-group"><div class="col-md-12"><label class="col-xs-3 control-label"></label> <br><div class="col-xs-5"><div class ="col-md-3"></div><div class ="col-md-3"></div><div class ="col-md-3"></div><div class ="col-md-3"></div></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" placeholder="Course" ></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" placeholder="Duration Of Course" ></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" placeholder="Overall Fee Of Course" ></div></div><div class ="col-md-3"><div class="form-group"><input type="file" class="form-control textbox" id="" placeholder="" ></div></div><div class ="col-md-12"><label class="col-xs-3 control-label">Add Departments</label><br><div class="form-group"><input type="text" class="form-control textbox" id="" placeholder="Add Departments" ></div></div></div><button type="button" id="add-more" class="btn btn-danger remove_field1" style="float:left; padding: 5px;"> Remove</button><br></table></div>'); //add input box
         }
         });

         $(wrapper).on("click",".remove_field1", function(e){ //user click on remove text
         e.preventDefault(); $(this).parent('div').remove(); x--;
         })
         });
      </script>
      <script type="text/javascript">
         function ShowHideDiv() {
         var chkYes = document.getElementById("chkYes");
         var dvtext = document.getElementById("dvtext");
         var chkYes1 = document.getElementById("chkYes1");
         var dvtext1 = document.getElementById("dvtext1");
         dvtext.style.display = chkYes.checked ? "block" : "none";
         dvtext1.style.display = chkYes1.checked ? "block" : "none";
         }
      </script>
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

      <!--Style Switcher -->
      <script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
   </body>
</html>
