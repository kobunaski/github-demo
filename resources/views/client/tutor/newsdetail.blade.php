@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">{{$news -> title}}</h5>
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 user-avatar-lg rounded" src="admin_asset/upload/image/news/{{$news -> image}}"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">{{$news -> title}}</h5>
                                <p>{{$news -> content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
