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
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <style type="text/css">
    .tabs-style-underline nav li a::after {
    background: #03a9f3;
    }
    .sttabs nav li.tab-current a {
    color: #03a9f3;
      }
    </style>
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
                      <h4 class="page-title">Student Profile</h4> </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <ol class="breadcrumb">
                          <li><a href="#">Dashboard</a></li>
                          <li class="active">My Profile</li>
                      </ol>
                  </div>
              </div>
              <!-- /.row -->
              <!-- .row -->
              <div class="row">
                  <div class="col-md-4 col-xs-12">

                        <div class="white-box">
                            <div class="user-bg"> <img src="plugins/images/large/img1.jpg" alt="user" style="100%">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href=""><img alt="img" class="thumb-lg img-circle" src="plugins/images/users/genu.jpg"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@vaf.com</h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                      <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"><i class="fa fa-facebook"></i> </button>
                                      <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fa fa-twitter"></i> </button>
                                      <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fa fa-google-plus"></i> </button>
                                    </div>
                                    <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                                        <div class="stat-item">
                                            <h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                  </div>
                  <div class="col-md-8 col-xs-12">
                     <div class="white-box">
                          <h4 class="m-t-30">Basic Details</h4>
                            <hr>
                            <ul>
                                <li><b>Name</b> - asdf</li>
                                <li><b>Date Of Birth</b> - 07/08/1994</li>
                                <li><b>Gender</b> - Female</li>
                                <li><b>E-mail ID</b> - asdf@g.com</li>
                                <li><b>Contact Number</b> - 7894656281</li>
                                <li><b>Country</b> - India</li>
                                <li><b>State</b> - Karnatka</li>
                                <li><b>City</b> - Bangalore</li>
                                <li><b>Pincode</b> - 782002</li>
                                <li><b>Address</b> - Shivaji Nagar</li>
                            </ul>

                            <h4 class="m-t-30">SSLC Details</h4>
                            <hr>
                            <ul>
                                <li><b>Board</b> - MP Board</li>
                                <li><b>Passout Year</b> - 2010</li>
                                <li><b>Marks</b> - 78%</li>
                                <li><b>Medium</b> - English</li>
                            </ul>

                            <h4 class="m-t-30">PUC Details</h4>
                            <hr>
                            <ul>
                                <li><b>Board</b> - MP Board</li>
                                <li><b>Passout Year</b> - 2012</li>
                                <li><b>Marks</b> - 70%</li>
                                <li><b>Medium</b> - English</li>
                            </ul>

                            <h4 class="m-t-30">Graduation Details</h4>
                            <hr>
                            <ul>
                                <li><b>University</b> - RGPV</li>
                                <li><b>Course</b> - B. Tech</li>
                                <li><b>Graduation Type</b> - Full Time</li>
                                <li><b>Marks</b> - 72%</li>
                            </ul>

                        </div>
                  </div>
              </div>
              <!-- /.row -->
          </div>
          <?php include('common/footer.php');?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>

     <script src="js/cbpFWTabs.js"></script>
    <script type="text/javascript">
    (function() {

        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });

    })();
    </script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
