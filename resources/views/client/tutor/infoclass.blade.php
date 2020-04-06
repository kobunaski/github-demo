@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">
        <div><h3>Select class to view student and details</h3></div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Class List</h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="media">
                            {{--<img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-3.jpg" alt="Generic placeholder image">--}}
                            @if($unique_course != 0)
                                @foreach ($unique_course as $uc)
                                    @foreach ($course as $co)
                                        @if($co -> id == $uc)
                                            <div class="media-body">
                                                <a href="client/tutor/detailclass/{{$uc}}" class="mt-0 mb-1">{{$co -> courseName}}</a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            @else
                                <div class="media-body">
                                    <span class="mt-0 mb-1">You are not teaching any course.</span>
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
