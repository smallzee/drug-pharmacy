<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin - {{ env('APP_NAME') }}</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{url('assets/admin/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{url('assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/css/skin_color.css')}}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{url('images/bg.jpg')}})" data-overlay="2">

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-12">
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded shadow-lg">
                        <div class="content-top-agile p-20 pb-0">
                            <h2 class="text-primary">Let's Get Started</h2>
                            <p class="mb-0">Sign in to continue to {{ env('APP_NAME') }}.</p>
                        </div>

                        <div class="text-center">
                            <img src="{{url('images/logo.png')}}" style=" margin-top: 20px; width: 100px; height: 100px;" alt="">
                        </div>

                        <div class="p-40">
                            <form action="{{route('login.store')}}" method="post">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="email" name="email_address" required class="form-control pl-15 bg-transparent" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="password" name="password" required class="form-control pl-15 bg-transparent" placeholder="Password">
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
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-danger btn-block mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                        </div>
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
