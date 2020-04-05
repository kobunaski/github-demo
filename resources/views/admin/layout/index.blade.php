<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Greenwich Project</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- x-editor CSS
    ============================================ -->
    <link rel="stylesheet" href="admin_asset/css/editor/select2.css">
    <link rel="stylesheet" href="admin_asset/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="admin_asset/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="admin_asset/css/editor/x-editor-style.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="admin_asset/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="admin_asset/css/data-table/bootstrap-editable.css">
    <!-- buttons CSS
    ============================================ -->
    <link rel="stylesheet" href="admin_asset/css/buttons.css">
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

@include('admin.layout.menu')
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.header')
    @yield('content')


    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://kit.fontawesome.com/05bbfcd242.js" crossorigin="anonymous"></script>

<!-- jquery
    ============================================ -->
<script src="admin_asset/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="admin_asset/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="admin_asset/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="admin_asset/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="admin_asset/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="admin_asset/js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="admin_asset/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="admin_asset/js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="admin_asset/js/counterup/jquery.counterup.min.js"></script>
<script src="admin_asset/js/counterup/waypoints.min.js"></script>
<script src="admin_asset/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="admin_asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="admin_asset/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="admin_asset/js/metisMenu/metisMenu.min.js"></script>
<script src="admin_asset/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="admin_asset/js/morrisjs/raphael-min.js"></script>
<script src="admin_asset/js/morrisjs/morris.js"></script>
<script src="admin_asset/js/morrisjs/morris-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="admin_asset/js/sparkline/jquery.sparkline.min.js"></script>
<script src="admin_asset/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="admin_asset/js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="admin_asset/js/calendar/moment.min.js"></script>
<script src="admin_asset/js/calendar/fullcalendar.min.js"></script>
<script src="admin_asset/js/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="admin_asset/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="admin_asset/js/main.js"></script>
<!-- tawk chat JS
    ============================================ -->
<script src="admin_asset/js/tawk-chat.js"></script>
<!-- data table JS
============================================ -->
<script src="admin_asset/js/data-table/bootstrap-table.js"></script>
<script src="admin_asset/js/data-table/tableExport.js"></script>
<script src="admin_asset/js/data-table/data-table-active.js"></script>
<script src="admin_asset/js/data-table/bootstrap-table-editable.js"></script>
<script src="admin_asset/js/data-table/bootstrap-editable.js"></script>
<script src="admin_asset/js/data-table/bootstrap-table-resizable.js"></script>
<script src="admin_asset/js/data-table/colResizable-1.5.source.js"></script>
<script src="admin_asset/js/data-table/bootstrap-table-export.js"></script>
<!--  editable JS
============================================ -->
<script src="admin_asset/js/editable/jquery.mockjax.js"></script>
<script src="admin_asset/js/editable/mock-active.js"></script>
<script src="admin_asset/js/editable/select2.js"></script>
<script src="admin_asset/js/editable/moment.min.js"></script>
<script src="admin_asset/js/editable/bootstrap-datetimepicker.js"></script>
<script src="admin_asset/js/editable/bootstrap-editable.js"></script>
<script src="admin_asset/js/editable/xediable-active.js"></script>
<!-- Chart JS
============================================ -->
<script src="admin_asset/js/chart/jquery.peity.min.js"></script>
<script src="admin_asset/js/peity/peity-active.js"></script>
<!-- tab JS
============================================ -->
<script src="admin_asset/js/tab.js"></script>
</body>

</html>
