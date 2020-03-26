<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="{{asset('')}}">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="admin_asset/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="admin_asset/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    {{--../../../../public/admin_asset/css/--}}
    <link rel="stylesheet" href="admin_asset/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/owl.carousel.css">
    <link rel="stylesheet" href="admin_asset/css/owl.theme.css">
    <link rel="stylesheet" href="admin_asset/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="admin_asset/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="admin_asset/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="admin_asset/css/responsive.css">
    <!-- modernizr JS
		============================================ -->


    <script src="admin_asset/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div id="myTabContent" class="tab-content custom-product-edit">
    <div class="product-tab-list tab-pane fade active in" id="description">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Login</h1>
                <div class="review-content-section">
                    <div id="dropzone1" class="pro-ad">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors -> all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('notificate'))
                            <div class="alert alert-success">
                                {{session('notificate')}}
                            </div>
                        @endif
                        <form action="admin/login" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="payment-adress">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
