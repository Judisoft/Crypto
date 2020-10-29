@extends('layouts/default')

{{-- Page title --}}
@section('title')
    invoice_crypto
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/price.css') }}">
    <link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
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
                           data-hc="#3d3d3d"></i> Invoice
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    @stop
    {{-- Page content --}}
    @section('content')
        <!-- Container Section Start -->
            <hr>
            <h2>SALES REQUEST</h2>
            <hr>

            <section class="content my-3 pr-3 pl-3" id="invoice-stmt">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card-body" style="border:1px solid #ccc;padding:0;margin:0;">
                            <div class="row" style="padding: 15px;margin-top:5px;">
                                <div class="col-md-6 col-lg-6 col-12">
                                    <h1>Company Name</h1>
                                </div>
                                <div class="col-md-6 col-lg-6 col-12">
                                    <div class="float-right">
                                        <strong>Pay To:</strong><br>
                                        <strong>Company Address Name</strong><br>
                                        Company Wallet Address:
                                        <h4>Company Wallet Address here</h4><br>


                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 15px;">
                                <div class="col-md-9 col-6 col-lg-8" style="margin-top:5px;">
                                    <br>
                                    <h4 class="text-primary">Sales Request ID: {{$salesRequestNum}} </h4><br>

                                </div>
                                <div class="col-md-3 col-6 col-lg-4" style="padding-right:0">
                                    <div id="invoice" style="background-color: #eee;text-align:right;padding: 15px;padding-bottom:23px;border-bottom-left-radius: 6px;border-top-left-radius: 6px;">
                                        <h><strong></strong></h>
                                        <h4><strong><?php echo date("F j, Y, g:i a");?></strong></h4>
                                        Payment Terms: <br>

                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:15px;">
                                <div class="col-md-12 col-12 col-lg-12">
                                    <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>SI No.</th>
                                                <th>Crytocurrency</th>
                                                <th>Quantity</th>
                                                <th>Unit Price(FCFA)</th>
                                                <th>NetSubtotal(FCFA)</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>{{old('currency_demanded', request()->currency_demanded)}}</td>
                                                <td>{{old('amount_demanded', request()->amount_demanded)}}</td>
                                                <td>  @if(request()->currency_demanded == 'Bitcoin')
                                                        &nbsp;{{$rate * $btcRate}} FCFA
                                                    @elseif(request()->currency_demanded == 'Ethereum')
                                                        {{$rate * $ethRate}} FCFA
                                                    @elseif(request()->currency_demanded == 'Tron')
                                                        {{$rate * $trxRate}} FCFA
                                                    @elseif(request()->currency_demanded == 'Tilly')
                                                        {{$rate * $tilyRate}} FCFA

                                                    @endif
                                                </td>
                                                <td>@if(request()->currency_demanded == 'Bitcoin')
                                                        &nbsp;{{$rate * $btcRate}} FCFA
                                                    @elseif(request()->currency_demanded == 'Ethereum')
                                                        {{$rate * $ethRate}} FCFA
                                                    @elseif(request()->currency_demanded == 'Tron')
                                                        {{$rate * $trxRate}} FCFA
                                                    @elseif(request()->currency_demanded == 'Tilly')
                                                        {{$rate * $tilyRate}} FCFA

                                                    @endif</td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><strong>TOTAL</strong></td>
                                                <td><strong>@if(request()->currency_demanded == 'Bitcoin')
                                                            &nbsp;{{$rate * $btcRate}} FCFA
                                                        @elseif(request()->currency_demanded == 'Ethereum')
                                                            {{$rate * $ethRate}} FCFA
                                                        @elseif(request()->currency_demanded == 'Tron')
                                                            {{$rate * $trxRate}} FCFA
                                                        @elseif(request()->currency_demanded == 'Tilly')
                                                            {{$rate * $tilyRate}} FCFA

                                                        @endif
                                                    </strong></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: #eee;padding:15px;" id="footer-bg">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-12">
                                        <strong>Payment Details</strong><br>
                                        <strong>{{old('payment_details', request()->payment_details)}}</strong><br>

                                    </div>
                                    <div class="col-md-6 col-lg-6 col-12">
                                        <div class="float-right">
                                            <strong>Company Registration Number</strong>:xxxxxxxxxxx<br>
                                            <strong>Contact:</strong>:(+237)xxx xxx xxx
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div style="margin:10px 20px;text-align:center;" class="btn-section">
                                    <button type="button" class="btn btn_marTop button-alignment btn-info"
                                            data-toggle="button">
                                        <a style="color:#fff;" onclick="javascript:window.print();">
                                            <i class="livicon" data-name="printer" data-size="16" data-loop="true"
                                               data-c="#fff" data-hc="white" style="position:relative;top:3px;"></i>
                                            Print
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn_marTop button-alignment btn-success default_voice"
                                            data-toggle="button" id="btn3">
                                        <a style="color:#333;">
                                            <i class="livicon" data-name="check" data-size="16" data-loop="true"
                                               data-c="#111" data-hc="#111" style="position:relative;top:3px;"></i>
                                            Send Sales Request
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>










    </div>
    <br>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <!-- beginning of page level js -->
    <script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            new WOW().init();
        });
    </script>

@stop
