@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">
        <div><h3>Select class to view student and details</h3></div>
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
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Subject List</h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="media">
                            {{--<img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-3.jpg" alt="Generic placeholder image">--}}
                            @foreach ($unique_subject as $uc)
                                @foreach ($subject as $sj)
                                    @if($sj -> id == $uc)
                                        <div class="media-body">
                                            <a href="client/student/uploaddoc/detail/{{$uc}}" class="mt-0 mb-1">{{$sj -> nameSubject}}</a>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <a class="btn btn-primary" href="client/student/viewdoc">View Uploaded Document</a>
            </div>
        </div>
    </div>
@endsection
