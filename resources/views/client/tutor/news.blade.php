@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">News Objects</h2>
                    <div class="page-breadcrumb">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block">
                    <h3 class="section-title">News</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- basic media -->
        <!-- ============================================================== -->
        @foreach($news as $ns)
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">{{$ns->title}}</h5>
                        <div class="card-body">
                            <div class="media">
                                <img class="mr-3 user-avatar-lg rounded" src="admin_asset/upload/image/news/{{$ns->image}}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <p>{{$ns -> content}}</p>
                                </div>
                                <div class="product-buttons">
                                    <a type="button" class="button-default cart-btn" href="admin/news/edit/{{$ns->id}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
