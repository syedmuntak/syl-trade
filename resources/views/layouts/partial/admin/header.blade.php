@php
    $path = auth()->user()->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.auth()->user()->user_image);
@endphp
<div class="top-bar color-scheme-transparent">
    <div class="top-menu-controls">
        <div class="element-search autosuggest-search-activator"><input
                placeholder="Start typing to search...">
        </div>
        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w"><img alt="" src="{{ $path }}"></div>
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
                                    </span></a></li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
