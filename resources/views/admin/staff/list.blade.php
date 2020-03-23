@extends('admin.layout.index')

@section('content')
    <div class="courses-area">
        <div class="container-fluid">

            <h1>
                Staff Management
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
                @foreach($staff as $rl)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="{{$rl->image}}" alt="" style="width: 50%; height: 50%"></a>
                                <h2>{{$rl->fullName}}</h2>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Role Name: </b>{{$role[($rl -> idRole) - 1] -> roleName}}</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Salary: </b>{{$rl -> salary}}</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Address: </b>{{$rl -> address}}</p>
                            </div>
                            <div class="product-buttons">
                                <a type="button" class="button-default cart-btn" href="admin/staff/edit/{{$rl->id}}">Edit staff</a>
                                <br>
                                <a type="button" class="button-default cart-btn" href="admin/staff/delete/{{$rl->id}}">Delete staff</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
