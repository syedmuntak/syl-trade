           @php
              $dashboard = "";
              if (auth()->user()->user_role === 'Admin') {
                  $dashboard = route('admin.dashboard.index');
              }elseif (auth()->user()->user_role === 'Employee') {
                $dashboard = route('employee.dashboard.index');
              }else{
                $dashboard = route('employeer.dashboard.index');
              }
            $path = auth()->user()->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.auth()->user()->user_image);
          @endphp
<div class="menu-mobile menu-activated-on-click color-scheme-dark">
    <div class="mm-logo-buttons-w"><a class="mm-logo" href="{{ $dashboard }}"><img src="{{ asset('/') }}img/logo.png"><span>Syl
                Trade</span></a>
        <div class="mm-buttons">
            <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
            </div>
            <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
        </div>
    </div>
    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="avatar-w"><img alt="" src="{{ $path }}"></div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">{{ auth()->user()->name }}</div>
                <div class="logged-user-role">{{ auth()->user()->user_role }}</div>
            </div>
        </div>
        <ul class="main-menu">
            <li class=""><a href="{{ $dashboard }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div><span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub-menu"><a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-users"></div>
                    </div><span>Persons</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('admin.users.admins.index') }}">Admin</a></li>
                    <li><a href="{{ route('admin.users.employees.index') }}">Employee</a></li>
                    <li><a href="{{ route('admin.users.employeers.index') }}">Employeer</a></li>
                </ul>
            </li>
            <li class="has-sub-menu"><a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-ui-46"></div>
                    </div><span>Settings</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('admin.gender.index') }}">Genders</a></li>
                        <li><a href="{{ route('admin.religion.index') }}">Religions</a></li>
                        <li><a href="{{ route('admin.division.index') }}">Divisions</a></li>
                        <li><a href="{{ route('admin.district.index') }}">Districts</a></li>
                        <li><a href="{{ route('admin.upazila.index') }}">Upazila</a></li>
                        <li><a href="{{ route('admin.category.index') }}">Categories</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div
    class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
    <div class="logo-w"><a class="logo" href="{{ $dashboard }}">
            <div>
            <img src="{{asset('user/assets/images/logo_small.png')}}" alt="">
            </div>
            <div class="logo-label">Syl
                Trade</div>
        </a></div>
    <div class="logged-user-w avatar-inline">
        <div class="logged-user-i">
            <div class="avatar-w"><img alt="" src="{{ $path }}"></div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">{{ auth()->user()->name }}</div>
                <div class="logged-user-role">{{ auth()->user()->user_role }}</div>
            </div>
            <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
            </div>
            <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                    <div class="avatar-w"><img alt="" src="{{ $path }}"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">{{ auth()->user()->name }}</div>
                        <div class="logged-user-role">{{ auth()->user()->user_role }}</div>
                    </div>
                </div>
                <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                <ul>
                    <li><a href="{{ route('common.profile.index') }}"><i
                                class="os-icon os-icon-user-male-circle2"></i><span>Profile
                                Details</span></a></li>
                    <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <h1 class="menu-page-header">Page Header</h1>
    <ul class="main-menu">
        <li class="sub-header"><span>Dashboard</span></li>
        @if (auth()->user()->user_role === 'Admin')
           <li class="selected">
               <a href="{{ route('admin.dashboard.index') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>
        @elseif(auth()->user()->user_role === 'Employee')
            <li class="selected">
                <a href="{{ route('employee.dashboard.index') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>

        @else
            <li class="selected"><a href="{{ route('employeer.dashboard.index') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div><span>Dashboard</span>
                </a>
            </li>
        @endif



        <li class="selected"><a href="{{ route('common.profile.index') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-user"></div>
            </div><span>Profile Settings</span>
        </a>
        </li>
        @if (auth()->user()->user_role === 'Admin')
        <li class="sub-header"><span>Persons</span></li>
        <li class="has-sub-menu">
            <a href="#">
                <div class="icon-w">
                    <div class="os-icon os-icon-users"></div>
                </div><span>Persons</span>
            </a>
            <div class="sub-menu-w">
                <div class="sub-menu-header">Persons</div>
                <div class="sub-menu-icon"><i class="os-icon os-icon-users"></i></div>
                <div class="sub-menu-i">
                    <ul class="sub-menu">
                        <li><a href="{{ route('admin.users.admins.index') }}">Admin</a></li>
                        <li><a href="{{ route('admin.users.employees.index') }}">Employee</a></li>
                        <li><a href="{{ route('admin.users.employeers.index') }}">Employeer</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="sub-header"><span>Settings</span></li>
        <li class="has-sub-menu"><a href="#">
                <div class="icon-w">
                    <div class="os-icon os-icon-ui-46"></div>
                </div><span>Settings</span>
            </a>
            <div class="sub-menu-w">
                <div class="sub-menu-header">Settings</div>
                <div class="sub-menu-icon"><i class="os-icon os-icon-ui-46"></i></div>
                <div class="sub-menu-i">
                    <ul class="sub-menu">
                        <li><a href="{{ route('admin.gender.index') }}">Genders</a></li>
                        <li><a href="{{ route('admin.religion.index') }}">Religions</a></li>
                        <li><a href="{{ route('admin.division.index') }}">Divisions</a></li>
                        <li><a href="{{ route('admin.district.index') }}">Districts</a></li>
                        <li><a href="{{ route('admin.upazila.index') }}">Upazila</a></li>
                        <li><a href="{{ route('admin.category.index') }}">Categories</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="selected">
            <a href="{{ route('admin.bookings.index') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-shuffle"></div>
            </div><span>Booking Requests</span>
            </a>

        </li>
        @endif

        @if (auth()->user()->user_role === 'Employeer')
        {{-- Employee Menu --}}
        <li class="selected">
            <a href="{{ route('employeer.bookings.index') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-shuffle"></div>
            </div><span>Booking List</span>
            </a>

        </li>


        @endif
        @if (auth()->user()->user_role === 'Employee')
        {{-- Employee Menu --}}
        <li class="selected">
            <a href="{{ route('employee.bookings.index') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-shuffle"></div>
            </div><span>Booking Requests</span>
            </a>

        </li>



        @endif

        <li class="selected">
            <a href="{{ url('/') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-globe"></div>
            </div><span>View Site</span>
            </a>

        </li>
    </ul>
</div>
