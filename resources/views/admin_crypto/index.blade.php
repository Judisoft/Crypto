@include('layouts.header')
@include('layouts.sidebar')


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
                                    <li class="nav-item bt-2 border-primary"> <a href="#navpills-2" class="nav-link no-radius" data-toggle="tab" aria-expanded="false">PRICES</a> </li>
                                    <li class="nav-item bt-2 border-success"> <a href="#navpills-3" class="nav-link no-radius" data-toggle="tab" aria-expanded="true">PENDING TRADES</a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="navpills-1" class="tab-pane active">
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
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx&nbsp;BTC</td>
                                                    <td>xxx</td>
                                                    <td class="text-success">Buy</td>
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
                                                    <th scope="col">Crypto</th>
                                                    <th scope="col">Ticker</th>
                                                    <th scope="col">Usd rate</th>
                                                    <th scope="col">Buying Price</th>
                                                    <th scope="col">Selling Price</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>xxx</td>
                                                    <td class="">xxx</td>
                                                    <td class="">xxx</td>
                                                    <td class="">xxx</td>
                                                    <td class="">xxx</td>
                                                    <td class="text-success">Buy</td>
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
                                                    <th scope="col">Crypto</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Buy/Sell</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>

                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td class="text-danger"></td>
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
                                                    <th>Total: (FCFA)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr><td>XXX</td> <td><i class="cc BTC font-size-14 mr-5"></i> XXX</td><td>XXX</td></tr>
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
                                            Total: XXX
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="table-responsive buy-sall-table">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th width="25%">Price/ BTC</th>
                                                    <th>BTC Amount</th>
                                                    <th>Total: (FCFA)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr><td>xxx</td> <td><i class="cc BTC font-size-14 mr-5"></i> xxx</td><td>xxx</td></tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-12 col-12">
                                <div class="box">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <h3>SET CRYPTOCURRENCY PRICES </h3>
                                            <div class="controls">
                                                <form action="{{ action('Admin_cryptoController@store') }}" method="post" >
                                                    <!-- CSRF field -->
                                                    {{csrf_field()}}
<hr>
                                                    <label>CRYPTOCURRENCY TO TRADE </label>
                                                    <select style="height:50px"  class="form-control" name="currency_name" required >
                                                        <option value="" selected disabled hidden>Select Currency to Set</option>
                                                        <option>Bitcoin</option>
                                                        <option>Bitcoin cash</option>
                                                        <option>Chain link</option>
                                                        <option>Ethereum</option>
                                                        <option>Tether</option>
                                                        <option>Tron</option>
                                                        <option>Tilly</option>
                                                        <option>XRP</option>
                                                    </select>
                                                    <label> TICKERS</label>
                                                    <select style="height:50px"  class="form-control" name="ticker" required >
                                                        <option value="" selected disabled hidden>Select Currency to Set</option>
                                                        <option>BCH</option>
                                                        <option>BTC</option>
                                                        <option>ETH</option>
                                                        <option>TRX</option>
                                                        <option>TILY</option>
                                                        USDT
                                                        <option>XRP</option>
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
                                                    <label for="price">Tax</label>
                                                    <input type="text" class="form-control" name="tax" >
                                                    <label> </label>
                                                    <button type="submit" name="submit" id="submit"
                                                            class="btn btn-primary btn-block btn-md" >SET CRYPTO PRICE </button>
                                                </form>
                                            </div>
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

        <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
        <ul class="nav nav-tabs control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Chat</a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Users</p>
                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                </div>
                <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                    <input type="text" name="s" placeholder="Search" class="w-p100">
                </div>
                <div class="media-list media-list-hover mt-20">
                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="../images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="{{asset('images/avatar/2.jpg')}}" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="{{asset('images/avatar/3.jpg')}}" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="{{asset('images/avatar/4.jpg')}}" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="{{asset('images/avatar/1.jpg')}}" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="{{asset('images/avatar/2.jpg')}}" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="{{asset('images/avatar/3.jpg')}}" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="{{asset('images/avatar/4.jpg')}}" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Todo List</p>
                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                </div>
                <ul class="todo-list mt-20">
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                        <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                        <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                        <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                        <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                        <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                        <span class="text-line">Maecenas scelerisque</span>
                        <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                        <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                        <span class="text-line">Vivamus nec orci</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                        <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                        <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                        <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                        <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.tab-pane -->
        </div>
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
