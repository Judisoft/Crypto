<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Crypto Admin - Responsive Bootstrap Admin HTML Templates + Bitcoin Dashboards + ICO </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    <!-- Admin skins -->
    <link rel="stylesheet" href="{{asset('admin/css/skin_color.css')}}">

</head>
<body class="hold-transition theme-mix bg-img rtl" style="background-image: url({{asset('images/auth-bg/bg.jpg')}})" data-overlay="3">

<div class="auth-2-outer row align-items-center h-p100 m-0">
    <div class="auth-2">
        <div class="auth-logo font-size-30">
            <a href="../index.html" class="text-dark"><b>Crypto</b>Admin</a>
        </div>
        <!-- /.login-logo -->
        <div class="auth-body">
            <p class="auth-msg text-black-50">Sign in to start your session</p>

            <form action="#" method="post" class="form-element">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="ion ion-email form-control-feedback text-dark"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="ion ion-locked form-control-feedback text-dark"></span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="checkbox">
                            <input type="checkbox" id="basic_checkbox_1">
                            <label for="basic_checkbox_1" class="text-dark">Remember Me</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <div class="fog-pwd">
                            <a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-rounded my-20 btn-success">SIGN IN</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="text-center text-dark">
                <p class="mt-50">- Sign With -</p>
                <p class="gap-items-2 mb-20">
                    <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-round btn-google" href="#"><i class="fa fa-google"></i></a>
                    <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
                </p>
            </div>
            <!-- /.social-auth-links -->

            <div class="margin-top-30 text-center text-dark">
                <p>Don't have an account? <a href="auth_register.html" class="text-info m-l-5">Sign Up</a></p>
            </div>

        </div>
    </div>

</div>


<!-- jQuery 3 -->
<script src="{{asset('admin/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>

<!-- fullscreen -->
<script src="{{asset('admin/assets/vendor_components/screenfull/screenfull.js')}}"></script>

<!-- popper -->
<script src="{{('admin/assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{('admin/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
