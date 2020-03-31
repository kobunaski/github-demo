@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">
        <form action="client/staff/reallocate" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <!-- select options  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end select options  -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Students</h5>

                        <div class="card-body">
                            <select name="idTutor" class="form-control" id="input-select">
                                <option value="none" selected="" disabled="">Select Tutor to reallocate</option>
                                @foreach ($user as $us)
                                    @if($us -> idRole == 2 || $us -> idRole == 5)
                                        <option value="{{$us -> id}}" >{{$us -> name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Course</th>
                                        <th>Subject</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Tutor</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($coursedetail as $crd)
                                        @if($crd -> idCourse == $nameCourse)
                                            <tr>
                                                <td><label
                                                        class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" name="idCoursedetail[]"
                                                               class="custom-control-input"
                                                               value={{$crd -> id}}><span
                                                            class="custom-control-label">Check</span>
                                                    </label></td>
                                                <td hidden name="id">{{$crd -> id}}</td>
                                                @foreach($course as $cr)
                                                    @if($crd -> idCourse == $cr -> id)
                                                        <td>{{$cr -> courseName}}</td>
                                                    @endif
                                                @endforeach
                                                @foreach($subject as $sub)
                                                    @if($crd -> idSubject == $sub -> id)
                                                        <td>{{$sub -> nameSubject}}</td>
                                                    @endif
                                                @endforeach
                                                @foreach($user as $us)
                                                    @if($crd -> idStudent == $us -> id)
                                                        <td>{{$us -> name}}</td>
                                                    @endif
                                                @endforeach
                                                @foreach($user as $us)
                                                    @if($crd -> idStudent == $us -> id)
                                                        <td>{{$us -> email}}</td>
                                                    @endif
                                                @endforeach
                                                @foreach($user as $us)
                                                    @if($crd -> idTutor == $us -> id)
                                                        <td>{{$us -> name}}</td>
                                                    @endif
                                                @endforeach
                                            </tr>
                                    @endif
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table  -->
                <!-- ============================================================== -->
            </div>

        </form>
    </div>
@endsection
