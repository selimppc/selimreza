@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home | PHP Developer, Laravel, Yii, MYSQL
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
                    <div class="col-md-5 col-sm-5 col-xs-12"><a href="mailto:me@selimreza.com" class="btn btn-primary purchase-styl pull-right">Email Me</a></div>
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
                    <h3 class=" border-warning"><span class="heading_border bg-warning">Project Planning</span></h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8" data-hc="#25a3d8"></i></a>
                    <h4><bold>Enterprise Resource Planning (ERP)</bold></h4>
                </div>
                <div>
                    <p>
                        <label>Custom Web Based ERP Solutions for Small, Medium and Large Companies. We develop some modules: General Ledger, Purchase, GRN, Inventory, Sales, Account Payable, Account Receivable, HR & Payroll. Alos I setup cloud API</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 " data-hc="#ef8424 "></i>
                    </a>
                    <h4><bold>E-Commerce Web & APP</bold></h4>
                    <p>
                        <label>Covering latest technology for online market. For apps and web based ecommerce solution I am using PHP framework and Payment Gateway as Paypal, Authorized, 1Shopping and Eway with courier service TNT.  </label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </a>
                    <h4><bold>Web APP & Rest API</bold></h4>
                    <p>
                        <label> I am in the middle of technologies, I develop web apps and API to communicate among the server(s). I love to build rest api(s). It gives me more interest than others. I worked for Russia and Europe for a large project with :: API, Clouding, Java and PHP </label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 " data-hc="#1360b3 "></i>
                    </a>
                    <h4><bold>Content Management System</bold></h4>
                    <p>
                        <label>I have experience with Joomla, Wordpress, Drupal. I worked with Magento once. Mainly I have better experience on Wordpress and Mysql. Wordpress is very popular paltform for managing content and search engine marketing. Also user friendly. </label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </a>
                    <h4>Database Programming </h4>
                    <p>
                        <label> In enterprise resource planning I use : Store Procedure, Views, Trigger, Events. I utilize that database programming is much better than other language to retrive data from a database server. I have experience better on MySQL database server. </label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 " data-hc="#91d659 "></i>
                    </a>
                    <h4>Scrum or Waterfall Method</h4>
                    <p>
                        <label>I love to work with proper documentation as well as scrum methodology. Now I am following waterfall pattern for my projects. I would love to work with scrum and UML.  </label>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Features End -->
        <!-- Our Skills Start -->
        
        <div class="text-center marbtm10">
            <h3 class="border-danger"><span class="heading_border bg-danger"> Technologies I use</span></h3>
        </div>
            </div>
        <div class="sliders">
            <!-- Our skill Section start <--></-->
            <div class="container">
            <div class="row">

            <div class="col-md-3 col-sm-6  text-center ">
                <div class="text-center center-block">
                    <div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">PHP / Framework </strong>
                </div>
                <span>PHP 5.5+, Laravel 4.2, Laravel 5.1, Laravel 5.3, Yii1, Yii2, CodeIgniter </span>
                <p> &nbsp; </p>

                <div class="text-center center-block">
                    <div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Front End </strong>
                </div>
                <span>jQuery, JavaScript, HTML5, CSS3, AngularJs, React.js </span>
            </div>

           

            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                    <div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Database Server</strong>
                </div>
                <span>MySQL (Store Procedure, Views, Trigger)</span>
                <p> &nbsp; </p>

                <div class="text-center center-block">
                <div id="myStat7" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Backend Design </strong>
                </div>
                <span>Database Design, Model and Active Records </span>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                <div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="80%" data-width="4" data-fontsize="28" data-percent="80" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Reprts Server</strong>
                </div>
                <span>Jasper Reports Server, iReports</span>
                <p> &nbsp; </p>

                <div class="text-center center-block">
                <div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="80%" data-width="4" data-fontsize="28" data-percent="80" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Cloud Server</strong>
                </div>
                <span>Apache2, Tomcat, MySQL, MariaDB, SendMail, Postfix</span>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                <div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Gist && IDE</strong>
                </div>
                <span>Git, BitBucket && PHPStorm, Sublime Text </span>
                <p> &nbsp; </p>

                <div class="text-center center-block">
                <div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Git Account</strong>
                </div>
                <span>Git, BitBucket account: selimppc </span>
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
