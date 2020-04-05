<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="client_asset/vendor/bootstrap/css/bootstrap.min.css">
    <link href="client_asset/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="client_asset/libs/css/style.css">
    <link rel="stylesheet" href="client_asset/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .hero{
          height: 100%;
          width: 100%;
          background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(admin_asset/img/greenwich.jpg);
          background-position: center;
          background-size: cover;
          position: absolute;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="hero">
<div class="splash-container" >
    <div class="card " style="
    position: absolute;
    top: 40%;
    transform: translate(-50%, -50%);
    left: 50%;
">
        <div class="card-header text-center"><a href=""><h1>Academic Portal</h1></a></div>
        <!-- <img src="client_asset/img/Greenwich_logo.jpg" alt="">
         -->
        <div class="card-body">
            <form action="client/login" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="email" id="email" type="text" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>

</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="client_asset/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="client_asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
