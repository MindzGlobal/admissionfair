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
     <style type="text/css">
        .hall-wrap #hallview {
            display: block
        }
    </style>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        
        .first {
            background-image: url('images/bg.jpg');
            background-position: initial;
            position: absolute;
            /* min-height: 100%; */
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
        }
        
        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -64;
            transform: translateX(-50%) translateY(-50%);
            transition: 1s opacity;
        }
        
        .b {
            position: relative;
            top: 245px;
            color: #fff;
        }
        
        .ba {
            position: relative;
            top: 100px;
            color: #fff;
        }
        
        .third {
            background-image: url(images/help.jpg);
            background-position: initial;
            position: absolute;
            /* min-height: 100%; */
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
        }
        
        .fourth {
            background-image: url('images/auditourium1.jpg');
            background-position: initial;
            position: absolute;
            /* min-height: 100%; */
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
        }
        
        @media screen and (max-width: 500px) {
            div {
                width: 70%;
            }
        }
        
        @media screen and (max-device-width:800px) {
            #recruitment {
                margin-left: 239%;
                margin-top: -34px;
            }
            #talktous {
                margin-right: -258%;
                margin-top: -81px;
            }
        }
        
        img {
            width: 100%;
            height: auto;
        }
        
        ul {
            list-style-type: none;
        }
        
        a {
            color: #b63b4d;
            text-decoration: none;
        }
        /** =======================
 * Contenedor Principal
 ===========================*/
        
        h1 {
            color: #FFF;
            font-size: 24px;
            font-weight: 400;
            text-align: center;
            margin-top: 80px;
        }
        
        h1 a {
            color: #c12c42;
            font-size: 16px;
        }
        
        .accordion {
            width: 100%;
            max-width: 541px;
            margin: 7px auto 3px;
            background: #FFF;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        
        .accordion .link {
            cursor: pointer;
            display: block;
            padding: 15px 15px 15px 42px;
            color: #4D4D4D;
            font-size: 14px;
            font-weight: 700;
            border-bottom: 1px solid #CCC;
            position: relative;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        
        .accordion li:last-child .link {
            border-bottom: 0;
        }
        
        .accordion li i {
            position: absolute;
            top: 16px;
            left: 12px;
            font-size: 18px;
            color: #595959;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        
        .accordion li i.fa-chevron-down {
            right: 12px;
            left: auto;
            font-size: 16px;
        }
        
        .accordion li.open .link {
            color: #b63b4d;
        }
        
        .accordion li.open i {
            color: #b63b4d;
        }
        
        .accordion li.open i.fa-chevron-down {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        
        .accordion li.default .submenu {
            display: block;
        }
        /**
 * Submenu
 -----------------------------*/
        
        .submenu {
            display: none;
            background: rgba(0, 0, 0, 0.65);
            font-size: 14px;
        }
        
        .submenu li {
            border-bottom: 1px solid #4b4a5e;
        }
        
        .submenu a {
            display: block;
            text-decoration: none;
            color: #d9d9d9;
            padding: 12px;
            padding-left: 42px;
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }
        
        .submenu a:hover {
            background: #b63b4d;
            color: #FFF;
        }
        
        .swingimage {
            position: relative;
            width: 30%;
            height: 11%;
            left: 50px;
            margin-top: 49%;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            -webkit-animation: swinging 3.5s ease-in-out forwards infinite;
            animation: swinging 3.5s ease-in-out forwards infinite;
        }
        
        @-webkit-keyframes swinging {
            0% {
                -webkit-transform: rotate(6deg);
            }
            50% {
                -webkit-transform: rotate(-3deg)
            }
            100% {
                -webkit-transform: rotate(6deg);
            }
        }
        
        @media screen and (max-device-width:800px) {
            .swingimage {
                position: relative;
                width: 30%!important;
                height: 11%!important;
                left: 72px;
            }
            #Backtosecond {
                position: relative;
                top: 3px!important;
                width: 25%!important;
            }
            #acc {
                width: 143%!important;
            }
            #md1 {
                width: 142%;
            }
            #md11 {
                width: 137%;
            }
        }
        
        #ig {
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -114px 0 0 -26px;
            cursor: pointer;
        }
    </style>