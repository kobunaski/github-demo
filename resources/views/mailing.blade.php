Student will study in course:
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
And the tutor of the course is:
@foreach($user as $us)
    @if($us -> id == $idTutor)
        {{$us -> name}}.
    @endif
@endforeach

