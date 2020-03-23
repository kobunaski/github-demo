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
                @foreach($blogging as $blog)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="admin_asset/img/courses/1.jpg" alt=""></a>
                                <h2>{{$blog->id}}</h2>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Link: </b>{{$blog->content}}</p>
                            </div>
                            <div class="product-buttons">
                                <a type="button" class="button-default cart-btn" href="admin/blogging/edit/{{$blog->id}}">Read </a>
                                <a type="button" class="button-default cart-btn" href="admin/blogging/delete/{{$blog->id}}">Delete </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
