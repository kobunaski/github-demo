@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">
        <div><h3>Select subjects</h3></div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">subject List</h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="media">
                            {{--<img class=" mr-3 user-avatar-lg rounded" src="../assets/images/avatar-3.jpg" alt="Generic placeholder image">--}}
                            @foreach ($unique_subject as $usub)
                                @foreach ($subject as $sb)
                                    @if($sb -> id == $usub)
                                        <div class="media-body">
                                            <a href="client/tutor/blogging/{{$usub}}" class="mt-0 mb-1">{{$sb -> nameSubject}}</a>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
