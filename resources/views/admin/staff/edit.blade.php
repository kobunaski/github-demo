@extends('admin.layout.index')

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <h2>
                            Staff Management
                        </h2>
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Basic Information</a></li>
                            <li><a href="#reviews"> Account Information</a></li>
                            <li><a href="#INFORMATION">Social Information</a></li>
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
                                                <form action="admin/staff/edit/{{$staff -> id}}" enctype="multipart/form-data" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="fullName" type="text" class="form-control" placeholder="Full Name" value="{{$staff -> fullName}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="address" type="text" class="form-control" placeholder="Address" value="{{$staff -> address}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="phone" type="number" class="form-control" placeholder="Mobile no." value="{{$staff -> phone}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="dateOfBirth" type="date" class="form-control" placeholder="Date of Birth" value="{{$staff -> dateOfBirth}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="salary" type="number" class="form-control" placeholder="Salary" value="{{$staff -> salary}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="userName" type="text" class="form-control" placeholder="Username" value="{{$staff -> userName}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="password" type="password" class="form-control" placeholder="Password" value="{{$staff -> password}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="email" type="text" class="form-control" placeholder="Email" value="{{$staff -> email}}">
                                                            </div>
                                                            {{--<div class="form-group alert-up-pd">--}}
                                                            {{--<div class="dz-message needsclick download-custom">--}}
                                                            {{--<i class="fa fa-download edudropnone" aria-hidden="true"></i>--}}
                                                            {{--<h2 class="edudropnone">Drop image here or click to upload.</h2>--}}
                                                            {{--<p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>--}}
                                                            {{--</p>--}}
                                                            {{--<input name="imageico" class="hd-pro-img" type="text" />--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    @if($staff -> gender == 'F')
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
                                                                <select name="idRole" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select Role</option>
                                                                    @foreach($role as $rl)
                                                                        @if($rl -> id == $staff -> idRole)
                                                                            <option value="{{$rl -> id}}" selected>{{$rl -> roleName}}</option>
                                                                            @else
                                                                            <option value={{$rl -> id}}>{{$rl -> roleName}}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="idSchedule" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select Schedule For Teacher</option>
                                                                    <option value="0">Gujarat</option>
                                                                    <option value="1">Maharastra</option>
                                                                    <option value="2">Rajastan</option>
                                                                    <option value="3">Maharastra</option>
                                                                    <option value="4">Rajastan</option>
                                                                    <option value="5">Gujarat</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                Select image to upload:
                                                                <img src="{{$staff -> image}}">
                                                                <input type="file" name="image" class="form-control" value={{$staff -> image}}>
                                                            </div>
                                                            <div class="form-group">
                                                                @if($staff -> status == 1)
                                                                    <input name="status" type="checkbox" class="form-control" value="1" checked>
                                                                    @else
                                                                    <input name="status" type="checkbox" class="form-control" value="1">
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
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <form id="acount-infor" action="#" class="acount-infor">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="password" type="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="confarmpassword" type="password" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Facebook URL">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Twitter URL">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Google Plus">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Linkedin URL">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
            </div>
        </div>
    </div>
@endsection
