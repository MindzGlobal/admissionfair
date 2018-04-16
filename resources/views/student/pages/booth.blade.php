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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.vjf-header {
    background: #2a72a7!important;
}


:after,
:before {
  box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
  content: '';
  display: table
}

.clearfix:after {
  clear: both;
  display: block
}
ul{
	list-style:none;
	margin: 0;
	padding: 0;
}
a, a:hover, a.active, a:active, a:visited, a:focus{
	color:#fefefe;
	text-decoration:none;
}


.exo-menu{
	width: 100%;
	float: left;
	list-style: none;
	position:relative;
	background: #2980b9;
}
.exo-menu > li {	display: inline-block;float:right;}
.exo-menu > li > a{
	color: #ccc;
	text-decoration: none;
	text-transform: uppercase;
	border-right: 1px #365670 dotted;
	-webkit-transition: color 0.2s linear, background 0.2s linear;
	-moz-transition: color 0.2s linear, background 0.2s linear;
	-o-transition: color 0.2s linear, background 0.2s linear;
	transition: color 0.2s linear, background 0.2s linear;
}
.exo-menu > li > a.active,
.exo-menu > li > a:hover,
li.drop-down ul > li > a:hover{
	background:#009FE1;
	color:#fff;
}
.exo-menu i {
  float: left;
  font-size: 18px;
  margin-right: 6px;
  line-height: 20px !important;
}
li.drop-down,
.flyout-right,
.flyout-left{position:relative;}
li.drop-down:before {
  color: #fff;
  font-family: FontAwesome;
  font-style: normal;
  display: inline;
  position: absolute;
  right: 6px;
  top: 20px;
  font-size: 14px;
}
li.drop-down>ul{
	left: 0px;
	min-width: 230px;

}
.drop-down-ul{display:none;}
.flyout-right>ul,
.flyout-left>ul{
  top: 0;
  min-width: 230px;
  display: none;
  border-left: 1px solid #365670;
  }

li.drop-down>ul>li>a,
.flyout-right ul>li>a ,
.flyout-left ul>li>a {
	color: #fff;
	display: block;
	padding: 20px 22px;
	text-decoration: none;
	background-color: #365670;
	border-bottom: 1px dotted #547787;
	-webkit-transition: color 0.2s linear, background 0.2s linear;
	-moz-transition: color 0.2s linear, background 0.2s linear;
	-o-transition: color 0.2s linear, background 0.2s linear;
	transition: color 0.2s linear, background 0.2s linear;
}
.flyout-right ul>li>a ,
.flyout-left ul>li>a {
	border-bottom: 1px dotted #B8C7BC;
}


/*Flyout Mega*/
.flyout-mega-wrap {
	top: 0;
	right: 0;
	left: 100%;
	width: 100%;
	display:none;
	height: 100%;
	padding: 15px;
	min-width: 742px;

}
h4.row.mega-title {
  color:#eee;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid #ccc;
 }
.flyout-mega ul > li > a {
  font-size: 90%;
  line-height: 25px;
  color: #fff;
  font-family: inherit;
}
.flyout-mega ul > li > a:hover,
.flyout-mega ul > li > a:active,
.flyout-mega ul > li > a:focus{
  text-decoration: none;
  background-color: transparent !important;
  color: #ccc !important
}
/*mega menu*/

.mega-menu {
  left: 0;
  right: 0;
  padding: 15px;
  display:none;
  padding-top: 0;
  min-height: 100%;

}
h4.row.mega-title {
  color: #eee;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid #547787;
  padding-top: 15px;
  background-color: #365670
  }
 .mega-menu ul li a {
  line-height: 25px;
  font-size: 14px!important;
  display: block;
}
ul.stander li a {
    padding: 3px 0px;
}

ul.description li {
    padding-bottom: 12px;
    line-height: 8px;
}

ul.description li span {
    color: #ccc;
    font-size: 85%;
}
a.view-more{
  border-radius: 1px;
  margin-top:15px;
  background-color: #009FE1;
  padding: 2px 10px !important;
  line-height: 21px !important;
  display: inline-block !important;
}
a.view-more:hover{
	color:#fff;
	background:#0DADEF;
}
ul.icon-des li a i {
    color: #fff;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    text-align: center;
    background-color: #009FE1;
    line-height: 35px !important;
}

ul.icon-des li {
    width: 100%;
    display: table;
    margin-bottom: 11px;
}
/*Blog DropDown*/
.Blog{
	left:0;
	display:none;
	color:#fefefe;
	padding-top:15px;
	background:#547787;
	padding-bottom:15px;
}
.Blog .blog-title{
	color:#fff;
	font-size:15px;
	text-transform:uppercase;

}
.Blog .blog-des{
	color:#ccc;
	font-size:90%;
	margin-top:15px;
}
.Blog a.view-more{
	margin-top:0px;
}
/*Images*/
.Images{
	left:0;
   width:100%;
	 display:none;
	color:#fefefe;
	padding-top:15px;
	background:#547787;
	padding-bottom:15px;
}
.Images h4 {
  font-size: 15px;
  margin-top: 0px;
  text-transform: uppercase;
}
/*common*/
.flyout-right ul>li>a ,
.flyout-left ul>li>a,
.flyout-mega-wrap,
.mega-menu{
	background-color: #fff;
}

