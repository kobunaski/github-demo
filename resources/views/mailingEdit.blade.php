Student studies in course:
@foreach($coursedetail as $cd)
    @if($cd -> id == $idCoursedetail)
        @foreach($course as $co)
            @if($co -> id == $cd -> idCourse)
                {{$co -> courseName}}
            @endif
        @endforeach
    @endif
@endforeach
and subject:
@foreach($coursedetail as $cd)
    @if($cd -> id == $idCoursedetail)
        @foreach($subject as $sj)
            @if($sj -> id == $cd -> idSubject)
                {{$sj -> nameSubject}}
            @endif
        @endforeach
    @endif
@endforeach
will change the tutor to:
@foreach($user as $us)
    @if($us -> id == $idTutor)
        {{$us -> name}}.
    @endif
@endforeach
