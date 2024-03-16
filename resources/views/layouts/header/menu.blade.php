<!--begin::Header Logo-->
{{-- <div class="header-logo">
    <a href="index.html">
        <img alt="Logo" src="assets/media/logos/logo-dark.png" />
    </a>
</div> --}}
<!--end::Header Logo-->
<!--begin::Header Menu-->
<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
    <!--begin::Header Nav-->
    <ul class="menu-nav">

        @if(auth()->user()->role == 'admin')
        <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'menu-item-active' : '' }}" >
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <span class="menu-text">Dashboard</span>
                <i class="menu-arrow"></i>
             </a>
        </li>

        <li class="menu-item {{ request()->routeIs('admin.directory') ? 'menu-item-active' : '' }}">
            <a href="{{ route('admin.directory') }}" class="menu-link">
                <span class="menu-text">Directory</span>
            </a>
        </li>
        @endif
        
        @if(auth()->user()->role == 'user')
        <li class="menu-item {{ request()->routeIs('user.profile') ? 'menu-item-active' : '' }}">
            <a href="{{ route('user.profile') }}" class="menu-link">
                <span class="menu-text">Profile</span>
            </a>
        </li>
        @endif

    </ul>
    <!--end::Header Nav-->
</div>
<!--end::Header Menu-->