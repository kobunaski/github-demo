@extends('admin.layout.index')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-payment-inner-st">
                <ul id="myTabedu1" class="tab-review-design">
                    <li class="active"><a href="#description">Basic Information</a></li>
                    <li><a href="#reviews"> Account Information</a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div id="dropzone1" class="pro-ad">
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
                                        <form action="admin/student/edit/{{$student->id}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="fullName" type="text" class="form-control" placeholder="Full Name" value="{{$student->fullName}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="userName" type="text" class="form-control" placeholder="User name" value="{{$student->userName}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="password" type="password" class="form-control" placeholder="Password" value="{{$student->password}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" type="text" class="form-control" placeholder="Email" value="{{$student->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="phone" type="number" class="form-control" placeholder="Phone" value="{{$student->phone}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="dateOfBirth" type="date" class="form-control" placeholder="Date of birth" value="{{$student->dateOfBirth}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="address" type="text" class="form-control" placeholder="Address" value="{{$student->address}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <p><img width="400px" src="admin_asset/upload/image/student/{{$student->image}}" alt="" /> </p>
                                                        <input name="image" type="file" class="form-control" value="{{$student->image}}">
                                                    </div>
                                                    {{--                                                <div class="form-group alert-up-pd">--}}
                                                    {{--                                                    <div class="dz-message needsclick download-custom">--}}
                                                    {{--                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>--}}
                                                    {{--                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>--}}
                                                    {{--                                                        <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>--}}
                                                    {{--                                                        </p>--}}
                                                    {{--                                                        <input name="imageico" class="hd-pro-img" type="text" />--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="idSchedule" type="text" class="form-control" placeholder="Id schedule" value="{{$student->idSchedule}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="gender" class="form-control">
                                                            @if($student -> gender == 'F')
                                                                <option value="none" disabled="">Select Gender</option>
                                                                <option value="M">Male</option>
                                                                <option value="F" selected="">Female</option>
                                                            @else
                                                                <option value="none" disabled="">Select Gender</option>
                                                                <option value="M" selected="">Male</option>
                                                                <option value="F">Female</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <a>Status</a>
                                                        @if($student -> status == 1)
                                                            <input type="checkbox" name="status" value=1 checked />
                                                        @else
                                                            <input type="checkbox" name="status" value=1 />
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
