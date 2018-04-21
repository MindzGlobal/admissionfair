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
    .table tr{padding: 0px 0px;}
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
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="plugins/images/users/genu.jpg"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@myadmin.com</h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="row">
                                   <div class="col-md-12 col-sm-12 text-center">
                                  <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fa fa-facebook"></i> </button>

                                  <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fa fa-google-plus"></i> </button>

                                  <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fa fa-twitter"></i> </button>
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
                          <div class="table-responsive">
                                <table class="table ">

                                    <tbody>
                                        <h4 class="m-t-30">Basic Details</h4>

                                        <tr>
                                            <td><b>Name</b></td>
                                            <td>asdf</td>

                                        </tr>
                                        <tr>
                                            <td><b>Date Of Birth</b></td>
                                            <td>07/08/1994</td>

                                        </tr>
                                        <tr>
                                            <td><b>Gender</b></td>
                                            <td>Female</td>

                                        </tr>
                                        <tr>
                                            <td><b>E-mail ID</b></td>
                                            <td>asdf@gmail.com</td>

                                        </tr>
                                        <tr>
                                            <td><b>Contact Number</b></td>
                                            <td>7894561234</td>
                                        </tr>
                                        <tr>
                                            <td><b>Country</b></td>
                                            <td>India</td>

                                        </tr>
                                        <tr>
                                            <td><b>State</b></td>
                                            <td>Karnatka</td>

                                        </tr>
                                        <tr>
                                            <td><b>City</b></td>
                                            <td>Bangalore</td>

                                        </tr>
                                        <tr>
                                            <td><b>Pincode</b></td>
                                            <td>782002</td>

                                        </tr>
                                        <tr>
                                            <td><b>Address</b></td>
                                            <td>Shivaji Nagar</td>

                                        </tr>
                                        </tbody>
                                    </table>

                                     <table class="table ">

                                        <tbody>
                                        <h4 class="m-t-30">SSLC Details</h4>
                                        <tr>
                                            <td><b>Board</b></td>
                                            <td>MP Board</td>

                                        </tr>
                                        <tr>
                                            <td><b>Passout Year</b></td>
                                            <td>2010</td>

                                        </tr>
                                        <tr>
                                            <td><b>Marks</b></td>
                                            <td>78%</td>

                                        </tr>
                                        <tr>
                                            <td><b>Medium</b></td>
                                            <td>English</td>

                                        </tr>
                                    </tbody>

                                </table>


                                     <table class="table">

                                        <tbody>
                                        <h4 class="m-t-30">PUC Details</h4>
                                        <tr>
                                            <td><b>Board</b></td>
                                            <td>MP Board</td>

                                        </tr>
                                        <tr>
                                            <td><b>Passout Year</b></td>
                                            <td>2012</td>

                                        </tr>
                                        <tr>
                                            <td><b>Marks</b></td>
                                            <td>70%</td>

                                        </tr>
                                        <tr>
                                            <td><b>Medium</b></td>
                                            <td>English</td>

                                        </tr>
                                    </tbody>

                                </table>

                                 <table class="table">

                                        <tbody>
                                        <h4 class="m-t-30">Graduation Details</h4>
                                        <tr>
                                            <td><b>University</b></td>
                                            <td>RGPV</td>

                                        </tr>
                                        <tr>
                                            <td><b>Course</b></td>
                                            <td>B. Tech</td>

                                        </tr>
                                        <tr>
                                            <td><b>Marks</b></td>
                                            <td>72%</td>

                                        </tr>
                                        <tr>
                                            <td><b>Graduation Type</b></td>
                                            <td>Full Time</td>

                                        </tr>
                                    </tbody>

                                </table>

                            </div>

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
