<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Home|VAF-2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('student/booth/css/s.css')}}">
	<link rel="shortcut icon" type="image/png" href="{{ asset('student/booth/images/favi.png')}}">
	<style>
	.vjf-header {
    background: #2a72a7!important;
}
	</style>
</head>
<body style="background:darkgray!important;">
    <div class="main">
        <div class="first text-center fadeIn">
            <center>
                <h2 class="b" id="blink_text" style="text-transform:uppercase;">Virtual Admission Fair</h2>
                <br>
                <!--button id="Button1" type="button" class="btn btn-primary btn-lg b" onclick="Button1();">Enter Hall</button-->
                <div class="flex-1">
                    <button class="button button-mat btn--5 enter-hall" id="Button1" onclick="Button1();" >
                        <div class="psuedo-text">Enter Hall</div>
                    </button>
                </div>
            </center>
        </div>

        <div class="second">
            <video id="bgvid">
                <source src="{{ asset('student/booth/video/student.mp4')}}#t=25'" type="video/mp4">
            </video>
        </div>

        <div class="third" style="display:none;">
            <div class="">
                <div class="row">
				   <!--div class="col-md-4">
                        <center>
                            <img src="{{ asset('student/booth/images/au.png')}}" style="cursor: pointer; position: fixed;width: 15%;left: 43%;top: 55%;z-index: 99;" id="recruitment">
                        </center>
                    </div-->
                    <div class="col-md-4">
                        <center>
                            <img src="{{ asset('student/booth/images/support.jpg')}}" data-toggle="modal" data-target="#md1" data-theVideo="{{ asset('student/booth/video/Student-hall.mp4')}}" class="support">
                        </center>
                    </div>

                     <div id="walking-people" style="left: 183px;">
				
				<div id="walking-people-video" style="display: block;">
				<video id="walkingPeopleVideo" class="video-people" autoplay="" loop="" src="http://cdn-akamai.6connex.com//334/1418379397285_0.7706336518816249_origami_help_desk_01_001_crop.webm">
				</video>
				</div>
	</div>

                </div>
					<div id="toolbar">
    <div id="toolbar-container" style="width: 620px;">
        <div id="toolbar-dock"><svg height="50" version="1.1" width="620" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#bbbbbb" d="M0.5,30.5C0.5,30.5,45.5,0.5,45.5,0.5C45.5,0.5,575,0.5,575,0.5C575,0.5,620.5,30.5,620.5,30.5C620.5,30.5,0.5,30.5,0.5,30.5" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" opacity="0.038" transform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; stroke-linecap: round; opacity: 0.038;"></path><path fill="none" stroke="#bbbbbb" d="M0.5,30.5C0.5,30.5,45.5,0.5,45.5,0.5C45.5,0.5,575,0.5,575,0.5C575,0.5,620.5,30.5,620.5,30.5C620.5,30.5,0.5,30.5,0.5,30.5" stroke-linejoin="round" stroke-linecap="round" stroke-width="4" opacity="0.038" transform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; stroke-linecap: round; opacity: 0.038;"></path><path fill="none" stroke="#bbbbbb" d="M0.5,30.5C0.5,30.5,45.5,0.5,45.5,0.5C45.5,0.5,575,0.5,575,0.5C575,0.5,620.5,30.5,620.5,30.5C620.5,30.5,0.5,30.5,0.5,30.5" stroke-linejoin="round" stroke-linecap="round" stroke-width="6" opacity="0.038" transform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; stroke-linecap: round; opacity: 0.038;"></path><path fill="none" stroke="#bbbbbb" d="M0.5,30.5C0.5,30.5,45.5,0.5,45.5,0.5C45.5,0.5,575,0.5,575,0.5C575,0.5,620.5,30.5,620.5,30.5C620.5,30.5,0.5,30.5,0.5,30.5" stroke-linejoin="round" stroke-linecap="round" stroke-width="8" opacity="0.038" transform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; stroke-linecap: round; opacity: 0.038;"></path><path fill="none" stroke="#bbbbbb" d="M0.5,30.5C0.5,30.5,45.5,0.5,45.5,0.5C45.5,0.5,575,0.5,575,0.5C575,0.5,620.5,30.5,620.5,30.5C620.5,30.5,0.5,30.5,0.5,30.5" stroke-linejoin="round" stroke-linecap="round" stroke-width="10" opacity="0.038" transform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; stroke-linecap: round; opacity: 0.038;"></path><path fill="none" stroke="#bbbbbb" d="M0.5,30.5C0.5,30.5,45.5,0.5,45.5,0.5C45.5,0.5,575,0.5,575,0.5C575,0.5,620.5,30.5,620.5,30.5C620.5,30.5,0.5,30.5,0.5,30.5" stroke-linejoin="round" stroke-linecap="round" stroke-width="12" opacity="0.038" transform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; stroke-linecap: round; opacity: 0.038;"></path><path fill="#bcbcbc" stroke="#bbbbbb" d="M0.5,30.5L45.5,0.5H575L620.5,30.5Z" fill-opacity="0.6" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.6;"></path><path fill="none" stroke="#999999" d="M0.5,32.5H1180.5" stroke-width="3.5" opacity="0.7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0.7;"></path></svg></div>
        <div id="nav-icons" style="width:90%;">
            <ul id="nav-icons-list"><li class="nav-icon" tooltip="Click here to see the Exhibit Hall">
    
    <div class="icon-holder hall-icon">
      <img src="http://cdn-akamai.6connex.com//334/852/1423496644915_96_.png?_=201803030903" class="img-top" id="recruitment" width="45" height="45">
    </div>
    <span class="hall">Exhibit Hall</span>
    
    
