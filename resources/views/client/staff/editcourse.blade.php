@extends('client.layout.index')
@section('contentClient')
    <div class="container-fluid  dashboard-content">
        <form action="client/staff/addcourse" method="POST">
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
                                    @foreach ($course as $cod)
                                        <option value="{{$cod -> id}}">{{$cod -> courseName}}</option>
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
            <div class="col-sm-6 pl-0">
                <p class="text-right">
                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                    <button class="btn btn-space btn-secondary">Cancel</button>
                </p>
            </div>
        </form>
    </div>
@endsection
