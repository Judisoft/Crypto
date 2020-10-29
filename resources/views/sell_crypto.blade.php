@extends('layouts/default')

{{-- Page title --}}
@section('title')
    sell
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
                           data-hc="#3d3d3d"></i> Sell
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
    <div class="container">
        <hr>
        <h2>SELL CRYPTOCURRENCY</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <form action="{{ action('CurrencyController@currencySell') }}" method="post" >
                        <!-- CSRF field -->
                        {{csrf_field()}}
                    <select style="height:50px" i class="form-control select2" name="currency_demanded" required>
                        <option value="" selected disabled hidden>Select Currency to sell</option>
                        @foreach($data as $currency)
                            <option>{{$currency->currency_name}}</option>
                        @endforeach
                    </select>
                    <label></label>
                    <input style="height:50px;" type="text" name="amount_demanded"  class="form-control input-md" value="{{old('amount_demanded', request()->amount_demanded)}}"
                           placeholder="Amount to sell" required>
        <section class="purchas-main">
            <div class="container bg-border wow pulse" data-wow-duration="0.0s">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                        <h1>Display amount in local currency here</h1>
                    </div>
                </div>
            </div>

        </section>

                    <select style="height:50px" class="form-control select2" name="payment_method" required>
                        <option value="" selected disabled hidden>Select a Payment method for your sale</option>
                        <option>Bank Deposit</option>
                        <option>Credit Card</option>
                        <option>MTN Mobile Money</option>
                        <option>Orange Money</option>
                        <option>Others</option>

                    </select>

                        <label for="phone_number"></label>
                        <textarea rows="4" cols="50" name="payment_details"  class="form-control input-md"
                                  placeholder="Enter Payment details here (If you choose payment by MTN Mobile Money or by Orange money, Enter the phone number for you account)" required></textarea>

                        <label for="phone_number"></label>
                        <input type="text" style="height:50px" name="phone_number" id="phone_number" class="form-control input-md" value="{{old('payment_details', request()->payment_details)}}"
                                                                 placeholder="Your phone number (9 digits)" required>
            <div class="col-md-8">
                <label class="padding7" for="activate">
                    <input class="custom_icheck custom-checkbox pos-rel p-l-30" type="checkbox"
                           id="activate" name="activate" required> &nbsp;I agree</label> to the <a href="#">Terms and Conditions</a>
                <br>
            </div>
        <div class="row mar-10">
            <div class="col-6 col-md-6">
                <button type="submit" name="submit" id="submit"
                        class="btn btn-primary btn-block btn-md" >Submit</button>
            </div>
            <div class="col-6 col-md-6">
                <button type="reset"  id="reset"
                        class=" btn btn-danger btn-block btn-md ">Cancel</button>
            </div>
        </div>
        </form>


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
