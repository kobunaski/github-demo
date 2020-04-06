<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="#">university of greenwich</a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
        </div>

        @if(isset($user_login))
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><img
                    src="admin_asset/upload/image/user/{{$user_login -> image}}" alt=""
                    class="user-avatar-md rounded-circle"></a>
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                    <h5 class="mb-0 text-white nav-user-name">
                        {{$user_login -> name}}
                    </h5>
                    <span class="status"></span><span class="ml-2">Available</span>
                </div>
                <a class="dropdown-item" href="client/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
            </div>
        @endif

    </nav>
</div>
