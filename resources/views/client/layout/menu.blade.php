<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Show Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active"
                           @if(isset($user_login))
                           @if($user_login -> idRole == 2 || $user_login -> idRole ==5)
                           href="client/tutor/profile"
                           @elseif($user_login -> idRole == 4)
                           href="client/student/profile"
                           @elseif($user_login -> idRole == 3)
                           href="client/staff/profile"
                           @endif
                           @endif
                           aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                            <i class="fa fa-fw fa-user-circle"></i>Profile
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"
                           @if(isset($user_login))
                           @if($user_login -> idRole == 2 || $user_login -> idRole ==5)
                           href="client/tutor/news"
                           @elseif($user_login -> idRole == 4)
                           href="client/student/news"
                           @elseif($user_login -> idRole == 3)
                           href="client/staff/news"
                           @endif
                           @endif
                           aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                            <i class="fab fa-fw fa-wpforms"></i>News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="student-schedule.html" aria-expanded="false" data-target="#submenu-5"
                           aria-controls="submenu-5">
                            <i class="fas fa-fw fa-table"></i>Schedules</a>
                    </li>
                    @if(isset($user_login))
                        @if($user_login -> idRole == 2 || $user_login -> idRole ==5)
                            <li class="nav-item">
                                <a class="nav-link" href="client/tutor/messagebox"
                                   aria-expanded="false"
                                   data-target="#submenu-6" aria-controls="submenu-6">
                                    <i class="fab fa-facebook-messenger"></i> Message Chat </a>
                            </li>
                        @endif

                        @if($user_login -> idRole == 4)
                            <li class="nav-item">
                                <a class="nav-link" href="client/student/messagebox"
                                   aria-expanded="false"
                                   data-target="#submenu-6" aria-controls="submenu-6">
                                    <i class="fab fa-facebook-messenger"></i> Message Chat </a>
                            </li>
                        @endif
                    @endif
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"--}}
                           {{--data-target="#submenu-7" aria-controls="submenu-7">--}}
                            {{--<i class="fas fa-fw fa-inbox"></i>Email</a>--}}
                        {{--<div id="submenu-7" class="collapse submenu" style="">--}}
                            {{--<ul class="nav flex-column">--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="student-inbox.html">Inbox</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="student-email-details.html">Email Detail</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="student-email-compose.html">Email Compose</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                    <li class="nav-item">
                        <a class="nav-link" href="student-information-subject.html" aria-expanded="false"
                           data-target="#submenu-8" aria-controls="submenu-8">
                            <i class="fas fa-book"></i>Information Subject</a>
                    </li>

                    @if(isset($user_login))
                        @if($user_login -> idRole == 3)
                            <li class="nav-item ">
                                <a class="nav-link"
                                   href="client/staff/course"
                                   aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                                    <i class="fas fa-id-card-alt"></i>Information Class</a>
                            </li>
                        @endif
                    @endif

                    @if(isset($user_login))
                        @if($user_login -> idRole == 3)
                            <li class="nav-item ">
                                <a class="nav-link"
                                   href="client/staff/editcourse"
                                   aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                                    <i class="fas fa-id-card-alt"></i>Edit Class</a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
