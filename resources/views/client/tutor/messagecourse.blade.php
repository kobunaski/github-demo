@extends('client.layout.index')
@section('contentClient')

    <div class="container-fluid  dashboard-content">
        <br/>
        <div><h3>{{$course -> courseName}}</h3></div>
        <div class="chat-module">
            <div class="chat-module-top">
                <div class="chat-module-body">

                    @foreach($messagebox as $crd)
                        @if($crd -> idCourse == $course -> id)
                            <div class="media chat-item">
                                @foreach($user as $us)
                                    @if($crd -> idUser == $us -> id)
                                        <img src="admin_asset/upload/image/user/{{$us->image}}"
                                             class="rounded-circle user-avatar-lg">
                                    @endif
                                @endforeach

                                <div class="media-body">
                                    <div class="chat-item-title">
                                    <span class="chat-item-author">@foreach($user as $us)
                                            @if($crd -> idUser == $us -> id)
                                                <td>{{$us -> name}}</td>
                                            @endif
                                        @endforeach</span>
                                        <span>{{$crd -> created_at}}</span>
                                    </div>
                                    <div class="chat-item-body">
                                        <p>{{$crd -> content}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div>
                <h4>Wirte something...</h4>
                <form role="form" action="client/tutor/messagecourse/{{$course->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <textarea name="messageContent" class="form-control" row="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>



@endsection
