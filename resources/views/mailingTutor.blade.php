Tutor will teach in course:
@foreach($course as $co)
    @if($co -> id == $idCourse)
        {{$co -> courseName}}.
    @endif
@endforeach
Subject:
@foreach($subject as $sj)
    @if($sj -> id == $idSubject)
        {{$sj -> nameSubject}}.<br>
    @endif
@endforeach
And the students of the course are:
@foreach($user as $us)
    @foreach($idStudent as $id)
        @if($us -> id == $id)
            {{$us -> name}}:
            {{$us -> email}}.
        @endif
    @endforeach
@endforeach

