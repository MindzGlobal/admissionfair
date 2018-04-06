<div id="BoothsLargeViewTemplate" style="display: none;">
        <div id="LargeViewWrapperTmp" style="display: none;" class="Main-Large-View-Booth-Class-Ash">
            <div class="body-container">
                <div class="view-booth-bg" style="background-image: url('images/main_banner_bg.jpg');">
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
                                <div class="bighrader-left-arrow NavigateArrows" style="opacity: 0.3;">
                                    <a href="javascript:;"><img src="http://vepimg.b8cdn.com/test-drive/images/bighrader-left-arrow.png" alt="Left" title="Left" border="0"></a>
                                </div>
                                <div class="bighrader-right-arrow NavigateArrows" style="opacity: 0.3;">
                                    <a href="javascript:;"><img src="http://vepimg.b8cdn.com/test-drive/images/bighrader-right-arrow.png" alt="Right" title="Right" border="0"></a>
                                </div>
                                
                                <div id="gallery_wrapper" class="banner_wrapper" style="visibility: visible; height: 438px; display: block;">
                                    <div id="banner_container2" class="banner_container mThumbnailScroller _mTS_1 mTS-hover-classic" style="height: 438px;">
                                        <div class="thumbScroller" style="height:438px;;">
                                            <div class="container" id="DynamicBoothsContainerParent" style="height:438px;;">
                                                <div id="mTS_1" class="mTSWrapper mTS_horizontal" style="overflow: inherit;">
                                                    <ul id="mTS_1_container" class="mTSContainer" style="position: relative; top: 0px; left: 0px; width: 4861px; overflow: inherit;"> 
                                                        <?php
                                                            
                                                            $count = 0; $count_j=1; 
                                                            foreach($allBooths as $value)
                                                            {
                                                                $booth = "https://jobmindz.com/images/booth_images/1.png";
                                                                $compImg = "https://www.jobmindz.com/images/office.png";
                                                                if($value['company_booth'] != '') {
                                                                    $booth = $value['company_booth'];    
                                                                }
                                                                if($value['company_img'] != ''){ 
                                                                    $compImg = $base_data.$value['company_img'];
                                                                }
                                                              if($count %2 ==0 ) {  
                                                            ?>   
                                                                <!--**block  1st--->
                                                                <div class="content">
                                                                    <div class="bg" id="BoothsAndThumbContainer-1">
                                                                        <div class="person-1"></div>
                                                                         <!--Progace bar start here-->
                                                                        <div class="find-job-bayt-logo">
                                                                            <div class="video">
                                                                                <a class="Top-Videos-List-Tv" href="javascript:;" id="TopBanner-Video-1"><img class="Top-Tv-Player" id="Top-Video-1" src="" style="width: 144px;height: 84px; float: right;"></a>
                                                                            </div>
                                                                        </div>
                                                                        <table id="MainBoothTable-1" cellpadding="0" cellspacing="0" border="0">
                                                                            <tbody>
                                                                                <tr id="BeforeBooths-1">
                                                            <?php } ?>                        
                                                                                    <td align="center" class="leicester-booth" id="SmallBooth-TD-3718">
                                                                                        <div><h4 onClick="view('<?php echo $base.'job-fair/sbooth/'.$funObj->en_de('en',$value['rec_uniqueid']); ?>/')" style="cursor:pointer;width:200px;padding:10px;background:#323232;color:#fff;margin:5px"><?php echo ucwords(strtolower($value['employer_name'])); ?></h4></div>
                                                                                        <div id="Small-Booth-Main-Div-Area-LargeViewWrapper-3718" class="SmallBoothContainer booth-sm-even">
                                                                                            <div id="Small-Booth-Banners-Parent-Div-LargeViewWrapper-3718" style="display:none;"></div>
                                                                                            <a onClick="view('<?php echo $base.'job-fair/sbooth/'.$funObj->en_de('en',$value['rec_uniqueid']); ?>/')"  id="Small-Booth-Image-LargeViewWrapper-3718" class="demo-tip-darkgray" title="<?php echo $value['employer_name']; ?>" >
                                                                                                <img id="SmallBooth-LargeViewWrapper-3718" src="<?php echo $booth; ?>" alt="<?php echo $value['employer_name']; ?>" style="width: 230px; height: 113px;">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="thumbs">
                                                                                            <div class="logo-container">
                                                                                                <a onClick="view('<?php echo $base.'job-fair/sbooth/'.$funObj->en_de('en',$value['rec_uniqueid']); ?>/')"  class="demo-tip-darkgray" title="Bristol-Myers Squibb" onclick="showBooth('LargeViewWrapper-4503')" href="javascript:;">
                                                                                                    <img class="Railing-Banners-Ashfaq" data="ashfaq" src="<?php echo $compImg; ?>" alt="Logo">
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                        <?php if($count_j %2 ==0 ) { ?>                            
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                                <!--**block  1st--->
                                                        <?php $count++; $count_j++; } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Big here coles here -->
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
