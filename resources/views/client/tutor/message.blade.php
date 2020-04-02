@extends('client.layout.index')
@section('contentClient')

    <div class="container-fluid  dashboard-content">
        <div><h3>Select class to start conversation</h3></div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Class List</h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="media">
                            {{--<img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-3.jpg" alt="Generic placeholder image">--}}
                            @foreach($coursedetail as $cd)
                                @if($cd -> idTutor == Auth::User() -> id)
                                    @foreach ($course as $co)
                                        @if($cd -> idCourse == $co -> id)
                                            <div class="media-body">
                                                <a href="client/tutor/messagecourse/{{$co -> id}}" class="mt-0 mb-1">{{$co -> courseName}}</a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="row">--}}
    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--<select name="nameCourse" class="form-control" id="input-select">--}}
    {{--<option value="none" selected="" disabled="">Select Course</option>--}}
    {{--@foreach($coursedetail as $cd)--}}
    {{--@if($cd -> idStudent == Auth::User() -> id)--}}
    {{--@foreach ($course as $co)--}}
    {{--@if($cd -> idCourse == $co -> id)--}}
    {{--<option value="{{$co -> id}}">{{$co -> courseName}}</option>--}}
    {{--@endif--}}
    {{--@endforeach--}}
    {{--@endif--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--</div>--}}

    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<div class="payment-adress">--}}
    {{--<button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--<form action="client/student/messagebox" method="GET" class="dropzone dropzone-custom needsclick add-professors"--}}
    {{--id="demo1-upload">--}}
    {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--<select name="nameCourse" class="form-control" id="input-select">--}}
    {{--<option value="none" selected="" disabled="">Select Course</option>--}}
    {{--@foreach($coursedetail as $cd)--}}
    {{--@if($cd -> idStudent == Auth::User() -> id)--}}
    {{--@foreach ($course as $co)--}}
    {{--@if($cd -> idCourse == $co -> id)--}}
    {{--<option value="{{$co -> id}}">{{$co -> courseName}}</option>--}}
    {{--@endif--}}
    {{--@endforeach--}}
    {{--@endif--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<div class="payment-adress">--}}
    {{--<button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}

@endsection
