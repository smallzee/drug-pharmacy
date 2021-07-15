<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title> Admin - {{ env('APP_NAME') }}</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)" data-overlay="5">

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-12">
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded shadow-lg">
                        <div class="content-top-agile p-20 pb-0">
                            <h2 class="text-primary">Let's Get Started</h2>
                            <p class="mb-0">Sign in to continue to Florence.</p>
                        </div>
                        <div class="p-40">
                            <form action="" method="post">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control pl-15 bg-transparent" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control pl-15 bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">Remember Me</label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <div class="fog-pwd text-right">
                                            <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-15 mb-0">Don't have an account? <a href="auth_register.html" class="text-warning ml-5">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="mt-20 text-white">- Sign With -</p>
                        <p class="gap-items-2 mb-20">
                            <a class="waves-effect waves-light btn btn-social btn-facebook mb-5" href="#">
                                <i class="fa fa-facebook mr-15"></i> FACEBOOK
                            </a>
                            <a class="waves-effect waves-light btn btn-social btn-twitter mb-5" href="#">
                                <i class="fa fa-twitter mr-15"></i> TWITTER
                            </a>
                            <a class="waves-effect waves-light btn btn-social btn-instagram mb-5" href="#">
                                <i class="fa fa-instagram mr-15"></i> INSTAGRAM
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Vendor JS -->
<script src="js/vendors.min.js"></script>
<script src="../assets/icons/feather-icons/feather.min.js"></script>

</body>
</html>
