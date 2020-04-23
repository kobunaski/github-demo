@extends('admin.layout.index')
@section('content')
    <!-- <script src="admin_asset/js/card/main.js" async></script> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <a href="">
                    <div style="background-color: #2196F3;" class="card mb-3 widget-content">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div style="font-size: 30px" class="widget-heading">User: {{$user}}</div>
                            </div>
                            <div class="widget-content-right">
                                <i style="font-size: 35px;" class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4">
                <a href="">
                    <div style="background-color: #2196F3;" class="card mb-3 widget-content">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div style="font-size: 30px" class="widget-heading">Courses: {{$course}}</div>
                            </div>
                            <div class="widget-content-right">
                                <i style="font-size: 35px;" class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4">
                <a href="">
                    <div style="background-color: #2196F3;" class="card mb-3 widget-content">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div style="font-size: 30px" class="widget-heading">Subject: {{$subject}}</div>
                            </div>
                            <div class="widget-content-right">
                                <i style="font-size: 35px;" class="fas fa-book"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
@endsection
