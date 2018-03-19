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
                        <h4 class="page-title">Subscription Package</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="">Subscription</a></li>
                            <li class="active">Package Pricing</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row pricing-plan">
                                <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                    <div class="pricing-box">
                                        <div class="pricing-body b-l">
                                            <div class="pricing-header">
                                                <h4 class="text-center">Silver</h4>
                                                <h2 class="text-center"><span class="price-sign">Rs</span> 2400</h2>
                                                <p class="uppercase">per month</p>
                                            </div>
                                            <div class="price-table-content">
                                                <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                                <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                <div class="price-row"><i class="icon-drawar"></i> 50GB Storage</div>
                                                <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                <div class="price-row">
                                                    <button class="btn btn-success waves-effect waves-light m-t-20">Subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                    <div class="pricing-box b-l">
                                        <div class="pricing-body">
                                            <div class="pricing-header">
                                                <h4 class="text-center">Gold</h4>
                                                <h2 class="text-center"><span class="price-sign">Rs</span> 3400</h2>
                                                <p class="uppercase">per month</p>
                                            </div>
                                            <div class="price-table-content">
                                                <div class="price-row"><i class="icon-user"></i> 5 Members</div>
                                                <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                <div class="price-row"><i class="icon-drawar"></i> 80GB Storage</div>
                                                <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                <div class="price-row">
                                                    <button class="btn btn-success waves-effect waves-light m-t-20">Subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                    <div class="pricing-box featured-plan">
                                        <div class="pricing-body">
                                            <div class="pricing-header">
                                                <h4 class="price-lable text-white bg-warning"> Popular</h4>
                                                <h4 class="text-center">Platinum</h4>
                                                <h2 class="text-center"><span class="price-sign">Rs</span> 4500</h2>
                                                <p class="uppercase">per month</p>
                                            </div>
                                            <div class="price-table-content">
                                                <div class="price-row"><i class="icon-user"></i> 10 Members</div>
                                                <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                <div class="price-row"><i class="icon-drawar"></i> 120GB Storage</div>
                                                <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                <div class="price-row">
                                                    <button class="btn btn-lg btn-info waves-effect waves-light m-t-20">Subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                    <div class="pricing-box">
                                        <div class="pricing-body b-r">
                                            <div class="pricing-header">
                                                <h4 class="text-center">Dimond</h4>
                                                <h2 class="text-center"><span class="price-sign">Rs</span> 5400</h2>
                                                <p class="uppercase">per month</p>
                                            </div>
                                            <div class="price-table-content">
                                                <div class="price-row"><i class="icon-user"></i> 15 Members</div>
                                                <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                <div class="price-row"><i class="icon-drawar"></i> 1TB Storage</div>
                                                <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                <div class="price-row">
                                                    <button class="btn btn-success waves-effect waves-light m-t-20">Subscribe</button>
                                                </div>
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
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
