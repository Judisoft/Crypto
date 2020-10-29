@extends('layouts/default')

{{-- Page title --}}
@section('title')
    buy
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
                           data-hc="#3d3d3d"></i> Buy
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="purchas-main">
            <div class="container bg-border wow pulse" data-wow-duration="1s">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                        <h1 class="purchae-hed mt-3">Exchange, Buy and Sell Cryptocurrencies</h1>
                    </div>
                    <div class="col-md-5 col-sm-12 col-12 col-lg-4"><a href="#" class="btn purchase-styl float-lg-right">Get Started
                            now</a></div>
                </div>
            </div>

        </section>
    @stop
    {{-- Page content --}}
    @section('content')
        <!-- Container Section Start -->
            <div class="container">
                <hr>
                <h2>BUY CRYPTOCURRENCY</h2>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ action('InvoiceController@store') }}" method="post" >
                            <!-- CSRF field -->
                            {{csrf_field()}}
                            <select style="height:50px"  class="form-control select2" name="currency_to_buy" required >
                                <option value="" selected disabled hidden>Select Currency to buy</option>
                                @foreach($data as $currency)
                                    <option>{{$currency->currency_name}} </option>
                                @endforeach
                            </select>

                            <label for="amount_to_buy"></label>
                            <input style="height:50px;" type="text" name="amount_to_buy" id="amount_to_buy" class="form-control input-md" value="{{old('amount_to_buy', request()->amount_to_buy)}}"
                                   placeholder="Enter amount to buy" required>

                            <label for="wallet_address"></label>
                            <input style="height:50px;" type="text" name="wallet_address" id="wallet_address" class="form-control input-md"  placeholder="Enter your Wallet Address" required>

                            <label></label>
                            <select style="height:50px" class="form-control select2" name="payment_method" required >
                                <option value="" selected disabled hidden>Pay  Through ...</option>
                                <option >Bank Deposit</option>
                                <option >MTN Mobile Money</option>
                                <option >Orange Money</option>


                            </select>

                            <div class="row">
                                <div class="col-md-8">
                                    <label class="padding7" for="activate">
                                        <input class="custom_icheck custom-checkbox pos-rel p-l-30" type="checkbox"
                                               id="activate" name="activate" value="{{old('activate', request()->activate)}}" required> &nbsp;I agree</label> to the <a href="#">Terms and Conditions</a>
                                    <br>
                                </div>
                            </div>
                            <div class="row mar-10">
                                <div class="col-6 col-md-6">
                                    <button type="submit" name="submit" id="submit"
                                            class="btn btn-primary btn-block btn-md" >Validate Purchase Request </button>
                                </div>
                                <div class="col-6 col-md-6">
                                    <button type="reset" id="reset"
                                            class=" btn btn-danger btn-block btn-md ">Cancel </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>

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
