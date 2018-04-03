@extends('student.layouts.student_general')

@section('css')
<style>
       .thank-u
   {
	width: 50%;
    position: relative;
    left: 25%
   }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
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
               <h2>Add Your Details</h2>
            </div>
         </div>
      </div>
   </div>
   <!-- particles.js container -->
   <div id="particles-js"></div>
</div>
<!-- End Banner Section -->
<div class="container wizardform">
   <div class="stepwizard">
      <div class="stepwizard-row setup-panel">
         <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">Personal Info</a>
         </div>
         <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">Academic Info</a>
         </div>
         <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">Form Complete</a>
         </div>
      </div>
   </div>
   <br>
   <br>
   <form role="form" action="{{ url('student/updateprofile') }}" method="post">
      @csrf
      <div class="row setup-content" id="step-1">
         <div class="col-xs-12">
            <div class="col-md-12">
               <h3 class="text-center txt_blu"><u>Student Basic Information</u></h3>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">First Name:</label>
                     <input  maxlength="100" name="first_name" type="text" value="{{ Auth::user()->first_name}}" required="required" class="form-control" placeholder="Enter First Name"  pattern="[A-Z a-z]{1,32}"/>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Last Name:</label>
                     <input  maxlength="100" type="text" name="last_name" value="{{ Auth::user()->last_name }}" required="required" class="form-control" placeholder="Enter Last Name"  />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Email:</label>
                     <input  maxlength="100" type="email" name="email" value="{{ Auth::user()->email }}" required="required" disabled class="form-control" placeholder="Enter Email"  />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Contact Number:</label>
                     <input  maxlength="100" type="number" name="mobile" required="required" value="{{ Auth::user()->mobile }}" disabled class="form-control" placeholder="Enter Contact Number"  />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Date of birth:</label>
                     <input  maxlength="100" type="text" id="datepicker" name="date_of_birth"  required="required"  class="form-control" placeholder="Enter Date of birth"  />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Gender:</label>
                     <select  name="gender" class="form-control textbox" id="gender" required="required">
                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                    <div class="form-group">
                       <label class="control-label">Father's Name:</label>
                       <input name="father_name" type="text"  placeholder="Enter Your Father's Name" class="form-control required" maxlength="100"  pattern="[A-Z a-z]{1,32}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Father's Email:</label>
                        <input name="father_email" type="email"  placeholder="Enter Your Father's Email" class="form-control required" maxlength="100" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Father's Contact Number:</label>
                        <input type="number" name="father_mobile"  placeholder="Enter Contact Number" class="form-control required" maxlength="100"   />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                       <label for="city">City:</label>
                       <input type="text" name="city" maxlength="100" placeholder="Enter city " class="form-control"  required />
                    </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="country">Country:</label>
                     <select class="form-control selectpicker show-tick  required" id="studentCountry" name ="country"  data-size="10"  data-live-search="true" autocomplete="off">
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="state">State:</label>
                     <select class="form-control selectpicker show-tick  required"  id ="studentState" name ="state"  data-size="10"  data-live-search="true" autocomplete="off" >
                     </select>
                  </div>
               </div>
               
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">PinCode:</label>
                     <input  maxlength="100" type="number" name="pincode" required="required" class="form-control" placeholder="Enter Pincode "  />
                  </div>
               </div>
               <div class="col-md-6">
                    <div class="form-group">
                       <label class="control-label">Address:</label>
                       <textarea class="form-control required" rows="1" name="address" placeholder="Enter address" ></textarea>
                    </div>
                </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label class="control-label">About you:</label>
                    <textarea name="about_you" rows="4"  maxlength="100" placeholder="Enter Brief Description About You" class="form-control required" /></textarea>
                  </div>
               </div>
               <button class="btn btn-primary nextBtn  pull-right" type="button" >Next</button>
            </div>
         </div>
      </div>
      <div class="row setup-content" id="step-2">
         <div class="col-xs-12">
            <div class="col-md-12">
               <h3 class="text-center txt_blu"><u>Student Academic Information</u></h3>
               <br>
               <!-- One "tab" for each step in the form: -->
               <fieldset>
                  <legend>SSLC(X)</legend>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="Sslc">Sslc Board:</label>
                        <input  maxlength="100" type="text" name="ssc_board" required="required" class="form-control" placeholder="Enter SSLC Board"  />
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="ssc_yop">Year:</label>
                        <select id="year" class="form-control selectpicker show-tick  required" name="ssc_yop" data-size="10"  data-live-search="true" >
                           @for ($i = date('Y'); $i >= date('Y')-20; $i--)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="Medium">Medium:</label>
                        <input  maxlength="100" type="text" name="ssc_medium" required="required" class="form-control" placeholder="Enter medium "  />
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label for="Marks">Marks/Grade:</label>
                        <input type="text" name="ssc_marks" class="form-control textbox" id="mob" placeholder="Marks"  required>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label for="Marks">Percentage(%):</label>
                        <input type="text" name="ssc_perc" class="form-control textbox" id="mob" placeholder="Percentage" required>
                     </div>
                  </div>
               </fieldset>
               <br>
               <fieldset>
                  <legend>PUC(XII)</legend>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="puboard">PUC Board:</label>
                        <input  maxlength="100" type="text" name="hsc_board" required="required" class="form-control" placeholder="Enter PUC Board"  />
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="Year">Year:</label>
                        <select class="form-control selectpicker show-tick  required" id="year" name="hsc_yop" data-size="10"  data-live-search="true" >
                           @for ($i = date('Y'); $i >= date('Y')-20; $i--)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="Combination">Medium:</label>
                        <input  maxlength="100" type="text" name="hsc_medium" required="required" class="form-control" placeholder="Enter Medium"  />
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label for="Marks">Marks/Grade:</label>
                        <input type="text" name="hsc_marks" class="form-control textbox" id="mob" placeholder="Marks"  required>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label for="Marks">Percentage(%):</label>
                        <input type="text" name="hsc_perc" class="form-control textbox" id="mob" placeholder="Percentage" required>
                     </div>
                  </div>
               </fieldset>
               <br>
               <span class="btn btn-success" onclick="myFunction()" id="view-more" style="width: 17%;">Add Graduation</span><br>
               <div id="degree" style="display:none;">
                  <fieldset >
                     <legend>Graduation:</legend>
                     <h4>university/college</h4>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="University"> University Name:</label>
                           <input type="text" name="university_name" class="form-control textbox" id="university-name" placeholder="Enter University Name" >
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="University">College Name:</label>
                           <input type="text" name="college_name" class="form-control textbox" id="College-name" placeholder="Enter University Name" >
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="Year">Year:</label>
                           <select class="form-control selectpicker show-tick  required" id="year" name="college_yop" data-size="10"  data-live-search="true" >
                           @for ($i = date('Y'); $i >= date('Y')-20; $i--)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="chkYes">
                            <input name="graduation_type" type="radio" id="full-time" name="chk" value="" />
                            Full Time
                            </label>&nbsp
                            <label for="chkNo">
                            <input name="graduation_type" type="radio" id="part-time" name="chk" value="" />
                            Part Time
                            </label>&nbsp
                            <label for="chkYes1">
                            <input name="graduation_type"  type="radio" id="coresspondance" name="chk" value="" />
                            Coresspondance
                           </label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="clg_location">Course:</label>
                           <input type="text" name="course" class="form-control textbox" id="mob" placeholder="Enter University Name" >
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="Marks">Marks/Grade:</label>
                           <input type="text" name="marks" class="form-control textbox" id="mob" placeholder="Marks"  >
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="Marks">Percentage(%):</label>
                           <input type="text" name="percentage" class="form-control textbox" id="mob" placeholder="Percentage" >
                        </div>
                     </div>
                  </fieldset>
               </div>
               <br>
               <button class="btn btn-primary nextBtn  pull-right" type="button" >Next</button>
            </div>
         </div>
      </div>
      <div class="row setup-content" id="step-3">
         <div class="col-xs-12">
         <div class="col-md-12">
               <h3 class="text-center txt_blu">Form Completed Successfully</h3>
                <img class="thank-u" src="http://chefjob.vn/images/tin-tuc/thu-cam-on-the-hien-su-ton-trong-cua-ban-doi-voi-nha-tuyen-dung.jpg" style="width:50%;">
                <br>
                </br>
                <center>
                    <ul class="list-inline">
                        <li>
                        <button class="btn btn-success  " type="submit">Finish!</button>							   </li>
                    </ul>
                </center>
            </div>
         </div>
      </div>
   </form>