</li><li class="nav-icon" tooltip="Click here to see the Help Desk">
    
    <div class="icon-holder customRoom-icon" style="margin: 0px;">
      <img src="http://cdn-akamai.6connex.com//334/852/1444147187007_96_.png?_=201803030903" class="img-top" width="45" height="45">
    </div>
    <span class="hall">Help Desk</span>
    
    
</li></ul>
        </div>
        <div id="nav-divider-middle" style="left: 225px;">
            <div class="main-icon icon"></div>
        </div>
        <div id="nav-divider-right">
            <div class="main-icon icon"></div>
        </div>
    </div>
</div>
            </div>
        </div>
        {{-- <!----auditorium with video modals------------------------------------------->
        <!--div class="fourth">
            <center>
                <img src="http://ammomasters.com/wp-content/uploads/2015/01/back_button_orange_13582411991.png" id="Backtosecond" class="pull-left" style="position: relative;top: 12px;width:11%;cursor: pointer;">
            </center>
            <center>
                <i class="fa fa-play-circle fa-5x" id="ig" data-toggle="modal" data-target="#acc"></i>
                <h3 style="position: absolute;left: 50%;top: 50%;margin: -58px 0 0 -51px;font-weight:700;">Click Here</h3>
            </center>
        </div--> --}}

        <div class="fifth" style="display:none; background-color: rgba(23, 20, 22, 0.18);">
            <center>
                <img src="{{ asset('student/booth/images/arrow-left.png')}}" class="pull-left click" aria-hidden="true" id="Backtoseconds">
            </center>
			
   <!-- Strat Header Section -->
