@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
    <link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}"/>
    <!--end of page level css-->
@stop

{{-- slider --}}


{{-- content --}}
@section('content')
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

    </div>

    <!-- Accordions Section End -->
    <div class="container">
        <div class="row">
            <!-- Accordions Start -->
            <div class="text-left col-12 " >
                <h3 class="border-success"><span class="heading_border bg-success">I want to </span></h3>
            </div>
            <!-- Accordions End -->
            <div class="col-lg-8 col-lg-4 " >
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel1 index">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="nav-item ">
                                <a href="#tab_default_1" data-toggle="tab" class="nav-link active">
                                    Exchange Cryptocurrency</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_default_2" data-toggle="tab" class="nav-link">
                                    Buy Cryptocurrency </a>
                            </li>
                            <li class="clear_both nav-item">
                                <a href="#tab_default_3" data-toggle="tab" class="nav-link">
                                    Sell Cryptocurrency </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_default_4" data-toggle="tab" class="nav-link">
                                    Our Cryptocurrencies </a>
                            </li>
                        </ul>
                        <hr class="horizontalline">
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">

                                <!--form starts here -->
                                <div class="card ">
                                    <div class="card-header bg-success text-white  ">
                                                <span>
                                                    <i class="fas fa-exchange-alt" data-name="doc-portrait" data-c="#fff"
                                                       data-hc="#fff"
                                                       data-size="18" data-loop="true"></i> EXCHANGE
                                                </span>
                                        <span class="float-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-sm-6 col-lg-4 btn_margin_top">
                                                    <div class="input-group">
                                                        <select class="form-control">
                                                            <option>West African Franc (XAF)</option>
                                                            <option>Bitcoin (BTC)</option>
                                                            <option>Ethereum (ETH)</option>
                                                            <option>Tron (TRX)</option>
                                                            <option>TILLY(TILY)</option>

                                                        </select>
                                                        <input type="number" class="form-control" value="1">
                                                    </div>
                                                </div>
                                                <span>
                                                    <i class="fas fa-exchange-alt" data-name="doc-portrait" data-c="#fff"
                                                       data-hc="#fff"
                                                       data-size="18" data-loop="true"></i>
                                                </span>
                                                <div class="col-12 col-md-6 col-sm-6 col-lg-4 btn_margin_top">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" value="1">
                                                        <select class="form-control">
                                                            <option>West African Franc (XAF)</option>
                                                            <option>Bitcoin (BTC)</option>
                                                            <option>Ethereum (ETH)</option>
                                                            <option>Tron (TRX)</option>
                                                            <option>TILLY(TILY)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 col-lg-2 btn_margin_top">
                                                    <div class="input-group">

                                                        <div class="input-group-btn">
                                                            <button type="button"
                                                                    class="btn btn-info "
                                                                    data-toggle="dropdown">
                                                                Convert

                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                        <p> Display output here</p>
                                        <br>

                                    </div>
                                </div>

                                <!--form ends  here -->
                            </div>

                            <div class="tab-pane" id="tab_default_2">
                                <!--form buy -->
                                <!--form starts here -->
                                <div class="card ">
                                    <div class="card-header bg-success text-white  ">
                                                <span>
                                                    <i class="fas fa-shopping-cart" data-name="doc-portrait" data-c="#fff"
                                                       data-hc="#fff"
                                                       data-size="18" data-loop="true"></i> BUY

                                                </span>
                                        <span class="float-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-sm-6 col-lg-10 btn_margin_top">

                                            {!! Form::open(['action' => 'InvoiceController@store', 'method'=> 'POST', 'enctype'=>'multipart/form-data']) !!}
                                            <!-- CSRF Token -->
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <div class="form-group">
                                                    <label for="currency_name" class="text-primary">I want to buy</label>
                                                    <select class="form-control">
                                                        <option>bitcoin</option>
                                                        <option>tilly</option>
                                                    </select> <br>
                                                    {{Form::number('amount', '', ['id'=>'#', 'class'=>'form-control', 'placeholder'=>'Enter Amount'])}}
                                                </div>
                                                {{Form::Submit('PLACE ORDER', ['class'=>'btn btn-outline-primary col-lg-12']  )}}
                                                {!! Form::close() !!}


                                            </div>
                                        </div>
                                        <hr>
                                        <p> Display output here</p>
                                        <br>

                                    </div>
                                </div>

                                <!-- end form buy -->

                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-fluid" src="{{ asset('images/authors/img3.jpg') }}"
                                                 alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Sell
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-fluid" src="{{ asset('images/authors/img4.jpg') }}"
                                                 alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Our crypto
                                </p>
                            </div>
                        </div>
                        <!-- Tab-content End -->
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
            <div class="col-md-6 col-sm-12 col-8 col-lg-4 col-lg-2 " >
                <div id="accordion">
                    <div class="card mb-2">
                        <div class="card-header p-0" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-minus success"></i>
                                    <span class="success">What is Cryptocurrency?</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p> A cryptocurrency is a digital or virtual currency that is secured by cryptography,
                                    which makes it nearly impossible to counterfeit or double-spend.
                                    Many cryptocurrencies are decentralized networks based on blockchain technology—a distributed ledger
                                    enforced by a disparate network of computers.
                                    A defining feature of cryptocurrencies is that they are generally not issued by any central authority,
                                    rendering them theoretically immune to government interference or manipulation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header p-0" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-plus success"></i>
                                    <span class="success">What We Trade</span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header p-0" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-plus success"></i>
                                    <span class="success">Why Choose Us</span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- //Accordions Section End -->

@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/index.js') }}"></script>
    <script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
    <script>
        <!--page level js ends-->
@stop
