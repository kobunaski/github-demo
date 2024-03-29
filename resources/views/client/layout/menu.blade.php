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


                    @if(isset($user_login))
                        @if($user_login -> idRole == 2 || $user_login -> idRole == 5)
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('client/tutor/index2')) ? 'active' : '' }}"
                                   href="client/tutor/index2" aria-expanded="false"
                                   data-target="#submenu-8" aria-controls="submenu-8">
                                    <i class="fas fa-book"></i>Dashboard</a>
                            </li>
                        @endif
                    @endif

                    @if(isset($user_login))
                        @if($user_login -> idRole == 4)
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('client/student/index1')) ? 'active' : '' }}"
                                   href="client/student/index1" aria-expanded="false"
                                   data-target="#submenu-8" aria-controls="submenu-8">
                                    <i class="fas fa-book"></i>Dashboard</a>
                            </li>
                        @endif
                    @endif


                    @if(isset($user_login))
                        @if($user_login -> idRole == 2 || $user_login -> idRole == 5)
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('client/tutor/infoclass')) ? 'active' : '' }}"
                                   href="client/tutor/infoclass" aria-expanded="false"
                                   data-target="#submenu-8" aria-controls="submenu-8">
                                    <i class="fas fa-book"></i>Information Class</a>
                            </li>
                        @endif
                    @endif

                    @if(isset($user_login))
                        @if($user_login -> idRole == 2 || $user_login -> idRole ==5 || $user_login -> idRole == 4)
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('client/tutor/schedulelist')) || (request()->is('client/student/schedulelist')) ? 'active' : '' }}"
                                   @if($user_login -> idRole == 2 || $user_login -> idRole ==5)
                                   href="client/tutor/schedulelist"
                                   @endif
                                   @if($user_login -> idRole == 4)
                                   href="client/student/schedulelist"
                                   @endif
                                   aria-expanded="false"
                                   data-target="#submenu-5"
                                   aria-controls="submenu-5">
                                    <i class="fas fa-fw fa-table"></i>Schedules</a>
                            </li>
                        @endif
                    @endif

                    <li class="nav-item ">
                        <a class="nav-link {{ (request()->is('client/student/news')) || (request()->is('client/tutor/news')) || (request()->is('client/staff/news')) ? 'active' : '' }}"
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

                    @if(isset($user_login))
                        @if($user_login -> idRole == 2 || $user_login -> idRole ==5)
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('client/tutor/messagebox')) ? 'active' : '' }}"
                                   href="client/tutor/messagebox"
                                   aria-expanded="false"
                                   data-target="#submenu-6" aria-controls="submenu-6">
                                    <i class="fab fa-facebook-messenger"></i> Message Chat </a>
                            </li>
                        @endif

                        @if($user_login -> idRole == 4)
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('client/student/messagebox')) ? 'active' : '' }}"
                                   href="client/student/messagebox"
                                   aria-expanded="false"
                                   data-target="#submenu-6" aria-controls="submenu-6">
                                    <i class="fab fa-facebook-messenger"></i> Message Chat </a>
                            </li>
                        @endif
                    @endif

                    @if(isset($user_login))
                        @if($user_login -> idRole == 2 || $user_login -> idRole ==5 || $user_login -> idRole == 4)
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('client/student/blogginglist')) || (request()->is('client/tutor/blogginglist')) ? 'active' : '' }}"
                                   @if($user_login -> idRole == 2 || $user_login -> idRole ==5)
                                   href="client/tutor/blogginglist"
                                   @endif
                                   @if($user_login -> idRole == 4)
                                   href="client/student/blogginglist"
                                   @endif
                                   aria-expanded="false"
                                   data-target="#submenu-5"
                                   aria-controls="submenu-5">
                                    <i class="fas fa-book"></i>Document for subject</a>
                            </li>
                        @endif
                    @endif

                    @if(isset($user_login))
                        @if($user_login -> idRole == 3)
                            <li class="nav-item ">
                                <a class="nav-link {{ (request()->is('client/staff/course')) ? 'active' : '' }}"
                                   href="client/staff/course"
                                   aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                                    <i class="fas fa-id-card-alt"></i>Information Class</a>
                            </li>
                        @endif
                    @endif

                    @if(isset($user_login))
                        @if($user_login -> idRole == 3)
                            <li class="nav-item ">
                                <a class="nav-link {{ (request()->is('client/staff/editcourse')) ? 'active' : '' }}"
                                   href="client/staff/editcourse"
                                   aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                                    <i class="fas fa-id-card-alt"></i>Edit Class</a>
                            </li>
                        @endif
                    @endif

                    @if(isset($user_login))
                        @if($user_login -> idRole == 4)
                            <li class="nav-item ">
                                <a class="nav-link {{ (request()->is('client/student/uploaddoc')) ? 'active' : '' }}"
                                   href="client/student/uploaddoc"
                                   aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                                    <i class="fas fa-id-card-alt"></i>Upload a document</a>
                            </li>
                        @endif
                    @endif

                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('client/student/profile')) || (request()->is('client/tutor/profile')) || (request()->is('client/staff/profile')) ? 'active' : '' }}"
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
                </ul>
            </div>
        </nav>
    </div>
</div>
