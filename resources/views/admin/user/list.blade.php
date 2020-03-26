@extends('admin.layout.index')

@section('content')
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            @if(session('notificate'))
                <div class="alert alert-success">
                    {{session('notificate')}}
                </div>
            @endif
            <div class="row">
                @foreach($user as $us)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="student-inner-std res-mg-b-30">
                        <div class="student-img">
                            <img width="400px" height="50px" src="admin_asset/upload/image/student/{{$us->image}}" alt="" />
                        </div>
                        <div class="student-dtl">
                            <h2>{{$us->name}}</h2>
                            <p ><b>Email:</b> {{$us->email}}</p>
                            <p ><b>Phone:</b> {{$us->phone}}</p>
                            <p ><b>Address:</b> {{$us->address}}</p>
                            <p ><b>Date of Birth:</b> {{$us->dateOfBirth}}</p>
                        </div>
                        <div class="product-buttons">
                            <a type="button" class="button-default cart-btn" href="admin/user/edit/{{$us->id}}">Read More</a>
                            <a type="button" class="button-default cart-btn" href="admin/user/delete/{{$us->id}}">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
