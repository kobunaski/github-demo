@extends('client.layout.index')

@section('header')
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection

@section('contentClient')



    <div class="container-fluid  dashboard-content">
        <form action="client/staff/reallocate" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="select">
                        <h3 class="section-title">Reallocate Tutors to students</h3>
                        <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple
                            sizes, states, and more.</p>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Choose Tutor to reallocate</h5>
                        <div class="card-body">
                            <div class="form-group">
                                {{--<label for="input-select">Example Select</label>--}}
                                <select name="idTutor" class="form-control" id="input-select">
                                    <option value="none" selected="" disabled="">Select Tutor to reallocate</option>
                                    @foreach ($user as $us)
                                        @if($us -> idRole == 2 || $us -> idRole == 5)
                                            <option value="{{$us -> id}}">{{$us -> name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- ============================================================== -->
                <!-- basic table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Your Student:</h5>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table  -->
                <!-- ============================================================== -->
            </div>
            <div class="col-sm-6 pl-0">
                <p class="text-right">
                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                    <button class="btn btn-space btn-secondary">Cancel</button>
                </p>
            </div>
        </form>
    </div>



    {{--<div class="container-fluid  dashboard-content">--}}
        {{--<form action="client/staff/reallocate" method="POST">--}}
            {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}
            {{--<!-- ============================================================== -->--}}
            {{--<!-- end pageheader -->--}}
            {{--<!-- ============================================================== -->--}}
            {{--<!-- select options  -->--}}
            {{--<!-- ============================================================== -->--}}

            {{--<!-- ============================================================== -->--}}
            {{--<!-- end select options  -->--}}
            {{--<div class="row">--}}
                {{--<!-- ============================================================== -->--}}
                {{--<!-- basic table  -->--}}
                {{--<!-- ============================================================== -->--}}
                {{--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
                    {{--<div class="card">--}}
                        {{--<h5 class="card-header">Students</h5>--}}

                        {{--<div class="card-body">--}}
                            {{--<select name="idTutor" class="form-control" id="input-select">--}}
                                {{--<option value="none" selected="" disabled="">Select Tutor to reallocate</option>--}}
                                {{--@foreach ($user as $us)--}}
                                    {{--@if($us -> idRole == 2 || $us -> idRole == 5)--}}
                                        {{--<option value="{{$us -> id}}">{{$us -> name}}</option>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        {{--<div class="card-body">--}}
                            {{--<div class="table-responsive">--}}
                                {{--<table class="table table-striped table-bordered first">--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th>Action</th>--}}
                                        {{--<th>Course</th>--}}
                                        {{--<th>Subject</th>--}}
                                        {{--<th>Name</th>--}}
                                        {{--<th>Email</th>--}}
                                        {{--<th>Tutor</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}

                                    {{--@foreach($coursedetail as $crd)--}}
                                        {{--@if($crd -> idCourse == $nameCourse)--}}
                                            {{--<tr>--}}
                                                {{--<td><label--}}
                                                        {{--class="custom-control custom-checkbox custom-control-inline">--}}
                                                        {{--<input type="checkbox" name="idCoursedetail[]"--}}
                                                               {{--class="custom-control-input"--}}
                                                               {{--value={{$crd -> id}}><span--}}
                                                            {{--class="custom-control-label">Check</span>--}}
                                                    {{--</label></td>--}}
                                                {{--<td hidden name="id">{{$crd -> id}}</td>--}}
                                                {{--@foreach($course as $cr)--}}
                                                    {{--@if($crd -> idCourse == $cr -> id)--}}
                                                        {{--<td>{{$cr -> courseName}}</td>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                                {{--@foreach($subject as $sub)--}}
                                                    {{--@if($crd -> idSubject == $sub -> id)--}}
                                                        {{--<td>{{$sub -> nameSubject}}</td>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                                {{--@foreach($user as $us)--}}
                                                    {{--@if($crd -> idStudent == $us -> id)--}}
                                                        {{--<td>{{$us -> name}}</td>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                                {{--@foreach($user as $us)--}}
                                                    {{--@if($crd -> idStudent == $us -> id)--}}
                                                        {{--<td>{{$us -> email}}</td>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                                {{--@foreach($user as $us)--}}
                                                    {{--@if($crd -> idTutor == $us -> id)--}}
                                                        {{--<td>{{$us -> name}}</td>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--</tr>--}}
                                    {{--@endif--}}
                                    {{--@endforeach--}}
                                {{--</table>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6 pl-0">--}}
                            {{--<p class="text-right">--}}
                                {{--<button type="submit" class="btn btn-space btn-primary">Submit</button>--}}
                                {{--<button class="btn btn-space btn-secondary">Cancel</button>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- ============================================================== -->--}}
                {{--<!-- end basic table  -->--}}
                {{--<!-- ============================================================== -->--}}
            {{--</div>--}}

        {{--</form>--}}
    {{--</div>--}}
@endsection

@section('script')
    <script src="client_asset/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="client_asset/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="client_asset/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="client_asset/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
@endsection
