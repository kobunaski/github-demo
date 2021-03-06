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
                @foreach($scheduleslot as $schedules)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="admin_asset/img/courses/1.jpg" alt=""></a>
                                <h2>{{$schedules->id}}</h2>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Slot: </b>{{$slot[($schedules -> idSlot) - 1] -> id}}</p>

                                <p><span><i class="fa fa-clock"></i></span> <b>From: </b>@foreach($schedule as $sche)
                                        @if($schedules -> idSchedule == $sche -> id)
                                            {{$sche -> startTime}}
                                        @endif
                                    @endforeach</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>To: </b>@foreach($schedule as $sche)
                                        @if($schedules -> idSchedule == $sche -> id)
                                            {{$sche -> endTime}}
                                        @endif
                                    @endforeach</p>

                                <p><span><i class="fa fa-clock"></i></span> <b>Day: </b>{{$schedules->day}}</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Room: </b>@foreach($room as $rm)
                                        @if($schedules -> idRoom == $rm -> id)
                                            {{$rm -> id}}
                                        @endif
                                    @endforeach</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Course name: </b>@foreach($course as $cour)
                                        @if($schedules -> idCourse == $cour -> id)
                                            {{$cour -> courseName}}
                                        @endif
                                    @endforeach</p>
                            </div>
                            <div class="product-buttons">
                                <a type="button" class="button-default cart-btn" href="admin/scheduleslot/edit/{{$schedules->id}}">Read More</a>
                                <a type="button" class="button-default cart-btn" href="admin/scheduleslot/delete/{{$schedules->id}}">Delete news</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
