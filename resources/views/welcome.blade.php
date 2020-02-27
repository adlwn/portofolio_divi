<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.ico') }}">
    <title>Divianis Oktaviyani</title>

    <!-- Global stylesheets -->
    <link href="{{ URL::asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css"
          rel="stylesheet">
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/devicons/css/devicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/floating-wpp.min.css') }}" rel="stylesheet">
</head>

<style type="text/css">

    .dot {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background-color: #000;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .dot-3 {
        background-color: #2196f3;
        animation: dot-3-move 2s ease infinite, index 1s -4s ease infinite;
    }

    .dot-2 {
        background-color: #28a745;
        animation: dot-2-move 2s ease infinite, index 1s -4s ease infinite;
    }

    .dot-1 {
        background-color: #ffc107;
        animation: dot-1-move 2s ease infinite, index 1s -4s ease infinite;
    }

    @keyframes dot-3-move {
        20% {transform: scale(1)}
        45% {transform: translateY(-18px) scale(.45)}
        60% {transform: translateY(-90px) scale(.45)}
        80% {transform: translateY(-90px) scale(.45)}
        100% {transform: translateY(0px) scale(1)}
    }

    @keyframes dot-2-move {
        20% {transform: scale(1)}
        45% {transform: translate(-16px, 12px) scale(.45)}
        60% {transform: translate(-80px, 60px) scale(.45)}
        80% {transform: translate(-80px, 60px) scale(.45)}
        100% {transform: translateY(0px) scale(1)}
    }

    @keyframes dot-1-move {
        20% {transform: scale(1)}
        45% {transform: translate(16px, 12px) scale(.45)}
        60% {transform: translate(80px, 60px) scale(.45)}
        80% {transform: translate(80px, 60px) scale(.45)}
        100% {transform: translateY(0px) scale(1)}
    }

    @keyframes rotate-move {
        55% {transform: translate(-50%, -50%) rotate(0deg)}
        80% {transform: translate(-50%, -50%) rotate(360deg)}
        100% {transform: translate(-50%, -50%) rotate(360deg)}
    }

    @keyframes index {
        0%, 100% {z-index: 3}
        33.3% {z-index: 2}
        66.6% {z-index: 1}
    }

    *{margin:0;}

    #overlay {
        position: fixed;
        z-index: 99999;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.9);
        transition: 4s 0.2s;
    }

    * {cursor: url(http://cur.cursors-4u.net/cursors/cur-8/cur727.png), auto !important;
    }

    ::-webkit-scrollbar {
        width: 20px;
        height: 20px;
    }
    ::-webkit-scrollbar-track {
         background: #2196f3;
         box-shadow: 2px 2px 2px 2px #000000;
     }
    ::-webkit-scrollbar-thumb {
         border-radius: 10px;
         background: #2196f3;
         box-shadow: inset 0 0 2px 2px #ffffff;
     }
    ::-webkit-scrollbar-thumb:hover {
         background: black;
     }

    .wrapper_tag {
        position: relative;
        perspective: 40em;
        display: grid;
        padding: 4px;
        transform-style: preserve-3d;
        border-radius: 8px;
    }

    .card_tag {
        grid-area: 1 / 1;
        height: 150px; /*180px*/
        width: 98%; /*600px*/
        transform: translateX(10px) rotateY(25deg) rotateX(10deg);
        background: rgba(33, 150, 243, 0.9);
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 20px;
        color: #FFFFFF;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 900;
        backface-visibility: hidden;
        box-shadow: 0 10px 30px -3px rgba(0,0,0,.1);
        border-radius: 8px;
    }

    .card_tag .enclosed {
        background: #000;
        line-height: 2;
        color: rgba(255, 255, 255, 1);
        padding: 0 5px;
        /*display: inline-block;*/
        transform: translate(-1px, 1px) scale(0.75);
        transform-origin: right center;
        border-radius: 8px;
    }

    .wrapper_tag:before {
        --bw: 9px;
        grid-area: 1 / 1;
        content: '';
        backface-visibility: hidden;
        height: 100%;
        width: 98%;
        margin-top: calc(-1 * var(--bw));
        margin-left: calc(-1 * var(--bw));
        background: transparent;
        transform: translateX(-60px) rotateY(-30deg) rotateX(15deg) scale(1.03);
        pointer-events: none;
        border: var(--bw) solid #FFFFFF;
        box-sizing: content-box;
        border-radius: 8px;
    }


    .wrapper_tag:hover > div,
    .wrapper_tag:hover:before {
        transform: none;
    }


    .wrapper_tag > div,
    .wrapper_tag:before {
        will-change: transform;
        transition: .3s transform cubic-bezier(.25,.46,.45,1);
    }

    .skillbar {
        position:relative;
        display:block;
        margin-bottom:15px;
        width:100%;
        background:#eee;
        height:35px;
        border-radius:3px;
        transition:0.1s linear;
        transition-property:width, background-color;
    }
    .skillbar-title {
        position:absolute;
        top:0;
        left:0;
        width:220px;
        font-weight:bold;
        font-size:13px;
        color:#ffffff;
        background:#6adcfa;
        border-top-left-radius:3px;
        border-bottom-left-radius:3px;
    }
    .skillbar-title span {
        display:block;
        background:rgba(0, 0, 0, 0.1);
        padding:0 20px;
        height:35px;
        line-height:35px;
        border-top-left-radius:3px;
        border-bottom-left-radius:3px;
    }
    .skillbar-bar {
        height:35px;
        width:0px;
        background:#6adcfa;
        border-radius:3px;
    }
    .skill-bar-percent {
        position:absolute;
        right:10px;
        top:0;
        font-size:11px;
        height:35px;
        line-height:35px;
        color:#ffffff;
        color:rgba(0, 0, 0, 0.4);
    }

    .svg-inline--fa.fa-stack-2x {
        width: auto;
        height: auto;
    }

    .ml14 {
        font-weight: 700;
        font-size: 120px;
        text-shadow:
            -4px -4px 0 #fff,
            4px -4px 0 #fff,
            -4px 4px 0 #fff,
            4px 4px 0 #fff;
    }

    .ml14 .text-wrapper {
        position: relative;
        display: inline-block;
        padding-top: 0.1em;
        padding-right: 0.05em;
        padding-bottom: 0.15em;
    }

    .ml14 .line {
        opacity: 0;
        position: absolute;
        left: 0;
        height: 10px;
        width: 100%;
        background-color: white;
        transform-origin: 100% 100%;
        bottom: 0;
        margin-bottom: 8px;
        border-radius: 4px;
    }

    .ml14 .letter {
        display: inline-block;
        line-height: 0.6em;
    }

    .fa-python {
        color: #4AB3F4;
    }

    .fa-java {
        color: #4AB3F4;
    }

    .fa-php {
        color: #4AB3F4;
    }

    .fa-laravel {
        color: #4AB3F4;
    }

    .fa-angular {
        color: #4AB3F4;
    }

    .fa-react {
        color: #4AB3F4;
    }

    .fa-vuejs {
        color: #4AB3F4;
    }

    .fa-node-js {
        color: #4AB3F4;
    }

    .fa-html5 {
        color: #4AB3F4;
    }

    .fa-css3-alt {
        color: #4AB3F4;
    }

    .fa-database {
        color: #4AB3F4;
    }

    .fa-code {
        color: #4AB3F4;
    }

    .fa-map-marker-alt {
        color: #4AB3F4;
    }

    .fa-phone-alt {
        color: #4AB3F4;
    }

    .fa-envelope {
        color: #4AB3F4;
    }
    .google-maps {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 650px !important;
        height: 600px !important;
    }
</style>

<body id="page-top">

<div id="overlay">
    <div class="container" style="
    animation: rotate-move 2s ease-in-out infinite;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">
        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
            </filter>
        </defs>
    </svg>

</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none mx-0 px-0"><img src="{{ URL::asset('assets/img/logo-white.png') }}" alt="" class="img-fluid"></span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ URL::asset('assets/img/profile.jpg') }}" alt=""></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#abouts"><strong>About</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#experiences"><strong>Experience</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#interests"><strong>Interest</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolios"><strong>Portfolio</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#skills"><strong>Primary Skill</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#oskills"><strong>Other Skill</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#educations"><strong>Education</strong></a>
            </li>

            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link js-scroll-trigger" href="#maps">Navigation</a>--}}
            {{--            </li>--}}

        </ul>
    </div>
</nav>

<div class="container-fluid p-0">

    <!--====================================================
                        ABOUTS
    ======================================================-->
    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="abouts">
        <div class="my-auto">

            <ul class="list-inline list-social-icons">
                <li class="list-inline-item" style="margin-right: 7px">
                    <a href="https://facebook.com/divianisok">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook fa-stack-1x fa-inverse fa-spin"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item" style="margin-right: 7px">
                    <a href="https://www.instagram.com/divianisok">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse fa-spin"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item" style="margin-right: 7px">
                    <a href="https://www.linkedin.com/in/divianis-oktaviyani-59855119b">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin fa-stack-1x fa-inverse fa-spin"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item" style="margin-right: 7px">
                    <a href="https://github.com/divianis">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-github fa-stack-1x fa-inverse fa-spin"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item" style="margin-right: 7px">
                    <a href="https://gitlab.com/divianis">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-gitlab fa-stack-1x fa-inverse fa-spin"></i>
                        </span>
                    </a>
                </li>
            </ul>

            <h5 class="ml14">
                <span class="text-wrapper">
                    <span class="letters" style="color:#2196F3">DIVIANIS</span>
                    <span class="line"></span>
                </span>
            </h5>

            <div class="subheading mb-5" style="color: black">
                <strong>DON'T LET ONE MISTAKE RUIN A
                <font color="white">BEAUTIFUL THINGS</font>
                </strong>
            </div>

            <div class="wrapper_tag">
                <div class="card_tag">
                    <p class="mt-3">
                        <span class="enclosed">PLACE OF BIRTH</span><font size="2px"> : Kediri City, East Java<br></font>
                        <span class="enclosed">DATE OF BIRTH</span><font size="2px"> : 5<sup>th</sup> August 1999<br></font>
                        <span class="enclosed">LANGUAGE</span><font size="2px"> : Indonesian & English<br></font>
                        <span class="enclosed">GENDER</span><font size="2px"> : Male<br></font>
                        <span class="enclosed">FREELANCE</span><font size="2px"> : Available<br></font>
                    </p>
                </div>
            </div>

    </div>
</section>

<!--====================================================
                    EXPERIENCES
======================================================-->
<section class="resume-section p-3 p-lg-5 " id="experiences">
    <div class="row my-auto">
        <div class="col-12">
            <h2 class="text-center">Experiences</h2>
            <div class="mb-5 heading-border"></div>
        </div>
        <div class="resume-item col-md-12 col-sm-12 ">
            <div class="card mx-0 p-4 mb-5"
                 style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                <div class=" resume-content mr-auto">
                    <h4 class="mb-3"><i class="fas fa-warehouse mr-3 text-info"></i> PT. Erporate Solusi Global</h4>
                    <p align="justify">Being front-end web developer intern using Laravel framework to fixing sidebar content, improve select2, and datatable converting from clint-side to server-side in career dashboard PT. Erporate Solusi Global, Sleman, Depok, Yogyakarta.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">6th January 2020 - 28th February 2020</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====================================================
                    INTERESTS
======================================================-->
<section class="resume-section p-3 p-lg-5 " id="interests">
    <div class="row my-auto">
        <div class="col-12">
            <h2 class="text-center">Interests</h2>
            <div class="mb-5 heading-border"></div>
        </div>
        <div class="resume-item col-md-6 col-sm-12 ">
            <div class="card mx-0 p-4 mb-5"
                 style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                <div class=" resume-content mr-auto">
                    <h4 class="mb-3"><i class="fas fa-laptop-code mr-3 text-info"></i> Front-End Web Developer</h4>
                    <p align="justify">Not very good at Javascript, but understand about CSS3 and HTML5. Not interested in build some templates from the beginning. In progress to learning about Javascript with many references. From now, I'm looking for a projects as a front-end web developer.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">January 2019 - Now</span>
                </div>
            </div>
        </div>
        <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5"
                 style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                <div class="resume-content mr-auto">
                    <h4 class="mb-3"><i class="fa fa-laptop mr-3 text-warning"></i> Back-End Web Developer</h4>
                    <p align="justify">Still new as a back-end web developer, I'm using Laravel Framework with PHP programming language. Already knew a few about REST API and decide to try build at least one this year. For futher, I'm looking for a CMS projects.
                    </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">January 2020 - Now</span>
                </div>
            </div>
        </div>
        <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5"
                 style="border-color: #28a745; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                <div class="resume-content mr-auto">
                    <h4 class="mb-3"><i class="fas fa-mobile-alt mr-3 text-success"></i> Android Apps Developer</h4>
                    <p align="justify">
                        Interested for using Java programming language inside Android Studio, I'm still in progress to learning native Android development until now. For futher, I'll try to build some simple apps first before taking on large projects.
                    </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2019 - Now</span>
                </div>
            </div>
        </div>
        <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5"
                 style="border-color: #2196f3; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                <div class="resume-content mr-auto">
                    <h4 class="mb-3"><i class="fas fa-mobile-alt mr-3 text-primary"></i> Cross-Platform Apps Developer</h4>
                    <p align="justify">
                        As cross-platform apps developer, I'm using Dart programming language with Flutter plugin inside Android Studio to build apps. For further, I'm still learning React Native as a popular programming language on this decade.
                    </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">December 2018 - Now</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====================================================
                    PORTFOLIOS
======================================================-->
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolios">
    <div class="row my-auto">
        <div class="col-12">
            <h2 class="text-center">Portfolios</h2>
            <div class="mb-5 heading-border"></div>
        </div>
        <div class="col-md-12">
            <div class="port-head-cont">
                <button class="btn btn-general btn-green filter-b" data-filter="all">All</button>
                <button class="btn btn-general btn-green filter-b" data-filter="web">Web Projects</button>
                <button class="btn btn-general btn-green filter-b" data-filter="android">Android Projects</button>
                <button class="btn btn-general btn-green filter-b" data-filter="cross-platform">Cross-Platform Projects</button>
                <button class="btn btn-general btn-green filter-b" data-filter="datascience">Data Science Projects</button>
            </div>
        </div>
    </div>
    <div class="row my-auto">
        <div class="col-sm-4 portfolios-item filter web">
            <a class="portfolios-link" href="#portfolioModal1" data-toggle="modal">
                <div class="caption-port">
                    <div class="caption-port-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{ URL::asset('assets/img/portfolio/Web - Adelwine.png') }}" alt="">
            </a>
        </div>
        <div class="col-sm-4 portfolios-item filter android">
            <a class="portfolios-link" href="#portfolioModal2" data-toggle="modal">
                <div class="caption-port">
                    <div class="caption-port-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{ URL::asset('assets/img/portfolio/Android - Tebak Hewan.png') }}" alt="">
            </a>
        </div>
        <div class="col-sm-4 portfolios-item filter cross-platform">
            <a class="portfolios-link" href="#portfolioModal3" data-toggle="modal">
                <div class="caption-port">
                    <div class="caption-port-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{ URL::asset('assets/img/portfolio/Flutter - BMI.png') }}" alt="">
            </a>
        </div>
        <div class="col-sm-4 portfolios-item filter datascience">
            <a class="portfolios-link" href="#portfolioModal4" data-toggle="modal">
                <div class="caption-port">
                    <div class="caption-port-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{ URL::asset('assets/img/portfolio/Data Science - Budget vs. Revenue.png') }}" alt="">
            </a>
        </div>

    </div>
</section>

<!--====================================================
                    SKILLS
======================================================-->
<section class=" d-flex flex-column" id="skills">
    <div class="p-lg-5 p-3 skills-cover">
        <div class="col-12">
            <h2 class="text-center" style="color: white">Primary Skills</h2>
            <div class="mb-5 heading-border"></div>
        </div>
        <div class="row text-center my-auto ">
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-java fa-5x"></i>
                    <h2><span class="counter"> 60 </span><span>%</span></h2>
                    <p>JAVA</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-python fa-5x"></i>
                    <h2><span class="counter"> 65 </span><span>%</span></h2>
                    <p>PYTHON</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-php fa-5x"></i>
                    <h2><span class="counter"> 80 </span><span>%</span></h2>
                    <p>PHP</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-laravel fa-5x"></i>
                    <h2><span class="counter"> 60 </span><span>%</span></h2>
                    <p>LARAVEL</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-angular fa-5x"></i>
                    <h2><span class="counter"> 40 </span><span>%</span></h2>
                    <p>ANGULAR JS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-react fa-5x"></i>
                    <h2><span class="counter"> 45 </span><span>%</span></h2>
                    <p>REACT JS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-vuejs fa-5x"></i>
                    <h2><span class="counter"> 50 </span><span>%</span></h2>
                    <p>VUE JS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-node-js fa-5x"></i>
                    <h2><span class="counter"> 30 </span><span>%</span></h2>
                    <p>NODE JS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-html5 fa-5x"></i>
                    <h2><span class="counter"> 70 </span><span>%</span></h2>
                    <p>HTML</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fab fa-css3-alt fa-5x"></i>
                    <h2><span class="counter"> 65 </span><span>%</span></h2>
                    <p>CSS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fas fa-database fa-5x"></i>
                    <h2><span class="counter"> 70 </span><span>%</span></h2>
                    <p>SQL</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skills-item">
                    <i class="fas fa-code fa-5x"></i>
                    <h2><span class="counter"> 75 </span><span>%</span></h2>
                    <p>DART</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====================================================
                      OTHER SKILLS
======================================================-->
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="oskills">
    <div class="row my-auto">
        <div class="col-12">
            <h2 class="text-center">Other Skills</h2>
            <div class="mb-5 heading-border"></div>
        </div>
        <div class="skillbar clearfix" data-percent="80%" style="margin-bottom: 30px">
            <div class="skillbar-title" style="background: #0d47a1; text-align: center;"><span>MICROSOFT WORD</span></div>
            <div class="skillbar-bar" style="background: #1976d2;"></div>
            <div class="skill-bar-percent" style="color: black">80%</div>
        </div>

        <div class="skillbar clearfix " data-percent="70%" style="margin-bottom: 30px">
            <div class="skillbar-title" style="background: #27ae60; text-align: center;"><span>MICROSOFT EXCEL</span></div>
            <div class="skillbar-bar" style="background: #2ecc71;"></div>
            <div class="skill-bar-percent" style="color: black">70%</div>
        </div>

        <div class="skillbar clearfix " data-percent="70%" style="margin-bottom: 30px">
            <div class="skillbar-title" style="background: #d35400; text-align: center;"><span>MICROSOFT POWER POINT</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
            <div class="skill-bar-percent" style="color: black">70%</div>
        </div>

        <div class="skillbar clearfix " data-percent="75%" style="margin-bottom: 30px">
            <div class="skillbar-title" style="background: #1e88e5; text-align: center;"><span>ADOBE PHOTOSHOP</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent" style="color: black">75%</div>
        </div>

        <div class="skillbar clearfix " data-percent="55%" style="margin-bottom: 30px">
            <div class="skillbar-title" style="background: #76ff03; text-align: center;"><span>COREL DRAW</span></div>
            <div class="skillbar-bar" style="background: #b2ff59;"></div>
            <div class="skill-bar-percent" style="color: black">55%</div>
        </div>

        <div class="skillbar clearfix " data-percent="50%" style="margin-bottom: 30px">
            <div class="skillbar-title" style="background: #d32f2f; text-align: center;"><span>FIGMA</span></div>
            <div class="skillbar-bar" style="background: #ef5350;"></div>
            <div class="skill-bar-percent" style="color: black">50%</div>
        </div>

        <div class="skillbar clearfix " data-percent="60%" style="margin-bottom: 30px">
            <div class="skillbar-title" style="background: #4e342e; text-align: center;"><span>10 FINGER TYPING</span></div>
            <div class="skillbar-bar" style="background: #795548;"></div>
            <div class="skill-bar-percent" style="color: black">60%</div>
        </div>
    </div>
</section>

<!--====================================================
                       EDUCATIONS
======================================================-->
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="educations">
    <div class="row my-auto">
        <div class="col-12">
            <h2 class="text-center">Educations</h2>
            <div class="mb-5 heading-border"></div>
        </div>
        <div class="main-educations" id="educations-box">

            {{--                <div class="educations">--}}
            {{--                    <div class="educations-icon"></div>--}}
            {{--                    <div class="educations-content">--}}
            {{--                        <span class="date">2004 - 2006</span>--}}
            {{--                        <h5 class="title">TK PKK DIPONEGORO</h5>--}}
            {{--                        <p class="description">--}}
            {{--                            Has completed childhood education at kindergarten TK PKK DIPONEGORO.--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="educations">--}}
            {{--                    <div class="educations-icon"></div>--}}
            {{--                    <div class="educations-content">--}}
            {{--                        <span class="date">2006 - 2010</span>--}}
            {{--                        <h5 class="title">SDN SELODONO</h5>--}}
            {{--                        <p class="description">--}}
            {{--                            Has completed elementary education at SDN Selodono from 1st grade to 4th grade and then--}}
            {{--                            moved to a new school.--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="educations">--}}
            {{--                    <div class="educations-icon"></div>--}}
            {{--                    <div class="educations-content">--}}
            {{--                        <span class="date">2010 - 2011</span>--}}
            {{--                        <h5 class="title">SDN GOGORANTE</h5>--}}
            {{--                        <p class="description">--}}
            {{--                            Has completed elementary education at SDN Gogorante from 5th grade to 6th grade after moving--}}
            {{--                            from the old school.--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            <div class="educations">
                <div class="educations-icon"></div>
                <div class="educations-content">
                    <span class="date">2011 - 2014</span>
                    <h5 class="title">MTSN 5 KEDIRI</h5>
                    <p class="description">
                        Has completed junior high school education with superior classes at MTsN 5 Kediri.
                    </p>
                </div>
            </div>
            <div class="educations">
                <div class="educations-icon"></div>
                <div class="educations-content">
                    <span class="date">2014 - 2017</span>
                    <h5 class="title">SMAN 8 KEDIRI</h5>
                    <p class="description">
                        Have completed senior high school with majoring in (IPA) Natural Sciences at SMAN 8 Kediri.
                    </p>
                </div>
            </div>
            <div class="educations">
                <div class="educations-icon"></div>
                <div class="educations-content">
                    <span class="date">2017 - Now</span>
                    <h5 class="title">UNIVERSITAS DIPONEGORO</h5>
                    <p class="description">
                        Currently pursuing a Bachelor of Computer Engineering education which until now is in the
                        6th semester at Diponegoro University, Semarang.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{--    <!--====================================================--}}
{{--                          CONTACTS--}}
{{--    ======================================================-->--}}
{{--    <section class="resume-section p-3 p-lg-5 d-flex flex-column">--}}
{{--        <div class="row my-auto" id="contacts">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="contacts-cont">--}}
{{--                    <h3>CONTACT ME</h3>--}}
{{--                    <div class="heading-border-light"></div>--}}
{{--                    <p>Feel free to ask me some question or maybe sharing about coding stuff. I'd like to say thank you--}}
{{--                        since you scroll down this far. I love cats, but don't have one. I'm interested in coding,--}}
{{--                        design, and of course gaming. Everyday I spend about 2 hours to learning code (except--}}
{{--                        weekends).</p>--}}
{{--                </div>--}}
{{--                <div class="row con-form">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <input type="text" name="full-name" placeholder="Full Name" class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12">--}}
{{--                        <input type="text" name="email" placeholder="Email" class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12">--}}
{{--                        <input type="text" name="subject" placeholder="Subject" class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12"><textarea name="" id=""></textarea></div>--}}
{{--                    <div class="col-md-12 sub-but">--}}
{{--                        <button class="btn btn-general btn-white" role="button">Send</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-12 mt-5">--}}
{{--                <div class="contacts-cont2">--}}
{{--                    <div class="contact-add contact-box-desc">--}}
{{--                        <h3><i class="fas fa-map-marker-alt cl-atlantis fa-3x"></i> My Address</h3>--}}
{{--                        <p>Sukorejo Indah Residence (K-15)<br>--}}
{{--                            Kediri, East Java <br></p>--}}
{{--                    </div>--}}
{{--                    <div class="contact-phone contact-side-desc contact-box-desc">--}}
{{--                        <h3><i class="fas fa-phone-alt cl-atlantis fa-3x"></i> My Phone</h3>--}}
{{--                        <p>089620367796 <br>085718865753</p>--}}
{{--                    </div>--}}
{{--                    <div class="contacts-mail contacts-side-desc contacts-box-desc">--}}
{{--                        <h3><i class="fas fa-envelope cl-atlantis fa-3x"></i> My Email</h3>--}}
{{--                        <address class="address-details-f"><a href="mailto:divianisok@gmail.com" class="">divianisok@gmail.com</a>--}}
{{--                        </address>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <!--====================================================--}}
{{--                    NAVIGATIONS--}}
{{--    ======================================================-->--}}
{{--    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="maps">--}}
{{--        <div class="row my-auto">--}}
{{--            <div class="col-12">--}}
{{--                <h2 class="text-center">Navigations</h2>--}}
{{--                <div class="mb-5 heading-border">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="resume-item col-md-6 col-sm-12">--}}
{{--                <div class="card mx-0 p-4 mb-5" style="border-color: #2196f3; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">--}}
{{--                    <div class="google-maps">--}}
{{--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.5858543035417!2d112.04808432918722!3d-7.813449670994036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78592de9a894ed%3A0x82204b821b5086a0!2sumi%20house!5e1!3m2!1sen!2sid!4v1582258712594!5m2!1sen!2sid" width="650" height="600" frameborder="0" style="border:0;" allowfullscreen="">--}}
{{--                        </iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="resume-item col-md-6 col-sm-12">--}}
{{--                <div class="card mx-0 p-4 mb-5" style="border-color: #2196f3; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">--}}
{{--                    <div class="google-maps">--}}
{{--                        <iframe src="https://www.google.com/maps/embed?pb=!4v1582258175236!6m8!1m7!1sq4my7SxvNtz59OtF6Qlhnw!2m2!1d-7.81353606465098!2d112.0487389701369!3f358.35828!4f0!5f0.7820865974627469" width="650" height="600" frameborder="0" style="border:0;" allowfullscreen="">--}}
{{--                        </iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

</div>

<!--====================================================
                    PORTFOLIO MODALS
======================================================-->
<div class="portfolios-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">WORDPRESS CPANEL HOSTING</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered"
                                     src="{{ URL::asset('assets/img/portfolio/Web - Adelwine.png') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <p align="justify"><font color="black">SAYA MALAS MENJELASKAN, Intinya ini web development.</font></p>
                                <ul class="list-inline item-details">
                                    <li style="color: black"><strong>Client : </strong>
                                        <a href="https://adelwine.org">Adelwine</a>
                                    </li>
                                    <li style="color: black"><strong>Date : </strong>
                                        <a href="https://adelwine.org">February 2020</a>
                                    </li>
                                    <li style="color: black"><strong>Service : </strong>
                                        <a href="https://adelwine.org">Web</a>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolios-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">APLIKASI TEBAK HEWAN</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered"
                                     src="{{ URL::asset('assets/img/portfolio/Android - Tebak Hewan.png') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <p align="justify"><font color="black">SAYA MALAS MENJELASKAN, Intinya ini android native development.</font></p>
                                <ul class="list-inline item-details">
                                    <li style="color: black"><strong>Client : </strong>
                                        <a href="#">Tugas Akhir Praktikum DKP</a>
                                    </li>
                                    <li style="color: black"><strong>Date : </strong>
                                        <a href="#">December 2019</a>
                                    </li>
                                    <li style="color: black"><strong>Service : </strong>
                                        <a href="#">Android</a>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolios-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">APLIKASI BODY MASS INDEX</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered"
                                     src="{{ URL::asset('assets/img/portfolio/Flutter - BMI.png') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <p align="justify"><font color="black">SAYA MALAS MENJELASKAN, Intinya ini flutter cross-platform development.</font></p>
                                <ul class="list-inline item-details">
                                    <li style="color: black"><strong>Client : </strong>
                                        <a href="#">Nobody</a>
                                    </li>
                                    <li style="color: black"><strong>Date : </strong>
                                        <a href="#">May 2019</a>
                                    </li>
                                    <li style="color: black"><strong>Service : </strong>
                                        <a href="#">Cross-Platform</a>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolios-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">BUDGET VS. REVENUE (MOVIE)</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered"
                                     src="{{ URL::asset('assets/img/portfolio/Data Science - Budget vs. Revenue.png') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <p align="justify"><font color="black">SAYA MALAS MENJELASKAN, Intinya ini data science.</font></p>
                                <ul class="list-inline item-details">
                                    <li style="color: black"><strong>Client : </strong>
                                        <a href="#">Nobody</a>
                                    </li>
                                    <li style="color: black"><strong>Date : </strong>
                                        <a href="#">January 2020</a>
                                    </li>
                                    <li style="color: black"><strong>Service : </strong>
                                        <a href="#">Data Science</a>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="floating-wpp" style="z-index: 100;"></div>

<!-- Global javascript -->
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/floating-wpp.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>

<script>
    ;(function(){
        function id(v){return document.getElementById(v); }
        function loadbar() {
            var ovrl = id("overlay"),
                img = document.images,
                c = 0;
            tot = img.length;

            function imgLoaded(){
                c += 1;
                var perc = ((100/tot*c) << 0);
                if(c===tot) return doneLoading();
            }
            function doneLoading(){
                ovrl.style.opacity = 0;
                setTimeout(function(){
                    ovrl.style.display = "none";
                }, 2000);
            }
            for(var i=0; i<tot; i++) {
                var tImg     = new Image();
                tImg.onload  = imgLoaded;
                tImg.onerror = imgLoaded;
                tImg.src     = img[i].src;
            }
        }
        document.addEventListener('DOMContentLoaded', loadbar, false);
    }());
</script>

<script>
    jQuery(document).ready(function(){
        jQuery('.skillbar').each(function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },6000);
        });
    });
</script>

<script>
    var textWrapper = document.querySelector('.ml14 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
        .add({
            targets: '.ml14 .line',
            scaleX: [0,1],
            opacity: [0.5,1],
            easing: "easeInOutExpo",
            duration: 900
        }).add({
        targets: '.ml14 .letter',
        opacity: [0,1],
        translateX: [40,0],
        translateZ: 0,
        scaleX: [0.3, 1],
        easing: "easeOutExpo",
        duration: 800,
        offset: '-=600',
        delay: (el, i) => 150 + 25 * i
    }).add({
        targets: '.ml14',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
</script>

<script>
    $(document).ready(function () {

        $(".filter-b").click(function () {
            var value = $(this).attr('data-filter');
            if (value == "all") {
                $('.filter').show('1000');
            } else {
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');
            }
        });

        if ($(".filter-b").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");
    });

    // SKILLS
    $(function () {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

    });
</script>

<script>
    $(function () {
        $('.floating-wpp').floatingWhatsApp({
            phone: '6289620367796',
            popupMessage: 'Hello, i\'m Divianis.',
            showPopup: true,
            position: 'right', // left or right
            autoOpen: false, // true or false
            //autoOpenTimer: 4000,
            message: 'Bismillah, please write your message here.',
            //headerColor: 'orange', // enable to change msg box color
            headerTitle: 'Chat Via Whatsapp',
            showOnIE: true,
            headerColor: '#2196f3',
            backgroundColor: '#2196f3',
            buttonImage: '<img src="{{ URL::asset('assets/img/burger.svg') }}" />'
        });
    });
</script>

</body>

</html>
