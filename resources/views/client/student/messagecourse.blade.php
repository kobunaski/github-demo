@extends('client.layout.index')
@section('contentClient')
    <br/>
    @foreach($course as $cour)
        <div><h3>{{$cour -> courseName}}</h3></div>
    @endforeach
    <div class="chat-module">
        <div class="chat-module-top">
            <div class="chat-module-body">

    @foreach($messagebox as $crd)
        @if($crd -> idCourse == $nameCourse)
                        <div class="media chat-item">
                            @foreach($user as $us)
                                @if($crd -> idUser == $us -> id)
                                    <img  src="admin_asset/upload/image/user/{{$us->image}}"  class="rounded-circle user-avatar-lg">
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

    </div>
    <div>
        <h4>Wirte something...</h4>
        <form role="form" action="client/student/messagecourse/{{$cour->id}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group" >
                <textarea name="messageContent" class="form-control" row="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

@endsection
