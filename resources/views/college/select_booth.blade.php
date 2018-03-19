<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Virtual Admission Fair|Image Gallery</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugins/bower_components/gallery/css/animated-masonry-gallery.css" />
    <link rel="stylesheet" type="text/css" href="plugins/bower_components/fancybox/ekko-lightbox.min.css" />
    <!-- Morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<style>
.check
{
    opacity:0.3;
	color:red;
}
</style>
<body>
    <div id="wrapper">
      <?php include('common/nav.php');?>
      <?php include('common/leftmenu.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
          <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h4 class="page-title">Gallery</h4>
                  </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <ol class="breadcrumb">
                          <li><a href="">Gallery</a></li>
                          <li class="active">Image Gallery</li>
                      </ol>
                  </div>
              </div>
              <!-- /.row -->
              <div class="row">
                  <div class="col-md-12">
                      <div class="white-box">
                          <div id="gallery">
                              <div id="gallery-content ">
                                <form method="get">
                                <div class="form-group">
                                  <div id="gallery-content-center">
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/01.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/02.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/03.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val3" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/04.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val4" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/05.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val5" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/06.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val6" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/07.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val7" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/08.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val8" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/09.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val9" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/10.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val10" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/11.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val11" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="images/12.jpg" class="all landscape img-check" alt="gallery" /><input type="radio" name="chk1" id="item4" value="val12" class="hidden" autocomplete="off"></a>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <center><input type="submit" value="SUBMIT" class="btn btn-success"></center>
                                </form>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
              </div>
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
    <script type="text/javascript" src="plugins/bower_components/gallery/js/animated-masonry-gallery.js"></script>
    <script type="text/javascript" src="plugins/bower_components/gallery/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="plugins/bower_components/fancybox/ekko-lightbox.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script>
    $(document).ready(function(e){

			$('.img-check').click(function(e) {
        $('.img-check').not(this).removeClass('btn btn-block btn-success')
    		.siblings('input').prop('checked',false);
    	$(this).addClass('btn btn-block btn-success')
            .siblings('input').prop('checked',true);
    });

	});
    </script>
</body>

</html>
