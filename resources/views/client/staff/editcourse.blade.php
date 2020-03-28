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
{{--                                            <div class="form-group">--}}
{{--                                                <input name="nameCourse" class="form-control" placeholder="Enter name course">--}}
{{--                                            </div>--}}
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($coursedetail as $crd)

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
                                                    @if($crd -> idStudent == $us -> id)
                                                        <td>{{$us -> address}}</td>
                                                    @endif
                                                @endforeach
                                                @foreach($user as $us)
                                                    @if($crd -> idStudent == $us -> id)
                                                        <td>{{$us -> phone}}</td>
                                                    @endif
                                                @endforeach
                                                @foreach($user as $us)
                                                    @if($crd -> idStudent == $us -> id)
                                                        <td>{{$us -> gender}}</td>
                                                    @endif
                                                @endforeach
                                            </tr>

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

    </div>
@endsection
