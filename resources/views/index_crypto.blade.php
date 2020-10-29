@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/price.css') }}">
    <link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                                              data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Home
                            </a>
                        </li>
                    </ol>
                    <div class="float-right mt-1">
                        <i class="livicon icon3" data-name="money" data-size="20" data-loop="true" data-c="#3d3d3d"
                           data-hc="#3d3d3d"></i> Price
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="purchas-main">
            <div class="container bg-border wow pulse" data-wow-duration="2.5s">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                        <h1 class="purchae-hed mt-3">Exchange, Buy and Sell Cryptocurrencies</h1>
                    </div>
                    <div class="col-md-5 col-sm-12 col-12 col-lg-4"><a href="#"
                                                                       class="btn purchase-styl float-lg-right">Get Started
                            now</a></div>
                </div>
            </div>

        </section>
    @stop

{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container my-3">
        <h2> SERVICES</h2>
        <hr>
        <div class="row my-3">
            <!-- Vestibulizzle Section Start -->
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-3 my-3 wow pulse" data-wow-duration="0.5s">
                <div class="card card_price">
                    <div class="text-center">
                        <div class="card-header card_heading">
                            <h3 class="text-white mt-3">CRYPTOS</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="box_round_symbol">
                            <span class="fab fa-bitcoin"></span>
                        </div>
                        <h4 class="text-success text-center my-2">Per Month</h4>
                        <ul style="text-align:justify; padding-left: 0 !important;">
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>


                        <a class="btn btn-success btn-block" href="#">See More! </a>
                    </div>
                </div>
            </div>

            <!-- //Vestibulizzle Section End -->
            <!-- Best Package Section Start -->
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3 col-12 my-3 wow pulse" data-wow-duration="0.5s"
                 data-wow-delay="0.7s">
                <div class="card card_price">
                    <div class="text-center">
                        <div class="card-header card_heading">
                            <h3 class="text-white mt-3">EXCHANGE RATES</h3>
                        </div>
                        <div class="card-body">

                            <div class="box_round_symbol">
                                <span class="fas fa-exchange-alt"></span>
                            </div>
                            <h4 class="text-success text-center my-2">Per Month</h4>
                            <ul style="text-align:justify; padding-left: 0 !important;">
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                            </ul>


                            <a class="btn btn-success btn-block" href="/exchange_crypto">Exchange Crypto</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Best Package Section End -->
            <!-- Suscipizzle Section Start -->
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3 col-12 my-3 wow pulse" data-wow-duration="0.5s"
                 data-wow-delay="1.2s">
                <div class="card card_price">
                    <div class="text-center">
                        <div class="card-header card_heading">
                            <h3 class="text-white mt-3">BUY</h3>
                        </div>
                        <div class="card-body">

                            <div class="box_round_symbol">
                                <span class="fas fa-shopping-cart"></span>
                            </div>
                            <h4 class="text-success text-center my-2">Per Month</h4>
                            <ul style="text-align:justify; padding-left: 0 !important;">
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                            </ul>


                            <a class="btn btn-success btn-block" href="/buy_crypto">Buy Crypto </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Suscipizzle Section End -->
            <!-- Pretium Section Start -->
            <div class="col-md-6 col-sm-12 col-lg-6 col-12 col-xl-3 my-3 wow pulse" data-wow-duration="0.5s"
                 data-wow-delay="1.7s">
                <div class="card card_price">
                    <div class="text-center">
                        <div class="card-header card_heading">
                            <h3 class="text-white mt-3">SELL</h3>
                        </div>
                        <div class="card-body">

                            <div class="box_round_symbol">
                                <span class="fas fa-luggage-cart"></span>
                            </div>
                            <h4 class="text-success text-center my-2">Per Month</h4>
                            <ul style="text-align:justify; padding-left: 0 !important;">
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                                <li class="text-center">
                                    Lorem Ipsum Dolor Lorem
                                </li>
                            </ul>

                            <a class="btn btn-success btn-block" href="/sell_crypto">Sell Crypto </a>
                        </div>
                    </div>
                    <!-- //Pretium Section End -->
                </div>
            </div>
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            new WOW().init();
        });
    </script>

@stop
