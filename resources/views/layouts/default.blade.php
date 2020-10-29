<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
        | Welcome to Josh Frontend
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom1.css') }}">
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <!-- Header Start -->
    <header>
        <!--Icon Section Start-->
        <div class="icon-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-8 col-md-4 mt-2">
                        <ul class="list-inline">
                            <li>
                                <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-4 col-md-8 text-right mt-2">
                        <ul class="list-inline">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#fff"></i></a>
                                <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a
                                        href="mailto:" class="text-white">info@admin.com</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#fff"></i></a>
                                <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a
                                        href="tel:" class="text-white">(703)
                                        717-4200</a></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container indexpage">


            <!-- Nav bar End -->
        </div>
    </header>

    <!-- //Header End -->

    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')



    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/lib.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
    <script>
        $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
    </script>
</body>

</html>
