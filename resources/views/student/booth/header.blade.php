
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

                                                        {{-- <!--**block  1st---> --}}

                                                        <div class="content">
                                                            <div class="bg" id="BoothsAndThumbContainer-1">
                                                                {{-- <!--div class="person-1"></div-->
                                                                <!-- Progace bar start here--> --}}
                                                                <div class="find-job-bayt-logo">
                                                                    <div class="video">
                                                                        <a class="Top-Videos-List-Tv" href="javascript:;" id="TopBanner-Video-1"><img class="Top-Tv-Player" id="Top-Video-1" src="" style="width: 144px;height: 84px; float: right;"></a>
                                                                    </div>
                                                                </div>
                                                                <table id="MainBoothTable-1" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr id="BeforeBooths-1">
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-3718">
                                                                                <div onclick="showBooth('LargeViewWrapper-3718');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-3718" class="SmallBoothContainer booth-sm-even">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Partner Business Schools" href="javascript:;" onclick="showBooth('LargeViewWrapper-3718');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/622472077s-logo.png" alt="Partner Business Schools" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-3718" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-3718" class="demo-tip-darkgray" title="Partner Business Schools" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-3718" src="{{ asset('student/booth/images/0001.png')}}" alt="Partner Business Schools" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-3722">
                                                                                <div onclick="showBooth('LargeViewWrapper-3722');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-3722" class="SmallBoothContainer booth-sm-odd">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Hyatt " href="javascript:;" onclick="showBooth('LargeViewWrapper-3722');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/279764874s-logo.png" alt="Hyatt " style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-3722" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-3722" class="demo-tip-darkgray" title="Hyatt " href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-3722" src="{{ asset('student/booth/images/0002.png')}}" alt="Hyatt " style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                              
                                                            </div>
                                                        </div>
                                                        {{-- <!--**block  1st--->

                                                        <!--**block  2nd---> --}}
                                                         <div class="content">
                                                            <div class="bg" id="BoothsAndThumbContainer-2">
                                                                {{-- <!--div class="person-1"></div-->
                                                                <!-- Progace bar start here--> --}}
                                                                <div class="find-job-bayt-logo">
                                                                    <div class="video">
                                                                        <a class="Top-Videos-List-Tv" href="javascript:;" id="TopBanner-Video-2"><img class="Top-Tv-Player" id="Top-Video-2" src="" style="width: 144px;height: 84px; float: right;"></a>
                                                                    </div>
                                                                </div>
                                                                <table id="MainBoothTable-2" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr id="BeforeBooths-2">
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-3739">
                                                                                <div onclick="showBooth('LargeViewWrapper-3739');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-3739" class="SmallBoothContainer booth-sm-even">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Deutsche Bank" href="javascript:;" onclick="showBooth('LargeViewWrapper-3739');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/712743309s-logo.png" alt="Deutsche Bank" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-3739" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-3739" class="demo-tip-darkgray" title="Deutsche Bank" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-3739" src="{{ asset('student/booth/images/0003.png')}}" alt="Deutsche Bank" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4401">
                                                                                <div onclick="showBooth('LargeViewWrapper-4401');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4401" class="SmallBoothContainer booth-sm-odd">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="The Nielsen Company" href="javascript:;" onclick="showBooth('LargeViewWrapper-4401');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/127533190s-logo.png" alt="The Nielsen Company" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4401" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4401" class="demo-tip-darkgray" title="The Nielsen Company" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4401" src="{{ asset('student/booth/images/0004.png')}}"alt="The Nielsen Company" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                               
                                                            </div>
                                                        </div>

                                                        {{-- <!--//block  2nd--->

                                                        <!--**block  3rd---> --}}
                                                        <div class="content">
                                                            <div class="bg" id="BoothsAndThumbContainer-3">
                                                                {{-- <!--div class="person-1"></div-->
                                                                <!-- Progace bar start here--> --}}
                                                                <div class="find-job-bayt-logo">
                                                                    <div class="video">
                                                                        <a class="Top-Videos-List-Tv" href="javascript:;" id="TopBanner-Video-3"><img class="Top-Tv-Player" id="Top-Video-3" src="" style="width: 144px;height: 84px; float: right;"></a>
                                                                    </div>
                                                                </div>
                                                                <table id="MainBoothTable-3" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr id="BeforeBooths-3">
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4402">
                                                                                <div onclick="showBooth('LargeViewWrapper-4402');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4402" class="SmallBoothContainer booth-sm-even">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Hilti" href="javascript:;" onclick="showBooth('LargeViewWrapper-4402');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/610783431s-logo.png" alt="Hilti" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4402" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4402" class="demo-tip-darkgray" title="Hilti" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4402" src="{{ asset('student/booth/images/0005.png')}}" alt="Hilti" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4403">
                                                                                <div onclick="showBooth('LargeViewWrapper-4403');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4403" class="SmallBoothContainer booth-sm-odd">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="CMA CGM" href="javascript:;" onclick="showBooth('LargeViewWrapper-4403');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/611878726s-logo.png" alt="CMA CGM" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4403" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4403" class="demo-tip-darkgray" title="CMA CGM" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4403" src="{{ asset('student/booth/images/0006.png')}}" alt="CMA CGM" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                              
                                                            </div>
                                                        </div>
                                                        {{-- <!--**block  3rd--->

                                                        <!--**block  4th---> --}}
                                                        <div class="content">
                                                            <div class="bg" id="BoothsAndThumbContainer-4">
                                                                {{-- <!--div class="person-1"></div-->
                                                                <!-- Progace bar start here--> --}}
                                                                <div class="find-job-bayt-logo">
                                                                    <div class="video">
                                                                        <a class="Top-Videos-List-Tv" href="javascript:;" id="TopBanner-Video-4"><img class="Top-Tv-Player" id="Top-Video-4" src="" style="width: 144px;height: 84px; float: right;"></a>
                                                                    </div>
                                                                </div>
                                                                <table id="MainBoothTable-4" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr id="BeforeBooths-4">
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4404">
                                                                                <div onclick="showBooth('LargeViewWrapper-4404');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4404" class="SmallBoothContainer booth-sm-even">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Criteo" href="javascript:;" onclick="showBooth('LargeViewWrapper-4404');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/314940814s-logo.png" alt="Criteo" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4404" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4404" class="demo-tip-darkgray" title="Criteo" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4404" src="{{ asset('student/booth/images/0007.png')}}" alt="Criteo" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4405">
                                                                                <div onclick="showBooth('LargeViewWrapper-4405');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4405" class="SmallBoothContainer booth-sm-odd">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Aperam " href="javascript:;" onclick="showBooth('LargeViewWrapper-4405');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/1386305127s-logo.png" alt="Aperam " style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4405" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4405" class="demo-tip-darkgray" title="Aperam " href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4405" src="{{ asset('student/booth/images/0008.png')}}" alt="Aperam " style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                             
                                                            </div>
                                                        </div>
                                                        {{-- <!--**block  4th--->

                                                        <!--**block  5th---> --}}
                                                        <div class="content">
                                                            <div class="bg" id="BoothsAndThumbContainer-5">
                                                                {{-- <!--div class="person-1"></div-->
                                                                <!-- Progace bar start here--> --}}
                                                                <div class="find-job-bayt-logo">
                                                                    <div class="video">
                                                                        <a class="Top-Videos-List-Tv" href="javascript:;" id="TopBanner-Video-5"><img class="Top-Tv-Player" id="Top-Video-5" src="" style="width: 144px;height: 84px; float: right;"></a>
                                                                    </div>
                                                                </div>
                                                                <table id="MainBoothTable-5" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr id="BeforeBooths-5">
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4425">
                                                                                <div onclick="showBooth('LargeViewWrapper-4425');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4425" class="SmallBoothContainer booth-sm-even">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Vodafone" href="javascript:;" onclick="showBooth('LargeViewWrapper-4425');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/988778651s-logo.png" alt="Vodafone" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4425" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4425" class="demo-tip-darkgray" title="Vodafone" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4425" src="{{ asset('student/booth/images/0009.png')}}" alt="Vodafone" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4451">
                                                                                <div onclick="showBooth('LargeViewWrapper-4451');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4451" class="SmallBoothContainer booth-sm-odd">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="UTC" href="javascript:;" onclick="showBooth('LargeViewWrapper-4451');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/1147180525s-logo.png" alt="UTC" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4451" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4451" class="demo-tip-darkgray" title="UTC" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4451" src="{{ asset('student/booth/images/0010.png')}}" alt="UTC" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                
                                                            </div>
                                                        </div>
                                                        {{-- <!--//block  5th--->
                                                        <!--**block  6th---> --}}
                                                        <div class="content">
                                                            <div class="bg" id="BoothsAndThumbContainer-9">
                                                                <!--div class="person-1"></div-->
                                                                <!-- Progace bar start here-->
                                                                <div class="find-job-bayt-logo">
                                                                    <div class="video">
                                                                        <a class="Top-Videos-List-Tv" href="javascript:;" id="TopBanner-Video-9"><img class="Top-Tv-Player" id="Top-Video-9" src="" style="width: 144px;height: 84px; float: right;"></a>
                                                                    </div>
                                                                </div>
                                                                <table id="MainBoothTable-9" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr id="BeforeBooths-9">
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4499">
                                                                                <div onclick="showBooth('LargeViewWrapper-4499');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4499" class="SmallBoothContainer booth-sm-even">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Logista" href="javascript:;" onclick="showBooth('LargeViewWrapper-4499');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/646527869s-logo.png" alt="Logista" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4499" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4499" class="demo-tip-darkgray" title="Logista" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4499" src="{{ asset('student/booth/images/0011.png')}}" alt="Logista" style="width: 300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                            <td align="center" class="leicester-booth" id="SmallBooth-TD-4503">
                                                                                <div onclick="showBooth('LargeViewWrapper-4503');" id="Small-Booth-Main-Div-Area-LargeViewWrapper-4503" class="SmallBoothContainer booth-sm-odd">
                                                                                    <div class="leicester-booth-top-logo">
                                                                                        <a class="demo-tip-darkgray" title="Bristol-Myers Squibb" href="javascript:;" onclick="showBooth('LargeViewWrapper-4503');">
                                                                                            <img src="http://vepimg.b8cdn.com/contents/European MBA Virtual Career Fair/logo/184648096s-logo.png" alt="Bristol-Myers Squibb" style="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-4503" style="display:none;"></div>
                                                                                    <a id="Small-Booth-Image-LargeViewWrapper-4503" class="demo-tip-darkgray" title="Bristol-Myers Squibb" href="javascript:;">
                                                                                        <img id="SmallBooth-LargeViewWrapper-4503" src="{{ asset('student/booth/images/0012.png')}}" alt="Bristol-Myers Squibb" style="width:300px; height:300px;">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                               
                                                        </div> 

                                                        {{-- <!--**block  6th end---> --}}

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
<div class="home-container" id="osponsor-section" style="border: 10px solid #fff;padding:12px;">
   <div class="left">
      <div class="company-index-top AshToolTip" title="Company Index">
         <h1 id="CompanyIndexHeading" style="text-align: left;">College Index</h1>
      </div>
      <div class="company-index-bot">
         <ul class="navlist" id="CompanyIndex">
            <a href="#" onclick="showBooth('LargeViewWrapper-4405');" style="text-decoration:none;">
               <li>Aperam </li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4503');" style="text-decoration:none;">
               <li>Bristol-Myers Squibb</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4403');" style="text-decoration:none;">
               <li>CMA CGM</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4476');" style="text-decoration:none;">
               <li>Cognizant </li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4404');" style="text-decoration:none;">
               <li>Criteo</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-3739');" style="text-decoration:none;">
               <li>Deutsche Bank</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4459');" style="text-decoration:none;">
               <li>GO Concept </li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4402');" style="text-decoration:none;">
               <li>Hilti</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-3722');" style="text-decoration:none;">
               <li>Hyatt </li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4499');" style="text-decoration:none;">
               <li>Logista</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4498');" style="text-decoration:none;">
               <li>Nestle</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-3718');" style="text-decoration:none;">
               <li>Partner Business Schools</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4497');" style="text-decoration:none;">
               <li>Royal Canin MARS</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4460');" style="text-decoration:none;">
               <li>Saham Group</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4401');" style="text-decoration:none;">
               <li>The Nielsen Company</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4451');" style="text-decoration:none;">
               <li>UTC</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4425');" style="text-decoration:none;">
               <li>Vodafone</li>
            </a>
            <a href="#" onclick="showBooth('LargeViewWrapper-4496');" style="text-decoration:none;">
               <li>Wavestone</li>
            </a>
         </ul>
      </div>
   </div>
   <a href="#">
      <div class="right" id="WidgetRightBox">
   <a href="javascript:;" onclick="launchChatWindow('Public Chat', 111);"></a></div>
   </a>
   <div id="WidgetMiddleBox" class="right" style="margin-right:10px;"><a href="javascript:;" onclick="showWebinarScreen();"><img src="http://vepimg.b8cdn.com//uploads/vjf/136-euromba/banner-1.png"></a></div>
   <div class="clear"></div>
</div>
</div>