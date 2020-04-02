@extends('client.layout.index')

@section('contentClient')
    <div class="influence-profile">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2">{{$user -> name}}'s profile</h3>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="user-avatar text-center d-block">
                                <img src="admin_asset/upload/image/user/{{$user -> image}}" alt="User Avatar"
                                     class="rounded-circle user-avatar-xxl">
                            </div>
                            <div class="text-center">
                                <h2 class="font-24 mb-0">{{$user -> name}}</h2>
                                <p>
                                    @foreach($role as $rl)
                                        @if($rl -> id == $user -> idRole)
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
                                    <li class="mb-2"><i
                                            class="fas fa-fw fa-envelope mr-2"></i>{{$user-> email}}</li>
                                    <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>{{$user-> phone}}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body border-top">
                            <h3 class="font-16">More information</h3>
                            <div class="">
                                <ul class="mb-0 list-unstyled">
                                    <li class="mb-1">
                                        <a href="#">
                                            <i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>
                                            {{$user-> facebook}}
                                        </a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">
                                            <i class="fab fa-fw fa-twitter-square mr-1 twitter-color"></i>
                                            {{$user-> address}}
                                        </a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">
                                            <i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>
                                            {{$user-> dateOfBirth}}
                                        </a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">
                                            <i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>
                                            {{$user-> gender}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end card profile -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end profile -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
@endsection