/*hover*/
.Blog:hover,
.Images:hover,
.mega-menu:hover,
.drop-down-ul:hover,
li.flyout-left>ul:hover,
li.flyout-right>ul:hover,
.flyout-mega-wrap:hover,
li.flyout-left a:hover +ul,
li.flyout-right a:hover +ul,
.blog-drop-down >a:hover+.Blog,
li.drop-down>a:hover +.drop-down-ul,
.images-drop-down>a:hover +.Images,
.mega-drop-down a:hover+.mega-menu,
li.flyout-mega>a:hover +.flyout-mega-wrap{
	display:block;
}
/*responsive*/
 @media (min-width:767px){
	.exo-menu > li > a{
	display:block;
	padding: 20px 22px;
 }
.mega-menu, .flyout-mega-wrap, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:absolute;
}
 .flyout-right>ul{
	left: 100%;
	}
	.flyout-left>ul{
	right: 100%;
}
 }
@media (max-width:767px){

	.exo-menu {
		min-height: 58px;
		background-color: #000;
		width: 100%;
	}
	
	.exo-menu > li > a{
		width:100% ;
	    display:none ;
	
	}
	.exo-menu > li{
		width:100%;
	}
	.display.exo-menu > li > a{
	  display:block ;
	  	padding: 20px 22px;
	}
	
.mega-menu, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:relative;
}

}
a.toggle-menu{
    position: absolute;
    right: 0px;
    padding: 20px;
    font-size: 27px;
    background-color: #000;
    color: #000;
    top: 0px;
}
span{
    display: block;
    line-height: 28px;
    font-size: 14px;
}
a
{
    color:#2980b9!important;
    font-size: 16px;
}
clor

