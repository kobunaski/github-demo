@extends('client.layout.index')

@section('contentClient')
    @if(isset($user_login))
        <div class="influence-profile">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2">Your Profile </h3>
                        <div class="page-breadcrumb">

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- profile -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- card profile -->
                    <!-- ============================================================== -->
                    {{--@foreach($User as $us)--}}

                    <div class="card">
                        <div class="card-body">
                            <div class="user-avatar text-center d-block">
                                <img src="admin_asset/upload/image/user/{{$user_login -> image}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                            </div>
                            <div class="text-center">
                                <h2 class="font-24 mb-0">{{$user_login -> name}}</h2>
                                <a href="#">Reset Password</a>
                                <p>
                                    @foreach($role as $rl)
                                        @if($rl -> id == $user_login -> idRole)
                                            Role: {{$rl -> roleName}}
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <h3 class="font-16">Contact Information</h3>
                            <div class="">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>{{$user_login-> email}}</li>
                                    <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>{{$user_login-> phone}}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body border-top">
                            <h3 class="font-16">More information</h3>
                            <div class="">
                                <ul class="mb-0 list-unstyled">
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>{{$user_login-> facebook}}</a></li>
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-twitter-square mr-1 twitter-color"></i>{{$user_login-> address}}</a></li>
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>{{$user_login-> dayOfBirth}}</a></li>
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>{{$user_login-> gender}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <h3 class="font-16">Category</h3>
                            <div>
                                <a href="#" class="badge badge-light mr-1">Fitness</a><a href="#" class="badge badge-light mr-1">Life Style</a><a href="#" class="badge badge-light mr-1">Gym</a>
                            </div>
                        </div>
                    </div>
                    {{--@endforeach--}}
                    <!-- ============================================================== -->
                    <!-- end card profile -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end profile -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- campaign data -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- campaign tab one -->
                    <!-- ============================================================== -->
                    <div class="influence-profile-content pills-regular">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                <div class="section-block">
                                    <h3 class="section-title">Edit Profile</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                    {{--<div class="mr-4">--}}
                                                        {{--<img src="client_asset/upload/image/user/" alt="" class="user-avatar-lg">--}}
                                                    {{--</div>--}}
                                                    <div class="media-body ">
                                                        <div class="influencer-profile-data">
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
                                                            <form action="client/staff/edit/{{$user_login -> id}}" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <input name="email" type="text" class="form-control" placeholder="Email" value="{{$user_login -> email}}" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="checkbox" id="changePassword" class="checkbox" name="checkpassword" value="1">
                                                                            <label>Change password?</label>
                                                                            <input name="password" type="password" class="form-control password" placeholder="Password" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="confirmPassword" type="password" class="form-control confirmPassword" placeholder="Confirm Password" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="name" type="text" class="form-control" placeholder="Name" value="{{$user_login -> name}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="address" type="text" class="form-control" placeholder="Address" value="{{$user_login -> address}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{$user_login -> phone}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="facebook" type="text" class="form-control" placeholder="Facebook" value="{{$user_login -> facebook}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            {{--<select name="idRole" class="form-control" disabled="">--}}
                                                                                {{--<option value="none" selected="" disabled="">Select Role</option>--}}
                                                                                {{--@foreach($role as $rl)--}}
                                                                                    {{--@if($rl -> id == $user_login -> idRole)--}}
                                                                                        {{--<option value="{{$rl -> id}}" selected>{{$rl -> roleName}}</option>--}}
                                                                                    {{--@else--}}
                                                                                        {{--<option value={{$rl -> id}}>{{$rl -> roleName}}</option>--}}
                                                                                    {{--@endif--}}
                                                                                {{--@endforeach--}}
                                                                            {{--</select>--}}
                                                                            <input name="gender" type="text" class="form-control" placeholder="gender" value= @if($user_login -> gender == "M") "Male" @else "Female" @endif disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="dateOfBirth" type="date" class="form-control" placeholder="Email" value="{{$user_login -> dateOfBirth}}" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="image" type="text" class="form-control" placeholder="Email" value="{{$user_login -> email}}" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="payment-adress">
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Edit</button>
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
                    <!-- ============================================================== -->
                    <!-- end campaign tab one -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end campaign data -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
        @section('script')
            <script>
                $(document).ready(function () {
                    $("#changePassword").change(function () {
                        if ($(this).is(":checked")){
                            $(".password").prop('disabled', false);
                            $(".confirmPassword").prop('disabled', false);
                        } else {
                            $(".password").attr('disabled', '');
                            $(".confirmPassword").attr('disabled', '');
                        }
                    });
                });
            </script>
        @endsection

    @endif
@endsection
