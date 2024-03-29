@extends('layouts/default')

{{-- Page title --}}
@section('title')
About Me | SelimReza.com
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon-colors.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="{{ URL::to('aboutme') }}">About Me</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="users" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> About Us
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row">
            <!-- Left Heading Section Start -->
            <div class="col-md-3 col-sm-12">
                <p>
                <br>
                    <amp-img src="{{ asset('assets/images/a_sr.png') }}" alt="Selim Reza | PHP Developer" width="250" height="250" style=" padding: 5px; border-radius: 5px; "> </amp-img>
                </p>
                
            </div>

            <div class="col-md-4 col-sm-12">
                <h2><label>About ME</label></h2>
                <p>
                    Passionate, responsible and committed engineer, with a get-it-done, on-time spirit, and more than 3 years of experience designing, implementing and adapting technically sophisticated online web applications using PHP, JS,  three tiered architecture and more. Proficient in PHP infrastructure, language standards, object modeling technologies and Application Life Cycle management. 
                </p>
                <p>
                     <a href="{{ asset('uploads/files/Selim_Reza_Bangladesh.pdf') }}" class="btn btn-success text-white" role="button" target="_blank"> Download My Resume. Click Here !</a>
                </p>
                
            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider">
                <p>
                    Technologies: <br>
					----------------- <br>
					Laravel 4.2, 
					AngularJS, 
					Yii / Yii2, 
					Codeigniter, 
					MySQL, 
					JSON, 
					JQuery, 
					JavaScript, 
					Ajax. <br><br>

					Programming Language: <br>
					------------------------------ <br>
					C, 
					PHP, 
					Java <br><br>

					Concepts: <br>
					------------ <br>
					Algorithms, 
					Data Structures, 
					Design Patterns.
                </p>
            </div>
            <!-- //Slider End -->
        </div>
        <!-- //Slider Section End -->
        <!-- Services Section Start -->
        <div class="row">
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success" >Experience </span></h3>
            </div>
            <!-- left Section Start -->
            <div class="col-md-6 col-sm-12">
                
                <!-- Pnael group section Start -->
                <div class="margin-t30 hidden-xs hidden-sm"></div>
                <div class="panel-group" id="accordion">
                    <!--Php Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class=" glyphicon glyphicon-minus success"></span>
                                <span class="success">PHP Framework : Laravel, Yii and CI</span></a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <i class="devicon-php-plain colored font100" ></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">OOP is the best way for all kind of applications. It helps us for the ESO system. Extends and Interfaces are highly recommended to use from the beginning.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Php Section End -->
                    <!-- Html Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">HTML</span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                            <i class="devicon-html5-plain colored font100"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Its a very common but powerful platform in the web world. We use HTML in our user interfaces.   </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Html Section End -->
                    <!-- Jquery Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">JQUERY</span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                            <i class="devicon-jquery-plain colored font100" ></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">jQuery is also a library of web scripts. Its also has some powerful features for onpage calculation as well as backend actions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Jquery Section End -->
                </div>
                <!-- //Panel group Section End -->

                <!-- //Easy to use Section End -->
            </div>
            <!-- Left Section End -->
            <div class="col-md-6 col-sm-12">
                <!-- Pnael group section Start -->
                <div class="margin-t30 hidden-xs hidden-sm"></div>
                <div class="panel-group" id="accordion">
                    <!--Php Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                <span class=" glyphicon glyphicon-minus success"></span>
                                <span class="success">Database Server</span></a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <i class="devicon-mysql-plain colored font100" ></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">I use Mysql and Mariadb server to store out input data. MariaDB is faster than mysql. Generally both funtionalities are same. I am experience eith View, Trigger, Store Procedure. There are mainly called database programming. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Php Section End -->
                    <!-- Html Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">HTML</span></a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                            <i class="devicon-html5-plain colored font100"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Its a very common but powerful platform in the web world. We use HTML in our user interfaces. . </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Html Section End -->
                    <!-- Jquery Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">JQUERY</span></a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                            <i class="devicon-jquery-plain colored font100" ></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">jQuery is also a library of web scripts. Its also has some powerful features for onpage calculation as well as backend actions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Jquery Section End -->
                </div>
                <!-- //Panel group Section End -->
            </div>
        </div>
        <!-- // Services Section End -->
        
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->

@stop
