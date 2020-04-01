@extends('client.layout.index')
@section('contentClient')
    <br/>
    <div><h3>Select class to start conversation</h3></div>
    <form action="client/student/messagebox" method="POST" class="dropzone dropzone-custom needsclick add-professors"
          id="demo1-upload">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <select name="nameCourse" class="form-control" id="input-select">
                    <option value="none" selected="" disabled="">Select Course</option>
                    @foreach($coursedetail as $cd)
                        @if($cd -> idStudent == Auth::User() -> id)
                            @foreach ($course as $co)
                                @if($cd -> idCourse == $co -> id)
                                    <option value="{{$co -> id}}">{{$co -> courseName}}</option>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </select>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="payment-adress">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                </div>
            </div>
        </div>
    </form>

@endsection
