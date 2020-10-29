<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="/">
                    <!-- logo for regular state and mobile devices -->
                    <h3><b>Crypto</b>Admin</h3>
                </a>
            </div>
            <div class="profile-pic">
                <img src="{{ asset('images/authors/avatar3.png') }}" alt="user">
                <div class="profile-info"><h5 class="mt-15">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</h5>
                    <div class="text-center d-inline-block">
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
                        <a href="" class="link px-15" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
                        <a href="{{ URL::to('admin/logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

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
                    <li><a href="#"><i class="ti-more"></i>Transactions</a></li>
                    <li><a href="#"><i class="ti-more"></i>Top Gainers/Losers</a></li>
                    <li><a href="#"><i class="ti-more"></i>Market Capitalizations</a></li>
                    <li><a href="#"><i class="ti-more"></i>Crypto Stats</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="ti-reload"></i>
                    <span>Currency Exchange</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="ti-panel"></i>
                    <span>Live crypto Prices</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="ti-more"></i>Ticker</a></li>
                    <li><a href="#"><i class="ti-more"></i>Live Crypto Prices</a></li>
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
                    <li><a href="#"><i class="ti-more"></i>Transactions Tables</a></li>

                </ul>
            </li>



            <li>
                <a href="{{ URL::to('admin/logout') }}">
                    <i class="ti-power-off"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>
</aside>