<div class="vjf-header" role="Header">    
  <div class="wrap-header">
    <div class="col-md-3">

              <a href="#"><img src="{{ asset('student/images/virtual-logo.png')}}" style="width: 52%;" class="logo" alt="Logo"></a>

            
      <nav class="navbar navbar-default short-menu">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div><!-- /.container-fluid -->
      </nav>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav nav-tabs">
        <li>
              <a href="#" class="" title="My Profile"><span class="glyphicon glyphicon-user"></span>My Profile</a>
            </li>
            <li>
              <a href="#" class="" title="Change Password"><span class="glyphicon glyphicon-file"></span>Change Password</a>
            </li>
            <li>
              <a href="/test-drive/index.php?Logout=1" title="log out"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
        </ul>
      </div><!-- /.navbar-collapse -->
      
    </div>
    <div class="col-md-4">
              <div class="top-search">
          <span class="icon-search"></span>
          <input type="text" class="typeahead form-control" placeholder="Search for a Department">
        </div>
            <div class="clearfix"></div>
    </div>
    <div class="col-md-5 menu-top">
              
      <ul class="nav nav-tabs">
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff;" role="button" aria-haspopup="true" aria-expanded="false">
             @if(isset(Auth::user()->profile_image))
                <img src="{{ asset(Auth::user()->profile_image) }}"  class="user-dp" alt="Avatar" >  {{ Auth::user()->first_name.'  '.Auth::user()->last_name}} &nbsp;<span class="caret"></span>
            @else
                <img src="{{ asset('student/images/profile_images/dummy_image.png') }}"  class="user-dp" alt="Avatar">  {{ Auth::user()->first_name.'  '.Auth::user()->last_name}}&nbsp;<span class="caret"></span>
            @endif
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ url('student/profile') }}" class="" title="My Profile"><span class="glyphicon glyphicon-user"></span>My Profile</a>
            </li>
            <li>
              <a href="{{ route('student.password.reset') }}" class="" title="Change Password"><span class="glyphicon glyphicon-file"></span>Change Password</a>
            </li>
            <li>
              <a href="{{ route('student.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="log out">
                <span class="glyphicon glyphicon-log-out"></span> Logout</a>
              <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
@include('student.booth.header')
         
			
        </div>

    <!-- Modal -->
</div>
        {{-- <!-----video modals begin--------------------------------------------> --}}
        <div class="modal fade" id="md1" tabindex="-1" role="dialog" aria-labelledby="md1" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content md11">
                    <div class="modal-body md11">
                        <i class="fa fa-times-circle-o fa-2x pull-right" data-dismiss="modal" aria-hidden="true" style="margin: -14px -13px 0 0;
					opacity: 8;"></i>
                        <div>
                            <iframe width="100%" height="350" src=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!--------video modals end------------------------------------------->
						<!-- Modal content--> --}}

		{{-- <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<div class="modal-content" style="width: 111%;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<div class="video-container-custom">
							<iframe src="{{ asset('student/booth/video/Student-hall.mp4')}}" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div> --}}
				
    {{-- <script>
        src = "https://code.jquery.com/jquery-3.2.1.min.js"
        integrity = "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin = "anonymous" >
    </script> --}}
    <script>
        $(document).ready(function() {
            $(" .second, .third, .fourth").hide();
            $('#Button1').click(function(e) {
                e.preventDefault();
                $('.second').show();
                $('.first').hide();
                $('.third').hide();
                $('.fourth').hide();
                $('.fifth').hide();
                timer = setTimeout(function() {
                    $('.third').fadeIn();
                    $('.second').hide();
                    $('.fourth').hide();
                    $('.fifth').hide();
                    $('.first').hide();
                }, 2400);
            });

            $('#auditorium').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .third").hide();
                $('.fourth').fadeIn();
            });

            $('#recruitment').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .third ,.fourth").hide();
                $('.fifth').fadeIn();
            });

            $('#Backtosecond').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .fourth").hide();
                $('.third').show();
            });

            $('#Backtoseconds').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .fourth ,.fifth").hide();
                $('.third').show();
            });

        });
    </script>
    <script>
        var vid = document.getElementById("bgvid");

        function Button1() {
            setTimeout(function() {
                //alert("hello");
                vid.play();
            },10);
        }

        // $(document).ready(function() {
        //     $("#myModal").on("hidden.bs.modal", function() {
        //         $("#iframeYoutube").attr("src", "#");
        //     })
        // })

        // function changeVideo(vId) {
        //     var iframe = document.getElementById("iframeYoutube");
        //     iframe.src = "https://www.youtube.com/embed/" + vId;

        //     $("#myModal").modal("show");
        // }
    </script>
    <script>
        autoPlayYouTubeModal();

        //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
        function autoPlayYouTubeModal() {
            var trigger = $("body").find('[data-toggle="modal"]');
            trigger.click(function() {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-theVideo"),
                    videoSRCauto = videoSRC + "?autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function() {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        }
    </script>

    <script>
        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                // Variables privadas
                var links = this.el.find('.link');
                // Evento
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
                };
            }

            var accordion = new Accordion($('#accordion'), false);
        });
    </script>
	<script type="text/javascript">
            function showBooth(action) {
                 document.location.href = action;
            }
        </script>
	

</body>
</html>