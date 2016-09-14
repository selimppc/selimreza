@extends('layouts/default')

{{-- Page title --}}
@section('title')
Jobs for You 
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Home
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="{{ URL::to('jobs') }}">Jobs</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="users" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Jobs
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
			<h3>
			Senior IT specialists who are willing to work in the Netherlands for at least 1 year with excellent European package. 
			</h3>


<p>
	<b> Functions : </b>
</p>

<ul>
	<li> Developpers in the field of Java (backend as frontend),  </li>
	<li> Senior .Net Developpers  </li>
	<li> Senior Oracle, , PHP, SQL specialists  </li>
	<li> Senior Test managers  </li>
	<li> Ops engineers (expierenced in the dev/ops)  </li>
	<li> Pega expertise  </li>
	<li> Database specialists ( Specialist Database B 9)  </li>
	<li> Oracle Database Administrator ( DBA -Oracle database)    </li>
	<li> Oracle specialisten (Oracle Access Manager en authenticatietechniques (http cookies)   </li>
	<li> Inspire- knowledge (developement/design) & Lexmark (DM)  </li>
	<li> UX designer </li>
	<li> Performance Engineers  </li>
	<li> ICT Specialists Security/  </li>
	<li> nix/Linux administrators  </li>
	<li> senior test managers  </li>
	<li> Business Analists  </li>
	<li> Architects  </li>
</ul>

<p>
 <b>General: </b>
</p>

<p>
<ul>
	<li>  Preferably already worked for Dutch companies (Rabobank, ING, ABN etc) or norther European company
senior only, </li>
	<li>  auditable papertrail on university and post doc diploma's,   </li>
	<li>  rocksteady integer references on the expierences, again preferably having worked for Dutch companies of having workend for Cognizant, IBM, ordina etc.  </li>
	<li>  international testresult available or willing to undergo online testing/ assesment asap.  </li>
</ul>
</p>


<h5> 2 examples of job profiles for which roughly 10 professionals are wanted that can be places inmediately: </h5>
<h4>Senior (Java) developer </h4>
<p>
<ul>
	<li>  University degree  </li>
	<li>  Expirienced object oriented programming (UML, OO) </li>
	<li>  Expirienced in Agile software development </li>
	<li>  minimum 5-10 year expierence with Java development tools and environment </li>
	<li>  Expierence with android, C/C++/C#, Unix.  </li>
</ul> 
</p>

<h5> Expierinced with Java technologies such as Spring, Hadoop, Hibernate, Struts, JS, Ajax, EJB3, Eclipse, Maven, WebSphere, Tomcat of OSGi  </h5>

<h4>Senior (Java) developer/ Architect </h4>
<p>
<ul>
	<li> University degree  </li>
	<li> Expierienced object oriented programming (UML, OO) </li>
	<li> Expierienced in Agile software development </li>
	<li> minimum 5-10 year expierence with Java development tools and environment </li>
</ul>
</p>

<p>
	<b> Expierienced with: </b>
</p>
<p>
<ul>
	<li> Java Ecosystem; </li>
	<li> SOAP en REST; </li>
	<li> Spring, JAXB, Apache CXF, Maven, Jenkins, Angular JS; </li>
	<li> Scrum; </li>
	<li> Elastic Search; </li>
	<li> SaaS. </li>
</ul>
</p>
 


        </div>
    </div>    


<section class="purchas-main">
<div class="container bg-border">
<div class="row">
    <div class="col-md-7 col-sm-7 col-xs-12">
        <h6 class="purchae-hed"> Send Your CV/Resume to "me@selimreza.com" </h6></div>
    <div class="col-md-5 col-sm-5 col-xs-12"><a href="mailto:me@selimreza.com" class="btn btn-primary purchase-styl pull-right">Email Me</a></div>
</div>
</div>
</section>

<p> &nbsp; </p>
<p> &nbsp; </p>

@stop



{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->

@stop    