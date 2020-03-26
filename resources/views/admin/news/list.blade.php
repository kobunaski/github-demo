@extends('admin.layout.index')

@section('content')
<div class="courses-area">
    <div class="container-fluid">
        @if(session('notificate'))
            <div class="alert alert-success">
                {{session('notificate')}}
            </div>
        @endif
        <div class="row">
            @foreach($news as $ns)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner res-mg-b-30">
                    <div class="courses-title">
                        <a href="#"><img src="admin_asset/upload/image/news/{{$ns->image}}" alt=""></a>
                        <h2>{{$ns->title}}</h2>
                    </div>
                    <div class="course-des">
                        <p><span><i class="fa fa-clock"></i></span> <b>Id:</b>{{$ns->id}}</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Title:</b>{{$ns->title}}</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Content:</b>{{$ns->content}}</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Status:</b>{{$ns->status}}</p>
                    </div>
                    <div class="product-buttons">
                        <a type="button" class="button-default cart-btn" href="admin/news/edit/{{$ns->id}}">Read More</a>
                        <a type="button" class="button-default cart-btn" href="admin/news/delete/{{$ns->id}}">Delete news</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