{
    color:#fff;
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

        <div class="second ">
            <video id="bgvid">
                <source src="{{ asset('student/booth/video/student.mp4')}}#t=25'" type="video/mp4">
            </video>
        </div>

        <div class="third" style="display:none;">
        <div class="content">
	 
     <ul class="exo-menu">
              <a href="#"><img src="http://localhost/admissionfair/public/student/images/virtual-logo.png" style="width: 11%;" class="logo" alt="Logo" ></a>

     <li class="drop-down"><a id="navbarDropdown"   style="color:#fff!important;" class="nav-link dropdown-toggle img-cls" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
                                                                            <img src="http://localhost/admissionfair/public/student/images/profile_images/dummy_image.png" alt="user-img" style="width:26px;" class="img-circle" >  mala  gowda <span class="caret"></span>
                                                                    </a>
    
             <!--Drop Down-->
             <ul class="drop-down-ul animated fadeIn">
             <li>
              <a href="{{ url('student/profile') }}" class="" title="My Profile"  style="color:#fff!important;"><span class="glyphicon glyphicon-user"  style="color:#fff!important;"></span>My Profile</a>
            </li>
            <li>
              <a href="{{ route('student.password.reset') }}" class="" title="Change Password"  style="color:#fff!important;"><span class="glyphicon glyphicon-file"  style="color:#fff!important;"></span>Change Password</a>
            </li>
            <li>
            <li>
              <a href="/test-drive/index.php?Logout=1" title="log out"  style="color:#fff!important;"><span class="glyphicon glyphicon-log-out"  style="color:#fff!important;"></span> Logout</a>
            </li>
             </ul>
             <!--//End drop down-->
         </li>
        
         <li class="mega-drop-down"><a style="color:#fff!important;"><i class="fa fa-graduation-cap"></i>Courses</a>
             <div class="animated fadeIn mega-menu">
                 <div class="mega-menu-wrap">
                 <div class="row" style=" padding-top: 16px;">
                         <div class="col-md-12">
                             <ul class="stander">
                             <div class="col-md-3">
                             <i class="fa fa-medkit  fa-1x"></i> <a href="#">  {{$college->	course_offer}}</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i> <a href="#">Computer</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i> <a href="#">Watch</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i> <a href="#">laptop</a><span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i> <a href="#">Camera</a><span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i> <a href="#">I pad</a><span>Description of Women</span>
                                 </div>
                                 <div class="col-md-3">
                             <i class="fa fa-medkit  fa-1x"></i><a href="#">Mobile</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i><a href="#">Computer</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">Watch</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">laptop</a><span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">Camera</a><span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i><a href="#">I pad</a><span>Description of Women</span>
                                 </div>
                                 <div class="col-md-3">
                             <i class="fa fa-medkit  fa-1x"></i><a href="#">Mobile</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i><a href="#">Computer</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">Watch</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">laptop</a><span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">Camera</a><span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i><a href="#">I pad</a><span>Description of Women</span>
                                 </div>
                                 <div class="col-md-3">
                             <i class="fa fa-medkit  fa-1x"></i><a href="#">Mobile</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i><a href="#">Computer</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">Watch</a>
                                 <span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">laptop</a><span>Description of Women</span>
                                 <i class="fa fa-medkit fa-1x"></i><a href="#">Camera</a><span>Description of Women</span>
                                 <i class="fa fa-medkit  fa-1x"></i><a href="#">I pad</a><span>Description of Women</span>
                                 </div>
                             </ul>
                         </div>
                     
                     </div>
                 </div>	
             </div>
         </li>
         
         <!-- <li><a href="#"><i class="fa fa-cogs"></i> Services</a></li>
         <li><a href="#"><i class="fa fa-briefcase"></i> Portfolio</a></li>

         <li class="blog-drop-down"><a href="#"><i class="fa fa-bullhorn"></i> Blog</a>
             <div class="Blog animated fadeIn">
                 <div class="col-md-4">
                     <img class="img-responsive" src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg">
                     <div class="blog-des">
                 <h4 class="blog-title">Lorem ipsum dolor sit amet</h4>
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                         tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                         nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                         Duis autem vel eum iriure dolor in hendrerit in vulputate. </p>
                         <a class="view-more btn- btn-sm" href="#">Read More</a>
                     </div>
                     
                 </div>
                 <div class="col-md-4">
                     <img class="img-responsive" src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg">
                     <div class="blog-des">
                 <h4 class="blog-title">Lorem ipsum dolor sit amet</h4>
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                         tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                         nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                         Duis autem vel eum iriure dolor in hendrerit in vulputate. </p>
                         <a class="view-more btn- btn-sm" href="#">Read More</a>
                     </div>
                     
                 </div>
                 <div class="col-md-4">
                     <img class="img-responsive" src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg">
                     <div class="blog-des">
                     <h4 class="blog-title">Lorem ipsum dolor sit amet</h4>
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                         tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                         nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                         Duis autem vel eum iriure dolor in hendrerit in vulputate. </p>
                                 <a class="view-more btn- btn-sm" href="#">Read More</a>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <img class="img-responsive" src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg">
                     <div class="blog-des">
                     <h4 class="blog-title">Lorem ipsum dolor sit amet</h4>
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                         tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                         nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                         Duis autem vel eum iriure dolor in hendrerit in vulputate. </p>
                                 <a class="view-more btn- btn-sm" href="#">Read More</a>
                     </div>
                 </div>
                  
                 
             </div>
         </li>
         <li  class="images-drop-down"><a  href="#"><i class="fa fa-photo"></i> Images</a>
             <div class="Images animated fadeIn">
                 <div class="col-md-3">
                     <h4>Images Title </h4>
                     <img class="img-responsive" src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg">
                 </div>
                 <div class="col-md-3">
                 <h4>Images Title </h4>
                     <img class="img-responsive" src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg">
                 </div>
                 <div class="col-md-3">
                 <h4>Images Title </h4>
                     <img class="img-responsive" src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg">
                 </div>
                 <div class="col-md-3">
                 <h4>Images Title </h4>
                     <img class="img-responsive"  src="https://3.bp.blogspot.com/-hGrnZIjzL2k/VcLb47kyQKI/AAAAAAAAGCQ/J6Q2IAHIQvQ/s1600/image4.jpg">
                 </div>
                 
             </div>
         
         </li>
         <li><a href="#"><i class="fa fa-envelope"></i> Contact</a>
             <div class="contact">
         
             </div>
         </li>
         <a href="#" class="toggle-menu visible-xs-block">|||</a>		
 </ul>
   -->
  
  </div>
  


            <div class="">
                <div class="row">
				   <!--div class="col-md-4">
                        <center>
                            <img src="{{ asset('student/booth/images/au.png')}}" style="cursor: pointer; position: fixed;width: 15%;left: 43%;top: 55%;z-index: 99;" id="recruitment">
                        </center>
                    </div-->
                    <!-- <div class="col-md-4">
                        <center>
                            <img src="{{ asset('student/booth/images/support.jpg')}}" data-toggle="modal" data-target="#md1" data-theVideo="{{ asset('student/booth/video/Student-hall.mp4')}}" class="support">
                        </center>
                    </div> -->

                     <!-- <div id="walking-people" style="left: 183px;">
				
				<div id="walking-people-video" style="display: block;">
				<video id="walkingPeopleVideo" class="video-people" autoplay="" loop="" src="http://cdn-akamai.6connex.com//334/1418379397285_0.7706336518816249_origami_help_desk_01_001_crop.webm">
				</video>
				</div> -->
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
                        <i class="fa fa-times-circle-o fa-1x pull-right" data-dismiss="modal" aria-hidden="true" style="margin: -14px -13px 0 0;
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
                }, 5000);
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
        <script>
        $(function () {
 $('.toggle-menu').click(function(){
	$('.exo-menu').toggleClass('display');
	
 });
 
});
</script>
	

</body>
</html>