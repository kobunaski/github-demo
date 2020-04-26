@extends('client.layout.index')
@section('contentClient')
    <div style="padding-bottom: 5px;" class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <a href="client/student/schedulelist">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div style="font-size: 30px" class="widget-heading ">Course: {{$count}}</div>
                            </div>
                            <div class="widget-content-right">
                                <i style="font-size: 35px;" class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4">
                <a href="client/student/blogginglist">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div style="font-size: 30px" class="widget-heading ">Subject: {{$count}}</div>
                            </div>
                            <div class="widget-content-right">
                                <i style="font-size: 35px;" class="fas fa-book"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