</div>
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<script>
   $(document).ready(function() {

         $('.selectpicker').selectpicker('refresh');

       $('#datepicker').datepicker({
              autoclose: true,
              todayHighlight: true
          });

       //Initialize tooltips
       $('.nav-tabs > li a[title]').tooltip();
   
       //Wizard
       $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
   
           var $target = $(e.target);
   
           if ($target.parent().hasClass('disabled')) {
               return false;
           }
       });
   
       $(".next-step").click(function(e) {
   
           var $active = $('.wizard .nav-tabs li.active');
           $active.next().removeClass('disabled');
           nextTab($active);
   
       });
       $(".prev-step").click(function(e) {
   
           var $active = $('.wizard .nav-tabs li.active');
           prevTab($active);
   
       });

       var navListItems = $('div.setup-panel div a'),
               allWells = $('.setup-content'),
               allNextBtn = $('.nextBtn');
       allWells.hide();
   
       navListItems.click(function (e) {
           e.preventDefault();
           var $target = $($(this).attr('href')),
                   $item = $(this);
   
           if (!$item.hasClass('disabled')) {
               navListItems.removeClass('btn-primary').addClass('btn-default');
               $item.addClass('btn-primary');
               allWells.hide();
               $target.show();
               $target.find('input:eq(0)').focus();
           }
       });
   
       allNextBtn.click(function(){
           var curStep = $(this).closest(".setup-content"),
               curStepBtn = curStep.attr("id"),
               nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
               curInputs = curStep.find("input[type='text'],input[type='url'],input[type='email'],input[type='number'],input[type='date'],textarea,select"),
               isValid = true;
   
           $(".form-group").removeClass("has-error");
           for(var i=0; i<curInputs.length; i++){
               if (!curInputs[i].validity.valid){
                   isValid = false;
                   $(curInputs[i]).closest(".form-group").addClass("has-error");
               }
           }
   
           if (isValid)
               nextStepWizard.removeAttr('disabled').trigger('click');
       });
   
       $('div.setup-panel div a.btn-primary').trigger('click');
      
       populateCountries('studentCountry', 'studentState');// first parameter is id of country drop-down and second parameter is id of state drop-down
       


   });//end of document Ready function
   
   function nextTab(elem) {
       $(elem).next().find('a[data-toggle="tab"]').click();
   }
   
   function prevTab(elem) {
       $(elem).prev().find('a[data-toggle="tab"]').click();
   }

   function myFunction() {
       var x = document.getElementById("degree");
       if (x.style.display === "none" ){
           x.style.display = "block";
           $('#view-more').text("Remove Graduation");
       } else {
           x.style.display = "none";
           $('#view-more').text("Add Graduation");
       }
   
   }


</script>
@endsection