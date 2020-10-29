<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('admin/images/favicon.ico')}}">

    <title>Crypto Admin - Responsive Bootstrap Admin HTML Templates + Bitcoin Dashboards + ICO </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css')}}">

    <!--amcharts -->
    <link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />

    <!-- Data Table-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor_components/datatable/datatables.min.css')}}"/>

    <!-- theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    <!-- Crypto Admin skins -->
    <link rel="stylesheet" href="{{asset('admin/css/skin_color.css')}}">


</head>

<body class="hold-transition dark-skin dark-sidebar sidebar-mini theme-mix fixed sidebar-collapse">

<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo">
            <!-- mini logo -->
            <div class="logo-mini">
                <span class="light-logo"><img src="{{asset('images/logo-light.png')}}" alt="logo"></span>
                <span class="dark-logo"><img src="{{asset('images/logo-dark.png')}}" alt="logo"></span>
            </div>
            <!-- logo-->
            <div class="logo-lg">
                <span class="light-logo"><img src="{{asset('images/logo-light-text.png')}}" alt="logo"></span>
                <span class="dark-logo"><img src="{{asset('images/logo-dark-text.png')}}" alt="logo"></span>
            </div>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <i class="ti-align-left"></i>
                </a>

                <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
                    <i class="mdi mdi-crop-free"></i>
                </a>

            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <!-- full Screen -->
                    <li class="search-bar">
                        <div class="lookup lookup-circle lookup-right">
                            <input type="text" name="search">
                        </div>
                    </li>


                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <div class="user-profile">
                <div class="ulogo">
                    <a href="index.html">
                        <!-- logo for regular state and mobile devices -->
                        <h3><b>Crypto</b>Admin</h3>
                    </a>
                </div>
                <div class="profile-pic">
                    <img src="{{asset('images/user5-128x128.jpg')}}" alt="user">
                    <div class="profile-info"><h5 class="mt-15">John Doe</h5>
                        <div class="text-center d-inline-block">
                            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
                            <a href="" class="link px-15" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
                            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="header nav-small-cap">PERSONAL</li>

                <li class="treeview active">
                    <a href="#">
                        <i class="ti-dashboard"></i>
                        <span>Dashboard</span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-bar-chart"></i>
                        <span>Reports</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/reports_transactions.html"><i class="ti-more"></i>Transactions</a></li>
                        <li><a href="pages/reports_top_gainers_losers.html"><i class="ti-more"></i>Top Gainers/Losers</a></li>
                        <li><a href="pages/reports_market_capitalizations.html"><i class="ti-more"></i>Market Capitalizations</a></li>
                        <li><a href="pages/reports_crypto_stats.html"><i class="ti-more"></i>Crypto Stats</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/currency_exchange.html">
                        <i class="ti-reload"></i>
                        <span>Currency Exchange</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-user"></i>
                        <span>Members</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/members_list.html"><i class="ti-more"></i>Members List</a></li>
                        <li><a href="pages/member_profile.html"><i class="ti-more"></i>Member Profile</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="pages/tickers_live_pricing.html">
                        <i class="ti-panel"></i>
                        <span>Live crypto Prices</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tickers.html"><i class="ti-more"></i>Ticker</a></li>
                        <li><a href="pages/tickers_live_pricing.html"><i class="ti-more"></i>Live Crypto Prices</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-wallet"></i>
                        <span>Transactions</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/transactions_tables.html"><i class="ti-more"></i>Transactions Tables</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="ti-files"></i>
                        <span>Layout Options</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout_boxed.html"><i class="ti-more"></i>Boxed</a></li>
                        <li><a href="pages/layout_fixed.html"><i class="ti-more"></i>Fixed</a></li>
                        <li><a href="pages/layout_collapsed_sidebar.html"><i class="ti-more"></i>Mini Sidebar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="pages/auth_login.html">
                        <i class="ti-power-off"></i>
                        <span>Log Out</span>
                    </a>
                </li>

            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Intra-day Data</h4>

                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide"  href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <div id="chartdiv21" class="h-400"></div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="box">
                            <div class="box-body no-padding">
                                <!-- Nav tabs -->
                                <ul class="nav nav-fill nav-pills margin-bottom margin-top-10">
                                    <li class="nav-item bt-2 border-warning"> <a href="#navpills-1" class="nav-link active no-radius" data-toggle="tab" aria-expanded="false">MY TRADES</a> </li>
                                    <li class="nav-item bt-2 border-primary"> <a href="#navpills-2" class="nav-link no-radius" data-toggle="tab" aria-expanded="false">MY OFFERS</a> </li>
                                    <li class="nav-item bt-2 border-success"> <a href="#navpills-3" class="nav-link no-radius" data-toggle="tab" aria-expanded="true">STOP-LIMIT</a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="navpills-1" class="tab-pane active">
                                        <div class="btn-group p-20">
                                            <button type="button" class="btn btn-primary">All</button>
                                            <button type="button" class="btn btn-success">Buy</button>
                                            <button type="button" class="btn btn-danger">Sell</button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover no-margin">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Date - Time</th>
                                                    <th scope="col">Asset</th>
                                                    <th scope="col">Base</th>
                                                    <th scope="col">Cr. Amount</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Buy/Sell</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Thu Oct 17 2019 11:03:53</td>
                                                    <td>BTC</td>
                                                    <td>USD</td>
                                                    <td>0.0099&nbsp;BTC</td>
                                                    <td>7500.000000</td>
                                                    <td class="text-success">Buy</td>
                                                </tr>
                                                <tr>
                                                    <td>Thu Oct 17 2019 11:03:53</td>
                                                    <td>BTC</td>
                                                    <td>USD</td>
                                                    <td>6874.73481179324&nbsp;USD</td>
                                                    <td>7016.438810</td>
                                                    <td class="text-danger">Sell</td>
                                                </tr>
                                                <tr>
                                                    <td>Tue Oct 15 2019 10:08:36</td>
                                                    <td>ETH</td>
                                                    <td>USD</td>
                                                    <td>0.994504&nbsp;USD</td>
                                                    <td>172.000000</td>
                                                    <td class="text-danger">Sell</td>
                                                </tr>
                                                <tr>
                                                    <td>Tue Oct 15 2019 06:38:03</td>
                                                    <td>BTC</td>
                                                    <td>USD</td>
                                                    <td>0.08428&nbsp;USD</td>
                                                    <td>172.000000</td>
                                                    <td class="text-danger">Sell</td>
                                                </tr>
                                                <tr class="filter buy">
                                                    <td>Tue Oct 15 2019 06:38:03</td>
                                                    <td>BTC</td>
                                                    <td>USD</td>
                                                    <td>0.0005&nbsp;BTC</td>
                                                    <td>172.000000</td>
                                                    <td class="text-success">Buy</td>
                                                </tr>
                                                <tr>
                                                    <td>Mon Oct 14 2019 14:39:54</td>
                                                    <td>BTC</td>
                                                    <td>USD</td>
                                                    <td>28.13926219202&nbsp;USD</td>
                                                    <td>7556.192855</td>
                                                    <td class="text-danger">Sell</td>
                                                </tr>
                                                <tr>
                                                    <td>Mon Oct 14 2019 14:37:09</td>
                                                    <td>BTC</td>
                                                    <td>USD</td>
                                                    <td>44.90991599955&nbsp;USD</td>
                                                    <td>8039.727175</td>
                                                    <td class="text-danger">Sell</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="navpills-2" class="tab-pane">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Offer Id</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Total Value</th>
                                                    <th scope="col">Buy/Sell</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Wed Oct 16 2019 09:56:03</td>
                                                    <td class="">14374</td>
                                                    <td class="">0.1</td>
                                                    <td class="">8500</td>
                                                    <td class="">850</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Wed Oct 16 2019 09:48:47</td>
                                                    <td class="">14366</td>
                                                    <td class="">0.01</td>
                                                    <td class="">6500</td>
                                                    <td class="">65</td>
                                                    <td class="text-success">Buy</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Wed Oct 16 2019 08:11:23</td>
                                                    <td class="">14263</td>
                                                    <td class="">0.0001</td>
                                                    <td class="">7500</td>
                                                    <td class="">0.75</td>
                                                    <td class="text-success">Buy</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tue Oct 15 2019 06:38:03</td>
                                                    <td class="">12714</td>
                                                    <td class="">0.0009</td>
                                                    <td class="">7000</td>
                                                    <td class="">6.3</td>
                                                    <td class="text-success">Buy</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mon Oct 14 2019 14:39:54</td>
                                                    <td class="">11758</td>
                                                    <td class="">0.001</td>
                                                    <td class="">172</td>
                                                    <td class="">0.17200000000000001</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm"> Delete</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="navpills-3" class="tab-pane">
                                        <div class="btn-group p-20">
                                            <button type="button" class="btn btn-success">Buy</button>
                                            <button type="button" class="btn btn-danger">Sell</button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Offer Id</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Stop-limit Price</th>
                                                    <th scope="col">Trigger Price</th>
                                                    <th scope="col">Buy/Sell</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Aug 28, 2019, 3:49:55 PM</td>
                                                    <td>566</td>
                                                    <td>1</td>
                                                    <td>80</td>
                                                    <td>90</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Aug 28, 2019, 3:49:55 PM</td>
                                                    <td>566</td>
                                                    <td>1</td>
                                                    <td>80</td>
                                                    <td>90</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Aug 28, 2019, 3:49:55 PM</td>
                                                    <td>566</td>
                                                    <td>1</td>
                                                    <td>80</td>
                                                    <td>90</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Aug 28, 2019, 3:49:55 PM</td>
                                                    <td>566</td>
                                                    <td>1</td>
                                                    <td>80</td>
                                                    <td>90</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Aug 28, 2019, 3:49:55 PM</td>
                                                    <td>566</td>
                                                    <td>1</td>
                                                    <td>80</td>
                                                    <td>90</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Aug 28, 2019, 3:49:55 PM</td>
                                                    <td>566</td>
                                                    <td>1</td>
                                                    <td>80</td>
                                                    <td>90</td>
                                                    <td class="text-danger">Sell</td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Modify</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">Sell</h4>
                                        <div class="box-controls pull-right">
                                            Total: 409.2820
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="table-responsive buy-sall-table">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th width="25%">Price/ BTC</th>
                                                    <th>BTC Amount</th>
                                                    <th>Total: (USD)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr><td>82.3</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.15</td><td>$ 134.7</td></tr>
                                                <tr><td>82.4</td> <td><i class="cc BTC font-size-14 mr-5"></i> 2.66</td><td>$ 238.3</td></tr>
                                                <tr><td>82.5</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.32</td><td>$ 288.6</td></tr>
                                                <tr><td>84.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 878.4</td></tr>
                                                <tr><td>95.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 958.6</td></tr>
                                                <tr><td>95.9</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.30</td><td>$ 270.4</td></tr>
                                                <tr><td>97.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.00</td><td>$ 30.2</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">Buy </h4>
                                        <div class="box-controls pull-right">
                                            Total: 406.00
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="table-responsive buy-sall-table">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th width="25%">Price/ BTC</th>
                                                    <th>BTC Amount</th>
                                                    <th>Total: (USD)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr><td>82.3</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.15</td><td>$ 134.7</td></tr>
                                                <tr><td>82.4</td> <td><i class="cc BTC font-size-14 mr-5"></i> 2.66</td><td>$ 234.3</td></tr>
                                                <tr><td>82.5</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.32</td><td>$ 288.6</td></tr>
                                                <tr><td>84.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 878.4</td></tr>
                                                <tr><td>95.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 958.6</td></tr>
                                                <tr><td>95.9</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.30</td><td>$ 270.4</td></tr>
                                                <tr><td>97.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.00</td><td>$ 30.2</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="box">
                                    <ul class="nav nav-tabs nav-tabs-danger" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active font-size-18" data-toggle="tab" href="#market" role="tab">Market</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font-size-18" data-toggle="tab" href="#limit" role="tab">Limit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font-size-18" data-toggle="tab" href="#stop" role="tab">Stop</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="box-body tab-content">
                                        <div class="tab-pane fade active show" id="market">
                                            <form>
                                                <div class="input-group mt-15 mb-20">
                                                    <input type="text" class="form-control" placeholder="2.500002121">
                                                    <span class="input-group-addon">Amount BTC</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="27800.00">
                                                    <span class="input-group-addon">Price BPL</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="2.500002121">
                                                    <span class="input-group-addon">Fee (0.5%)</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="27800.00">
                                                    <span class="input-group-addon">Total BPL</span>
                                                </div>

                                                <div class="d-flex justify-content-between pt-5">
                                                    <button type="button" class="btn btn-success">BUY</button>
                                                    <button type="button" class="btn btn-danger mt-0">SELL</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="limit">
                                            <form>
                                                <div class="input-group mt-15 mb-20">
                                                    <input type="text" class="form-control" placeholder="2.500002121">
                                                    <span class="input-group-addon">Amount BTC</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="27800.00">
                                                    <span class="input-group-addon">Price BPL</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="2.500002121">
                                                    <span class="input-group-addon">Fee (0.5%)</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="27800.00">
                                                    <span class="input-group-addon">Total BPL</span>
                                                </div>

                                                <div class="d-flex justify-content-between pt-5">
                                                    <button type="button" class="btn btn-success">BUY</button>
                                                    <button type="button" class="btn btn-danger mt-0">SELL</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="stop">
                                            <form>
                                                <div class="input-group mt-15 mb-20">
                                                    <input type="text" class="form-control" placeholder="2.500002121">
                                                    <span class="input-group-addon">Amount BTC</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="27800.00">
                                                    <span class="input-group-addon">Price BPL</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="2.500002121">
                                                    <span class="input-group-addon">Fee (0.5%)</span>
                                                </div>
                                                <div class="input-group mb-20">
                                                    <input type="text" class="form-control" placeholder="27800.00">
                                                    <span class="input-group-addon">Total BPL</span>
                                                </div>

                                                <div class="d-flex justify-content-between pt-5">
                                                    <button type="button" class="btn btn-success">BUY</button>
                                                    <button type="button" class="btn btn-danger mt-0">SELL</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-12 col-12">
                                <div class="box">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <h2>Set Crypto prices <span class="text-danger">*</span></h2>
                                            <div class="controls">
                                                <form action="{{ action('Admin_cryptoController@store') }}" method="post" >
                                                    <!-- CSRF field -->
                                                    {{csrf_field()}}

                                                    <select style="height:50px"  class="form-control" name="currency_name" required >
                                                        <option value="" selected disabled hidden>Select Currency to Set</option>
                                                        <option>Bitcoin</option>
                                                        <option>Ethereum</option>
                                                        <option>Tron</option>
                                                        <option>Tilly</option>
                                                    </select>
                                                    <label></label>
                                                    <select style="height:50px"  class="form-control" name="ticker" required >
                                                        <option value="" selected disabled hidden>Select Currency to Set</option>
                                                        <option>BTC</option>
                                                        <option>ETH</option>
                                                        <option>TRX</option>
                                                        <option>TILY</option>
                                                    </select>

                                                    <label for="usd_rate"  >USD Rate</label>
                                                    <input type="text" class="form-control" name="usd_rate" >
                                                    <label for="usd_xaf"  >USD-XAF (USD)</label>
                                                    <input type="text" class="form-control" name="usd_xaf" >

                                                    <label for="selling_price"  >Selling Price (USD)</label>
                                                    <input type="text" class="form-control" name="selling_price" >
                                                    <label> </label>
                                                    <label for="price">Buying Price (USD)</label>
                                                    <input type="text" class="form-control" name="buying_price" >
                                                    <label> </label>
                                                    <button type="submit" name="submit" id="submit"
                                                            class="btn btn-primary btn-block btn-md" >Set Price </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <p class="text-primary">BTC BALANCE</p>
                                        <h3>1249.5357 <small class="text-light">BTC</small></h3>
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-dark mr-10">SEND</button>
                                            <button type="button" class="btn btn-dark">RECEIVE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <p class="text-primary">USD BALANCE</p>
                                        <h3>7245.53 <small class="text-light">USD</small></h3>
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-dark mr-10">DEPOSIT</button>
                                            <button type="button" class="btn btn-dark">WITHDRAW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        &copy; 2020 <a href="#">Company Name</a>. All Rights Reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar">


    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>

<!-- fullscreen -->
<script src="{{asset('assets/vendor_components/screenfull/screenfull.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/vendor_components/jquery-ui/jquery-ui.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<!-- Slimscroll -->
<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>

<!-- FLOT CHARTS -->
<script src="{{asset('assets/vendor_components/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/vendor_components/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{('assets/vendor_components/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/vendor_components/Flot/jquery.flot.categories.js')}}"></script>

<!--amcharts charts -->
<script src="http://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
<script src="http://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>

<!-- webticker -->
<script src="{{asset('assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>

<!-- Crypto Admin App -->
<script src="{{asset('admin/js/template.js')}}"></script>

<!-- Crypto Admin dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/js/pages/dashboard9.js')}}"></script>
<script src="{{asset('admin/js/pages/dashboard9-chart.js')}}"></script>

<!-- Crypto Admin for demo purposes -->
<script src="{{asset('admin/js/demo.js')}}"></script>


</body>
</html>
