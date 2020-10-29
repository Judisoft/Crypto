@extends('layouts/default')

{{-- Page title --}}
@section('title')
    exchange
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
                           data-hc="#3d3d3d"></i> Exchange
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="container">
        <section class="purchas-main">
            <div class="container bg-border wow pulse" data-wow-duration="1s">
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
            <hr>
            <h2>EXCHANGE CRYPTOCURRENCY</h2>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <form class="col-md-12" action="{{ action('CurrencyController@currencyExchange') }}" method="post">
                            {{csrf_field()}}
                            <label for="currency_to_exchange"></label><select style="height:50px" id="currency_to_exchange" class="form-control select2" name="currency_to_exchange"  required>
                                <option value="" selected disabled hidden>Select Currency  </option>
                                @foreach($data as $currency)
                                    <option> {{$currency->currency_name}} </option>
                                @endforeach
                            </select>


                            <label for="amount_to_convert"></label><input style="height:50px;" type="text" name="amount_to_exchange" id="amount_to_exchange" class="form-control input-md" value="{{old('amount_to_exchange', request()->amount_to_exchange)}}"
                                                                 placeholder="Enter Amount" required>
                            <br>
                            <p class="text-info">CONVERT CRYPTO TO WEST AFRICAN FRANC CFA (XAF)</p>



            <section class="purchas-main">
                <div class="container bg-border wow " data-wow-duration="0s">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                            <h1 >
                                @if(!empty(request()->all()))

                                        @if(request()->currency_to_exchange == 'Bitcoin')
                                             {{request()->amount_to_exchange}} &nbsp {{request()->currency_to_exchange}} &nbsp; = &nbsp;{{request()->amount_to_exchange * $rate * $btcRate}} FCFA
                                        @elseif(request()->currency_to_exchange == 'Ethereum')
                                            {{request()->amount_to_exchange}} &nbsp; {{request()->currency_to_exchange}} &nbsp; = &nbsp;{{request()->amount_to_exchange * $rate * $ethRate}} FCFA
                                        @elseif(request()->currency_to_exchange == 'Tron')
                                            {{request()->amount_to_exchange}} &nbsp; {{request()->currency_to_exchange}} &nbsp; = &nbsp;{{request()->amount_to_exchange * $rate * $trxRate}} FCFA
                                        @elseif(request()->currency_to_exchange == 'Tilly')
                                            {{request()->amount_to_exchange}} &nbsp; {{request()->currency_to_exchange}} &nbsp; = &nbsp;{{request()->amount_to_exchange * $rate * $tilyRate}} FCFA

                                        @endif
                                @endif







                            </h1>
                        </div>
                    </div>
                </div>

            </section>
            <div class="row mar-10">
                <div class="col-12 col-lg-12">
                    <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary btn-block btn-md" >
                        CONVERT
                    </button>
                </div>
            </div>
                        </form>
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
