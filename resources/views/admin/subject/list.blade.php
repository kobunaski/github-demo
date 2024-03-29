@extends('admin.layout.index')

@section('content')
    <div class="courses-area">
        <div class="container-fluid">

            <h1>
                Subject Management
            </h1>

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

            <div class="row">
                @foreach($subject as $rl)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="admin_asset/img/courses/1.jpg"></a>
                                <h2>{{$rl->nameSubject}}</h2>
                            </div>
                            <div class="course-des">
                            </div>
                            <div class="product-buttons">
                                <a type="button" class="button-default cart-btn" href="admin/subject/edit/{{$rl->id}}">Edit subject</a>
                                <br>
                                <a type="button" class="button-default cart-btn" href="admin/subject/delete/{{$rl->id}}">Delete subject</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
