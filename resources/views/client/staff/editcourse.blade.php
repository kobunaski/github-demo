@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">

            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <!-- select options  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="select">
                        <h3 class="section-title">Allocate Tutors and Students</h3>
                        <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple
                            sizes, states, and more.</p>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Class:</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <form action="client/staff/showcourse" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <select name="nameCourse" class="form-control" id="input-select">
                                                <option value="none" selected="" disabled="">Select Course</option>
                                                @foreach ($course as $co)
                                                    <option value="{{$co -> id}}">{{$co -> courseName}}</option>
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

                                <form action="client/staff/showcourse2" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <select name="nameSub" class="form-control" id="input-select">
                                                <option value="none" selected="" disabled="">Select Subject</option>
                                                @foreach ($subject as $sub)
                                                    <option value="{{$sub -> id}}">{{$sub -> nameSubject}}</option>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end select options  -->


    </div>
@endsection
