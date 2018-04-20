
    <style class="vjs-styles-defaults">
        .video-js {
            width:300px;
            height:150px;
        }
        
        .vjs-fluid {
            padding-top:56.25%
        }
    </style>
    <style class="vjs-styles-dimensions">
        .people-vid-dimensions {
            width: 100px;
            height: 100px;
        }
        
        .people-vid-dimensions.vjs-fluid {
            padding-top:56.25%;
        }
    </style>
    <style class="vjs-styles-dimensions">
        .home-to-webinar-trans-dimensions {
            width: 100px;
            height: 100px;
        }
        
        .home-to-webinar-trans-dimensions.vjs-fluid {
            padding-top: 56.25%;
        }
    </style>
    <style class="vjs-styles-dimensions">
        .home-to-info-trans-dimensions {
            width: 100px;
            height: 100px;
        }
        
        .home-to-info-trans-dimensions.vjs-fluid {
            padding-top: 56.25%;
        }
    </style>
    <style class="vjs-styles-dimensions">
        .home-to-hall-trans-dimensions {
            width: 100px;
            height: 100px;
        }
        
        .home-to-hall-trans-dimensions.vjs-fluid {
            padding-top: 56.25%;
        }

        .mTSWrapper {
            position: relative;
            overflow: hidden;
            height: 521px;
            max-width: 100%;
            outline: none;
            direction: ltr;
            margin-top: -4%;
            background:url({{ asset('student/images/booth.jpg') }});
        }

        #clg-logo{
    height: 40px;
    width: 64px;
    margin-top: 44%;
    margin-left: -14%;
        }
         .colg-name
         {
    color: #fff;
    position: absolute;
    margin-left: 13%;
    margin-top: 18%;
    font-weight: 600;
    max-width: 78%;
    overflow: hidden;
    height: 20px;
         }   
         .city-name
         {
            position: absolute;
            margin-top: 73%;
    margin-left: 38%;
    font-weight: 600;
    color: #fff;
    overflow: hidden;
    height: 20px;
         }   
         .popover__title {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 24px;
  line-height: 36px;
  text-decoration: none;
  color: rgb(228, 68, 68);
  text-align: center;
  padding: 15px 0;
}

