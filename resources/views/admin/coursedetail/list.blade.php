@extends('admin.layout.index')

@section('content')
    <div class="courses-area">
        <div class="container-fluid">

            <h1>
                Course Management
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
                @foreach($coursedetail as $rl)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="admin_asset/img/courses/1.jpg" alt=""></a>
                                @foreach($course as $co)
                                    @if($rl -> idCourse == $co -> id)
                                        <h2>{{$co->courseName}}</h2>
                                    @endif
                                @endforeach
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Subject Name: </b>
                                    @foreach($subject as $sj)
                                        @if($rl -> idSubject == $sj -> id)
                                            {{$sj -> nameSubject}}
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Tutor Name: </b>
                                    @foreach($user as $us)
                                        @if($rl -> idTutor == $us -> id)
                                            {{$us -> name}}
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                            <div class="product-buttons">
                                <a type="button" class="button-default cart-btn" href="admin/coursedetail/edit/{{$rl->id}}">Edit course detail</a>
                                <br>
                                <a type="button" class="button-default cart-btn" href="admin/coursedetail/delete/{{$rl->id}}">Delete course detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
