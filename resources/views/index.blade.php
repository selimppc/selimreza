@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home | SelimReza.com
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.theme.css') }}">
    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><amp-img src="{{ asset('assets/images/code-2.jpg') }}" alt="Selim Reza" height="503" width="1360" layout="responsive"> </amp-img>
        </div>
        <div class="item"><amp-img src="{{ asset('assets/images/code-4.jpg') }}" alt="Selim Reza" height="503" width="1360" layout="responsive"> </amp-img>
        </div>
    </div>
    <!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
    <div class="container">
        <section class="purchas-main">
            <div class="container bg-border">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h1 class="purchae-hed"> Better Code, Better Life </h1></div>
                    <div class="col-md-5 col-sm-5 col-xs-12"><a href="#" class="btn btn-primary purchase-styl pull-right">Email Me</a></div>
                </div>
            </div>
        </section>
        
    </div>
    
    <!-- Accordions Section End -->
    <div class="container">
        
        
        
        <!-- Features Start -->
        <div class="row features">
            <div class="text-center">
                <div class="text-center">
                    <h3 class=" border-warning"><span class="heading_border bg-warning">Work History</span></h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8" data-hc="#25a3d8"></i></a>
                    <h4><bold>Enterprise Solutions</bold></h4>
                </div>
                <div>
                    <p>
                        <label>ERP and Supply Chain Management</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 " data-hc="#ef8424 "></i>
                    </a>
                    <h4><bold>E-Commerce </bold></h4>
                    <p>
                        <label>Web based E-Commerce</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </a>
                    <h4><bold>Web Application</bold></h4>
                    <p>
                        <label>Web Application</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 " data-hc="#1360b3 "></i>
                    </a>
                    <h4><bold>Content Management System</bold></h4>
                    <p>
                        <label>Content Management System</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </a>
                    <h4>Database Administration </h4>
                    <p>
                        <label>Optimize Database</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 " data-hc="#91d659 "></i>
                    </a>
                    <h4>UML Design</h4>
                    <p>
                        <label>UML Design </label>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Features End -->
        <!-- Our Skills Start -->
        
        <div class="text-center marbtm10">
            <h3 class="border-danger"><span class="heading_border bg-danger"> Skills</span></h3>
        </div>
            </div>
        <div class="sliders">
            <!-- Our skill Section start -->
            <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-6  text-center ">
                <div class="text-center center-block">
                    <div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">PHP</strong>
                </div>
                <span>PHP 5.5 + </span>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                    <div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="60%" data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">MySQL</strong>
                </div>
                <span>MySQL</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                <div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Data Algorithm</strong>
            </div>
            <span>Data Scientist</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                <div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="70%" data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Js Framework</strong>
            </div>
            <span>Angular, React, Node </span>
            </div>
        </div>
            <!-- Our skills Section End -->
        </div>
        <!-- //Our Skills End -->
    </div>
    <!-- //Container End -->
@stop

{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <!--page level js ends-->

@stop
