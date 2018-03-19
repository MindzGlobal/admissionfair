<!DOCTYPE html>
<html lang="en">
   <title>Single Booth|VAF-2018</title>
   <?php include("common/head.php")?>
   <style>
   </style>
   <body>
      <?php include("common/header-hall.php")?>
      <!-- Strat Banner Section -->
      <div class="edu-banner padding-bt-150 banner-background">
         <div class="container">
            <div class="page-title-box">
               <h3>Single Booth-College</h3>
            </div>
         </div>
         <!-- particles.js container -->
         <div id="particles-js"></div>
         <div class="col-md-8 stall">
            <img src="images/single.png" alt="">
         </div>
      </div>
      <br>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content body-back">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle" style="color:#000;"></i></button>
                  <h4 class="modal-title">Selection Of Courses</h4>
               </div>
               <div class="modal-body ">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Engineering Courses 
                              </a>
                           </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                           <div class="panel-body">
                              <ul class="disc">
                                 <li>computer science Engineering</li>
                                 <li>Civil Engineering</li>
                                 <li>Mechanical Engineering</li>
                                 <li>Civil Engineering</li>
                                 <li>Mechanical Engineering</li>
                              </ul>
                              <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Undergraduate Education
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">
                              <ul class="disc">
                                 <li>computer science </li>
                                 <li>computer science </li>
                                 <li>computer science </li>
                              </ul>
                              <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Graduate Education 
                              </a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">
                              <ul class="disc">
                                 <li>computer science </li>
                                 <li>computer science </li>
                                 <li>computer science </li>
                              </ul>
                              <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Law Courses
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">
                              <ul class="disc">
                                 <li>computer science </li>
                                 <li>computer science </li>
                                 <li>computer science </li>
                              </ul>
                              <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Management Courses
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                           <div class="panel-body">
                              <ul class="disc">
                                 <li>computer science </li>
                                 <li>computer science </li>
                                 <li>computer science </li>
                              </ul>
                              <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <ul class="list-inline bt1">
         <li>
            <button type="button" class="btn btn-default prev-step" data-toggle="modal" data-target="#myModal">List Of courses</button>
         </li>
      </ul>
      <!-- End Banner Section -->
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
      <script type="text/javascript">
         function ViewCourse() {
              document.location.href = 'course-list';
         }
      </script>
   </body>
</html>