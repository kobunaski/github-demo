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
                                    <form action="admin/user/add" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input name="name" type="text" class="form-control" placeholder="Full Name">
                                                </div>
                                                <div class="form-group">
                                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <input name="phone" type="number" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="form-group">
                                                    <input name="facebook" type="text" class="form-control" placeholder="Facebook">
                                                </div>
                                                <div class="form-group">
                                                    <input name="dateOfBirth" type="date" class="form-control" placeholder="Date of birth">
                                                </div>
                                                <div class="form-group">
                                                    <input name="address" type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <select name="idRole" class="form-control">
                                                        <option value="none" selected="" disabled="">Select Role</option>
                                                        @foreach($role as $rl)
                                                            <option value={{$rl -> id}}>{{$rl -> roleName}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="gender" class="form-control">
                                                        <option value="none" selected="" disabled="">Select Gender</option>
                                                        <option value="0">Male</option>
                                                        <option value="1">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input name="image" type="file" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <a>Status</a>
                                                    <input type="checkbox" name="status" value=1 />
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
