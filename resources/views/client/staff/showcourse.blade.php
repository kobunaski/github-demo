@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">

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
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Course</th>
                                    <th>Subject</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($coursedetail as $crd)
                                    @if($crd -> idCourse == $nameCourse)
                                        <tr>
                                            @foreach($user as $us)
                                                @if($crd -> idStudent == $us -> id)
                                                    <td><label class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" name="student[]"
                                                                   class="custom-control-input" value={{$us -> id}}><span
                                                                class="custom-control-label">Check</span>
                                                        </label></td>
                                                @endif
                                            @endforeach
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
                                        </tr>
                                @endif
                                @endforeach

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>


    </div>
@endsection
