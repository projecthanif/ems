<div class="header">
    <div class="header-left">
        {{--        <a href="{{route('dashboard')}}" class="logo">--}}
        {{--            <img src="{{ URL::to('admin/assets/img/logo-hotel.png')}}" width="50" height="70" alt="logo"> <span--}}
        {{--                class="logoclass">HOTEL</span>--}}
        {{--        </a>--}}
        <!-- when hamburger is closed only image is shown -->
        <a href="{{route('dashboard')}}" class="logo logo-small">
            <img src="{{ URL::to('admin/assets/img/logo-hotel.png')}} " alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img
                        class="rounded-circle" src=" {{ URL::to('admin/assets/img/logo-hotel.png')}}" width="31"
                        alt="Hotel XYZ"></span> </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm"><img src="{{ URL::to('admin/assets/img/logo-hotel.png')}} "
                                                       alt="User Image" class="avatar-img rounded-circle"></div>
                    <div class="user-text">
                        <h6>{{auth()->user()->name}}</h6>
                        <p class="text-muted mb-0">{{auth()->user()->role}}</p>
                    </div>
                </div>

                <a class="dropdown-item" href="">My Profile</a>
                <a href="{{route('auth.logout')}}">
                    <button type="submit" class="dropdown-item">Logout</button>
                </a>

            </div>
        </li>
    </ul>
</div>
