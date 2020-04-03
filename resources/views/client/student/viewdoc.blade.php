@extends('client.layout.index')
@section('header')
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="client_asset/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection
@section('contentClient')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Uploaded Documents</h2>
                    <div class="page-breadcrumb">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
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
                                    <th>Subject</th>
                                    <th>Link</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($uploaddoc as $ud)
                                    @if($ud -> idStudent == $user_login -> id)
                                        <tr>
                                            <td><a href="client/student/edit/detail/{{$ud -> id}}" class="text-primary">Edit
                                                    link</a></td>
                                            @foreach($subject as $sj)
                                                @if($sj -> id == $ud -> idSubject)
                                                    <td>{{$sj -> nameSubject}}</td>
                                                @endif
                                            @endforeach
                                            <td><a href="{{$ud -> link}}" class="text-primary" target="_blank">View
                                                    Document</a></td>
                                            @if($ud -> comment == "")
                                                <td>Not yet</td>
                                            @else
                                                <td>{{$ud -> comment}}</td>
                                            @endif
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