.popover__wrapper {
    position: relative;
    margin-top: 1.5rem;
    display: inline-block;
    /* margin-left: 38%; */
}
.popover__content {
    opacity: 0;
    visibility: hidden;
    position: absolute;
    left: -150px;
    transform: translate(0,10px);
    background-color: #fff;
    padding: 1.5rem;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
    width: auto;
    top:24%;
    border: 2px solid #585050d4;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.popover__wrapper:hover .popover__content {
    z-index: 10;
    opacity: 1;
    visibility: visible;
    transform: translate(377px,-13px);
    transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97);
}
.popover__message {
  text-align: center;
} 
.leicester-booth-top-logo {
    margin: 25px 55px;
    padding: 0px 0px 0px 0px;
    width: 90px;
    height: 1px;
    position: absolute;
}
.list_clg
{
    margin-bottom: 1px;
    font-size: 12px;
    line-height: 35px;
    font-family: tahoma;
    border: 2px solid #eee;
}
    </style>

    <link href="{{asset('student/booth/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link id="Style-Main" href="{{ asset('student/booth/css/style.css')}}" rel="stylesheet" type="text/css">
    <link id="Style-Banner-Gallery" href="{{ asset('student/booth/css/banner-gallery.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('student/booth/css/jquery.mThumbnailScroller.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('student/booth/css/global.css?v=1505985704')}}" media="screen">
	<link rel="shortcut icon" type="image/png" href="{{ asset('student/booth/images/favi.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('student/booth/css/vjf_136_inner.css?v=737333')}}">
    <title>Virtual Admission Fair|VAF</title>
    <script type="text/javascript" src="{{ asset('student/booth/js/jquery-1.7.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('student/booth/js/jquery.mThumbnailScroller.js?v=1505985704')}}"></script>
    <div id="BoothsLargeViewTemplate" style="display: none;">
        <div id="LargeViewWrapperTmp" style="display: none;" class="Main-Large-View-Booth-Class-Ash">
            <div class="body-container">
                <div class="view-booth-bg" style="background-image: url('{{ asset('student/booth/images/main_banner_bg.jpg')}});">
                    <div class="back-to-floor">
                        <a href="javascript:;" onclick="hideBooth('LargeViewWrapperTmp');">
                            <div class="BacktoTheFloor AshToolTip" id="BacktoTheFloorBtnText" style="width: 120px; font-size: 15px;" title="Back to Floor">Back to Floor</div>
                        </a>
                    </div>
                    <div class="booth-lg-view">
                        <div id="Booth-Banners-All-" class="booth-banners"></div>
                        <img class="AshToolTip" university-large-booth="" alt="UNIVERSITY-TITLE" title="UNIVERSITY-TITLE" border="0">
                    </div>
                </div>
                <div id="Prev-Next-Booth-Btns" class="bighrader-bot-bg" style="position: relative; display: block;">
                    <div class="pre-but">
                        <a href="javascript:;" id="Prev-Booth-Anchor" onclick="ShowPrevBooth('Prev-Booth-Id');">
                            <div class="PrevFloorBtn AshToolTip" id="PrevBoothBtnText">Previous</div>
                        </a>
                    </div>
                    <div class="mob-booth-menu all-buts-container">
                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <tbody>
                                <tr>
                                    <td align="center" valign="middle">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr id="large-Mob-Booths-Top-Menus-"></tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="all-buts-container">
                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <tbody>
                                <tr>
                                    <td align="center" valign="middle">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr id="Booths-Top-Menus-"></tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="next-but">
                        <a href="javascript:;" id="Next-Booth-Anchor" onclick="ShowNextBooth('Next-Booth-Id');">
                            <div class="NextFloorBtn AshToolTip" id="NextBoothBtnText" title="Next">Next</div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="home-container">
                <div class="left" style="border: 0px;">
                    <div id="tabs1" style="height: 231px; width: 628px;" class="TabsContainerForAllBooths ui-tabs ui-widget ui-widget-content ui-corner-all">
                        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">COMPANY</a></li>
                            <li id="Uni-Vid-Li-LargeViewWrapperTmp" class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">VIDEOS</a></li>
                            <li id="Uni-Docs-Li-LargeViewWrapperTmp" class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">DOCUMENTS</a></li>
                            <li id="Uni-Job-Li-LargeViewWrapperTmp" class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-4" aria-labelledby="ui-id-4" aria-selected="false"><a href="#tabs-4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">JOB VACANCIES</a></li>
                        </ul>
                        <div id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
                            <img university-logo="" alt="UNIVERSITY-TITLE" class="Booth-Tab-Comps-Logo AshToolTip" title="UNIVERSITY-TITLE" align="left" border="0" style="margin-right: 5px;">
                            <h1>UNIVERSITY-TITLE</h1>
                            <p id="Uni-Profile-Content"></p>
                        </div>
                        <div id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                            <div class="tab-video">
                                <ul id="Video-LargeBooth-Inside-"></ul>
                            </div>
                        </div>
                        <div id="tabs-3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                            <div class="tab-video">
                                <ul id="Document-LargeBooth-Inside-"></ul>
                            </div>
                        </div>
                        <div id="tabs-4" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                            <div class="tab-video" id="Jobs-LargeBooth-Inside-">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-online-container">
                    <div class="user-online-top AshToolTip" title="USERS ONLINE" style="text-align: left; direction: ltr;">USERS ONLINE</div>
                    <div class="user-online-bot">
                        <ul id="User-Online-Booth-Inside-" title="UNIVERSITY-TITLE"></ul>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- Booth Large View Template End -->

    <!--- Arabic Profile Html Template -->

    <style type="text/css">
        .hall-wrap #hallview {
            display: block
        }
    </style>

    <!-- body start here -->
    <div class="wrapper hall-wrap" style="">
        <!-- Home body start here -->
        <div class="body-wrapper">
            <div class="clearfix"></div>
            <div class="main-wrapper">
                <!-- Home container start here -->

                <div class="home-wrapper" style="z-index: 90;">

                    <div id="hallview" style="display: block;">
                        <div class="body-container">

                            <div class="bighrader-bg">
                                <div class="person-1"></div>
                                <div class="bighrader-left-arrow NavigateArrows" style="opacity: 0.5;">
                                    <a href="javascript:;"><img src="https://png.icons8.com/metro/1600/circled-left-2.png" alt="Left" title="Left" border="0"></a>
                                </div>
                                <div class="bighrader-right-arrow NavigateArrows" style="opacity: 0.5;">
                                    <a href="javascript:;"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Next_Arrow.svg/1024px-Next_Arrow.svg.png" alt="Right" title="Right" border="0"></a>
                                </div>
                                <div id="gallery_wrapper" class="banner_wrapper" style="visibility: visible; height: 438px; display: block;">
                                    <div id="banner_container2" class="banner_container mThumbnailScroller _mTS_1 mTS-hover-classic" style="height: 438px;">
                                        <div class="thumbScroller" style="height:438px;;">
                                            <div class="container" id="DynamicBoothsContainerParent" style="height:438px;;">
                                                <div id="mTS_1" class="mTSWrapper mTS_horizontal" style="overflow: inherit;">
                                                    <ul id="mTS_1_container" class="mTSContainer" style="position: relative; top: 0px; left: 0px; width: 4861px; overflow: inherit;">

                                                        @php $count=0;  $countj=1; @endphp
                                                        @php $totalCount = $college->count() @endphp
                                                        @foreach($college as $data)
                                                        @if($count %2 ==0 )
                                                        {{-- <!--**block  1st---> --}}
                                                        <div class="content">
                                                            <div class="bg" id="BoothsAndThumbContainer-1">
                                                                <table id="MainBoothTable-1" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr id="BeforeBooths-1">
                                                        @endif              
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-3718">
                                                                                {{-- <div onclick="showBooth('{{ url('student/singlebooth/'.$data->reg_id)}}');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-3718" class="SmallBoothContainer booth-sm-even">
                                                                                   
                                                                                    <div class="colg-name">{{ $data->college_name }}</div>
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="{{ $data->college_name }}" href="javascript:;" onclick="showBooth('{{ url('student/singlebooth/'.$data->reg_id)}}');">
                                                                                            <img src="{{ asset($data->college_img)}}" alt="{{ $data->college_name }}" id="clg-logo">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="city-name">{{ $data->college_city }}</div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-3718" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-3718" class="demo-tip-darkgray" title="{{ $data->college_name }}" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-3718" src="{{ asset($data->college_booth)}}" alt="{{ $data->college_name }}" style="width:280px; height:280px;">
                                                                                    </a>
                                                                                </div> --}}
                                                                           
                                                                                <div class="popover__wrapper" onclick="showBooth('{{ url('student/singlebooth/'.$data->reg_id)}}');">
                                                                                        <div class="colg-name">{{ $data->college_name }}</div>
                                                                                        <div class="city-name">{{ $data->college_city }}</div>
                                                                                        <div class="leicester-booth-top-logo">
                                                                                                <a class="demo-tip-darkgray" title="{{ $data->college_name }}" href="javascript:;" onclick="showBooth('{{ url('student/singlebooth/'.$data->reg_id)}}');">
                                                                                                    <img src="{{ asset($data->college_img)}}" alt="{{ $data->college_name }}" id="clg-logo">
                                                                                                </a>
                                                                                            </div>
                                                                                        <a href="#">
                                                                                          <h2 class="popover__title"> <img id="SmallBooth-LargeViewWrapper-3718" src="{{ asset($data->college_booth)}}" alt="{{ $data->college_name }}" style="width:245px; height:200px;">
                                                                                          </h2>
                                                                                        </a>
                                                                                        <div class="push popover__content">
                                                                                            <p class="list_clg">SJCITechnology</p>
                                                                                            <p class="list_clg">BGSITechnology</p>
                                                                                            <p class="list_clg">MVITechnology</p>
                                                                                            <p class="list_clg">RMVITechnology</p>
                                                                                            <p class="list_clg">VIATechnology</p>
                                                                                        </div>
                                                                                      </div>
                                                                                      
                                                                            </td>
                                                        @if($countj %2 ==0  ||  $count==$totalCount-1)
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!--block  1st-->
                                                        @endif
                                                        @php $count++;  $countj++; @endphp
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <!---**previous--> --}}
                            <div class="bighrader-bot-bg" style="display: none; position: relative;">
                                <div class="pre-but">
                                    <a href="javascript:;" id="LoadPrevFloor" getfloor="" style="display: none;">
                                        <div class="PrevFloorBtn AshToolTip" id="PrevFloorBtnText">Previous</div>
                                    </a>
                                </div>
                                <div class="next-but">
                                    <a href="javascript:;" id="LoadNextFloor" getfloor="" style="display: none;">
                                        <div class="NextFloorBtn AshToolTip" id="NextFloorBtnText" title="Next">Next</div>
                                    </a>
                                </div>
                            </div>
                            {{-- <!---//previous-->
                            <!-- Big here coles here --> --}}
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="cinema" style="display: none">
                        <div class="view-webinars">
                            <a href="javascript:;" onclick="showWebinars()"><img src="//vepimg.b8cdn.com/uploads/vjf/136-euromba/auditorium.jpg"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<div class="home-container" id="osponsor-section" style="border:4px solid #fff;padding:12px;">
   <div class="left">
      <div class="company-index-top AshToolTip" title="Company Index">
         <h1 id="CompanyIndexHeading" style="text-align: left;">College Index</h1>
      </div>
      <div class="company-index-bot">
         <ul class="navlist" id="CompanyIndex">
             @foreach ($college as $data)
             <li><a href="{{ url('student/singlebooth/'.$data->reg_id.'')}}" style="text-decoration:none;"> {{ $data->college_name }} </a></li>
                
             @endforeach
             
           
         </ul>
      </div>
   </div>
   <a href="#">
      <div class="right" id="WidgetRightBox">
    <a href="#">  <iframe class="video-size" src="https://www.youtube.com/embed/KNChk5o8Fhg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></a></div>
   </a>
   <div id="WidgetMiddleBox" class="right" style="margin-right:10px;"><a href="#"><img src="{{ asset('student/images/3.jpg')}}"  style="height:180px;
    width:100%;/*maintain aspect ratio*/
    max-width:392px;"></a></div>
   <div class="clear"></div>
</div>
</div>