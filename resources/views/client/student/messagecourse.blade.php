@extends('client.layout.index')
@section('contentClient')

    <?php
    date_default_timezone_set('asia/ho_chi_minh');
    function time_ago($timestamp)
    {
        $time_ago = strtotime($timestamp);
        $current_time = time();
        $time_difference = $current_time - $time_ago;
        $seconds = $time_difference;
        $minutes = round($seconds / 60);           // value 60 is seconds
        $hours = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec
        $days = round($seconds / 86400);          //86400 = 24 * 60 * 60;
        $weeks = round($seconds / 604800);          // 7*24*60*60;
        $months = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60
        $years = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60
        if ($seconds <= 60) {
            return "Just Now";
        } elseif ($minutes <= 60) {
            if ($minutes == 1) {
                return "one minute ago";
            } else {
                return "$minutes minutes ago";
            }
        } elseif ($hours <= 24) {
            if ($hours == 1) {
                return "an hour ago";
            } else {
                return "$hours hrs ago";
            }
        } elseif ($days <= 7) {
            if ($days == 1) {
                return "yesterday";
            } else {
                return "$days days ago";
            }
        } elseif ($weeks <= 4.3) //4.3 == 52/12
        {
            if ($weeks == 1) {
                return "a week ago";
            } else {
                return "$weeks weeks ago";
            }
        } elseif ($months <= 12) {
            if ($months == 1) {
                return "a month ago";
            } else {
                return "$months months ago";
            }
        } else {
            if ($years == 1) {
                return "one year ago";
            } else {
                return "$years years ago";
            }
        }
    }
    ?>
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
                                    <span class="chat-item-author">
                                        @foreach($user as $us)
                                            @if($crd -> idUser == $us -> id)
                                                <td>{{$us -> name}}</td>
                                            @endif
                                        @endforeach</span>
                                        <span>
                                            <?php
                                            echo time_ago($crd->created_at);
                                            ?>
                                        </span>

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
                <form role="form" action="client/student/messagecourse/{{$course->id}}" method="POST">
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
