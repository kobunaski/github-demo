@extends('client.layout.index')

@section('header')
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection

@section('contentClient')



    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block" id="select">
                    <h3 class="section-title">Students in course: {{$course -> courseName}}</h3>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Upload status</th>
                                    <th>Comment</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($coursedetail as $crd)
                                    @if($crd -> idCourse == $course -> id)
                                        <tr>

                                            @foreach($user as $us)
                                                @if($crd -> idStudent == $us -> id)
                                                    <td>
                                                        <a class="text-dark"
                                                           href="client/tutor/detailstudent/{{$us -> id}}">Click to
                                                            view</a>
                                                    </td>
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

                                            @foreach($subject as $sub)
                                                @if($crd -> idSubject == $sub -> id)
                                                    <td>{{$sub -> nameSubject}}</td>
                                                @endif
                                            @endforeach

                                            @foreach($uploaddoc as $ud)
                                                @if($ud -> idStudent == $crd -> idStudent && $ud -> idSubject == $crd -> idSubject)
                                                    <td><a href="{{$ud -> link}}" target="_blank">View document</a></td>
                                                @elseif($ud -> idStudent != $crd -> idStudent || $ud -> idSubject != $crd -> idSubject)

                                                @else
                                                    <td>Not yet</td>
                                                    <td></td>
                                                @endif
                                            @endforeach

                                            @foreach($uploaddoc as $ud)
                                                @if($ud -> idStudent == $crd -> idStudent && $ud -> idSubject == $crd -> idSubject)
                                                    <form action="client/tutor/addComment/{{$ud -> id}}" method="POST">
                                                        <input type="hidden" name="_token"
                                                               value="{{csrf_token()}}"/>
                                                        <td>
                                                            <input type="hidden" name="idCourse" value="{{$course -> id}}">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Comment on student" name="comment"
                                                                   value="{{$ud -> comment}}">
                                                        </td>
                                                        <td>
                                                            <button type="submit" class="btn btn-primary">Comment
                                                            </button>
                                                        </td>
                                                    </form>
                                                @elseif($ud -> idStudent != $crd -> idStudent || $ud -> idSubject != $crd -> idSubject)

                                                @else
                                                    <td>Not yet</td>
                                                    <td></td>
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
