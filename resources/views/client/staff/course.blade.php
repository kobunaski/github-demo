@extends('client.layout.index')

@section('header')
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection

@section('contentClient')
    <div class="container-fluid  dashboard-content">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors -> all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
        @endif
        @if(session('notificate'))
            <div class="alert alert-success">
                {{session('notificate')}}
            </div>
        @endif
        <form action="client/staff/course" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                </div>
            </div>
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
                                {{--<label for="input-select">Example Select</label>--}}
                                <select name="idCourse" class="form-control" id="input-select">
                                    <option value="none" selected="" disabled="">Select Course</option>
                                    @foreach ($course as $co)
                                        <option value="{{$co -> id}}">{{$co -> courseName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-header">Tutor:</h5>
                        <div class="card-body">
                            <div class="form-group">
                                {{--<label for="input-select">Example Select</label>--}}
                                <select name="idTutor" class="form-control" id="input-select">
                                    <option value="none" selected="" disabled="">Select Role</option>
                                    @foreach ($user as $us)
                                        @if ($us -> idRole == 2 || $us -> idRole == 5)
                                            <option value="{{$us -> id}}">{{$us -> name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-header">Subject:</h5>
                        <div class="card-body">
                            <div class="form-group">
                                {{--<label for="input-select">Example Select</label>--}}
                                <select name="idSubject" class="form-control" id="input-select">
                                    <option value="none" selected="" disabled="">Select Subject</option>
                                    @foreach ($subject as $sj)
                                        <option value="{{$sj -> id}}">{{$sj -> nameSubject}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $us)
                                        @if($us -> idRole == 4)
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" name="student[]"
                                                               class="custom-control-input" value={{$us -> id}}><span
                                                            class="custom-control-label">Check</span>
                                                    </label>
                                                </td>
                                                <td>{{$us -> name}}</td>
                                                <td>{{$us -> email}}</td>
                                                <td>{{$us -> address}}</td>
                                                <td>{{$us -> phone}}</td>
                                                <td>{{$us -> gender}}</td>
                                            </tr>
                                    @endif
                                    @endforeach
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
