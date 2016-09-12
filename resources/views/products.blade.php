@extends('layouts/default')

{{-- Page title --}}
@section('title')
Products
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/shopping.css') }}">
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
                    <a href="#">Products</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Products
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <!-- Best Deal Section Start -->
        <div class="row">
            <h3>BEST DEALS</h3>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/erp-supply.png') }}" class="img-responsive" alt="htc image"></a>
                    <br/>
                    <h5 class="text-primary">ERP and Supply Chain Management</h5>
                    <ul>

                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> General Ledger/Accounting</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Inventory / Purchase</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> HR & Payroll</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Procurement </li>
                    </ul>
                    
                    <a href="mailto:me@selimreza.com" class="btn btn-primary btn-block text-white">Email Me</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/data-analysis.jpg') }}" class="img-responsive" alt="sony image"></a>
                    <br/>
                    <h5 class="text-primary"> Data Analysis </h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Data Requirements</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Data Collection </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Data Processing </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Data Cleaning </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Exploratory Data Analysis</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Modeling and Algorithms</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Data Product</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Communication</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> SPSS Tools</li>
                    </ul>
                    
                    <a href="mailto:me@selimreza.com" class="btn btn-primary btn-block text-white">Email Me</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/databse-img.jpg') }}" class="img-responsive" alt="karbon image"></a>
                    <br/>
                    <h5 class="text-primary">Database Administration </h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Data policies, procedures, standards</li>
                        
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i>  Data conflict (ownership) resolution </li>
                        
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Internal marketing of DA concepts </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Managing the data repository </li>
                    </ul>
                    <a href="mailto:me@selimreza.com" class="btn btn-primary btn-block text-white">Email Me</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/ecommerce-img.jpg') }}" class="img-responsive" alt="nokia image"></a>
                    <br/>
                    <h5 class="text-primary">E-Commerce and Content Manage </h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Payment Gateway System</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Content Management System </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product Inventory/Store </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Accounts </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Tracking Facility </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Email Gateway </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> SMS Gateway </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Paypal, Authorized.net, 1Shopping, Eway, TNT Express </li>
                    </ul>
                    
                    <a href="mailto:me@selimreza.com" class="btn btn-primary btn-block text-white">Email Me</a>
                </div>
            </div>
            
        </div>
        <!-- //Best Deal Section End -->
        
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
