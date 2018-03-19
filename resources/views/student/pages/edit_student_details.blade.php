<!DOCTYPE html>
<html lang="en">
   <title>Edit Student Details|VAF-2018</title>
   <?php include("common/head.php")?>
   <style>
   </style>
   <body>
      <?php include("common/header-hall.php")?>
      <!-- Strat Banner Section -->
      <div class="edu-banner padding-bt-150 banner-height">
         <div class="container">
            <div class="count-particles">
               <span class="js-count-particles"></span>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="page-title-box">
                     <h2>Edit Student Profile</h2>
                  </div>
               </div>
            </div>
         </div>
         <!-- particles.js container -->
         <div id="particles-js"></div>
      </div>
      <!-- End Banner Section -->
      <div class="container stud-det">
         <div class="row">
            <section>
               <div class="wizard">
                  <div class="wizard-inner">
                     <div class="connecting-line"></div>
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                           <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                              <span class="round-tab">
                                 <p class="fs">Basic Info</p>
                              </span>
                           </a>
                        </li>
                        <li role="presentation" class="disabled">
                           <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                              <span class="round-tab">
                                 <p class="fs">Acedemic Info</p>
                              </span>
                           </a>
                        </li>
                        <li role="presentation" class="disabled">
                           <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                              <span class="round-tab">
                                 <p class="fs">Form Complete</p>
                              </span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="tab-content">
                     <div class="tab-pane active" role="tabpanel" id="step1">
                        <form id="regForm" action="/action_page.php">
                           <h3 class="text-center txt_blu"><u>Student Basic Information</u></h3>
                           <br>
                           <!-- One "tab" for each step in the form: -->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="fname">First Name:</label>
                                 <input type="text"  name="fname" class="form-control textbox" id="" placeholder="First Name:" pattern="[A-Z a-z]{1,32}" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="lname">Last Name:</label>
                                 <input type="text" name="lname" class="form-control textbox" id="" placeholder="Last Name:"  required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="email">Email:</label>
                                 <input type="text" name="email" class="form-control textbox" id="" placeholder="Email:" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="contact">Contact Number:</label>
                                 <input type="text" name="contact" class="form-control textbox" id="" placeholder="Contact Number:" pattern="[789][0-9]{9}" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="country">Country:</label>
                                 <select  name="country" class="form-control textbox" id="sel1"  required>
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Pincode">Pincode:</label>
                                 <input type="tel" name="Pincode" class="form-control textbox" id="mob" placeholder="Pincode"  required>
                                 <br>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="city">City:</label>
                                 <select name="city" class="form-control textbox" id="sel1"  required>
                                    <option>select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="state">State:</label>
                                 <select name="state" class="form-control textbox" id="sel1"  required>
                                    <option>select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <br><br>
                           <h3 class="text-center txt_blu"><u>About You</u></h3>
                           <br>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Birth Date">Date of birth:</label>
                                 <input type="tel" name="Birth Date" class="form-control textbox" id="mob" placeholder="Birth Date"  required>
                                 <br>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Gender">Gender:</label>
                                 <input type="tel" name="Gender" class="form-control textbox" id="mob" placeholder="Gender"  required>
                                 <br>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="clg_name">Profile Pic:</label>
                                 <input type="file" class="form-control textbox" accept="image/jpeg,.crt,.pem,.png" id="" placeholder="College Name"  required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Address"> Address:</label>
                                 <textarea name="Address" class="form-control areabox" rows="5" id="comment" placeholder="Address:"  required></textarea>
                              </div>
                           </div>
                           <!-- Circles which indicates the steps of the form: -->
                        </form>
                        <ul class="list-inline pull-right">
                           <li>
                              <button type="button" class="btn btn-primary next-step">Submit</button>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-pane" role="tabpanel" id="step2">
                        <h3 class="text-center txt_blu"><u>Student Acedemic Information</u></h3>
                        <br>
                        <!-- One "tab" for each step in the form: -->
                        <fieldset>
                           <legend>SSLC(X)</legend>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Sslc">Sslc Board:</label>
                                 <select name="Sslc" class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Year">Year:</label>
                                 <select  name="year" class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Medium">Medium:</label>
                                 <select  name="Medium" class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Marks">Marks:</label>
                                 <select name="Marks" class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                        </fieldset>
                        <br>
                        <fieldset>
                           <legend>PUC(XII)</legend>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="puboard">PUC Board:</label>
                                 <select  name="puboard" class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Year">Year:</label>
                                 <select name="Year" class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Combination">Combination:</label>
                                 <select name="Combination"  class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Marks">Marks:</label>
                                 <select name="Marks" class="form-control textbox" id="sel1">
                                    <option>Select</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                 </select>
                              </div>
                           </div>
                        </fieldset>
                        <br>
                        <button class="btn btn-success" onclick="myFunction()" id="view-more">Add Graduation</button><br>
                        <div id="degree" style="display:none;">
                           <fieldset >
                              <legend>Graduation:</legend>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="University">University:</label>
                                    <select  name="University" class="form-control textbox" id="sel1">
                                       <option>Select</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="Year">Year:</label>
                                    <select name="Year" class="form-control textbox" id="sel1">
                                       <option>Select</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="chkYes">
                                    <input name="Fulltime" type="radio" id="chkYes" name="chk" value="" onclick="ShowHideDiv()" />
                                    Full Time
                                    </label>&nbsp
                                    <label for="chkNo">
                                    <input name="parttime" type="radio" id="chkNo" name="chk" value="" onclick="ShowHideDiv()" />
                                    Part Time
                                    </label>&nbsp
                                    <label for="chkYes1">
                                    <input name="Coresspondance"  type="radio" id="chkYes1" name="chk" value="" onclick="ShowHideDiv()" />
                                    Coresspondance
                                    </label>
                                    <div id="dvtext" style="display: none">
                                       Type University Name:
                                       <input name="name" class="form-control textbox" type="text" id="txtBox" />
                                    </div>
                                    <div id="dvtext1" style="display: none">
                                       Type University Name:
                                       <input  name="name" class="form-control textbox" type="text" id="txtBox" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="clg_location">Coures:</label>
                                    <select  name="state" class="form-control textbox" id="sel1">
                                       <option>Select</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="clg_location">Marks:</label>
                                    <select name="state" class="form-control textbox" id="sel1">
                                       <option>Select</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                    </select>
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                        <br>
                        <ul class="list-inline pull-right">
                           <li>
                              <button type="button" class="btn btn-default prev-step">Previous</button>
                           </li>
                           <li>
                              <button type="button" class="btn btn-primary next-step">Submit</button>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <p>This is step 3</p>
                        <ul class="list-inline pull-right">
                           <li>
                              <button type="button" class="btn btn-default prev-step">Previous</button>
                           </li>
                           <li>
                              <button type="button" class="btn btn-default next-step">Skip</button>
                           </li>
                           <li>
                              <button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
                        <ul class="list-inline pull-right">
                           <li>
                              <button type="button" class="btn btn-primary next-step" onClick="parent.open('admission-fair/')">Submit</button>
                           </li>
                        </ul>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <?php include("common/footer.php")?>
      <!-- Import Jquery Min Js -->
      <script type="text/javascript" src="js/modernizr-custom.js"></script>
      <!-- Import Jquery Min Js -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- Import Bootstrap Min Js -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- Import Css3 Animation It -->
      <script type="text/javascript" src="js/css3-animate-it.js"></script>
      <!-- Import Bootstrap Dropdownhover Min Js -->
      <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
      <!-- Import Videopopup Js -->
      <script type="text/javascript" src="js/VideoPopUp.jquery.js"></script>
      <!-- Import Gallery Js -->
      <script type="text/javascript" src="js/gallery.js"></script>
      <!-- Import Player Js -->
      <script type="text/javascript" src="js/player.min.js"></script>
      <!-- Owl Catousel Mi Js -->
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <!-- Import Jarallax Min Js -->
      <script type="text/javascript" src="js/jarallax.min.js"></script>
      <!-- Import Header Amimation Js -->
      <script type="text/javascript" src="js/header-animation.js"></script>
      <!-- Import Custom JS -->
      <script type="text/javascript" src="js/script.js"></script>
      <!-- Import Particles Js -->
      <script type="text/javascript" src="js/particles.min.js"></script>
      <!-- Import Comming Soon Js -->
      <script type="text/javascript" src="js/comming_soon.js"></script>
      <script>
         $(document).ready(function() {
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
         });
         
         function nextTab(elem) {
             $(elem).next().find('a[data-toggle="tab"]').click();
         }
         
         function prevTab(elem) {
             $(elem).prev().find('a[data-toggle="tab"]').click();
         }
      </script>
      <script>
         function myFunction() {
             var x = document.getElementById("degree");
             if (x.style.display === "none" ){
                 x.style.display = "block";
             } else {
                 x.style.display = "none";
             }
         
         }
      </script>
   </body>
</html>