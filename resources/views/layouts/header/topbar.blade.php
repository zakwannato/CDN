  <!--begin::Languages-->
    <div class="dropdown">
        <!--begin::Toggle-->
        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ $user->name }}</span>
                <span class="symbol symbol-35 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">{{ substr($user->name, 0, 1) }}</span>
                </span>
            </div>
        </div>
        <!--end::Toggle-->
        <!--begin::Dropdown-->
        <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
            <!--begin::Nav-->
            <ul class="navi navi-hover py-4">
                <!--begin::Item-->
                <li class="navi-item active">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();" class="navi-link">
                        <span class="symbol symbol-20 mr-3">
                            <img src="assets/media/svg/flags/128-spain.svg" alt="" />
                        </span>
                        <span class="navi-text">Logout</span>
                        </a>
                    </form>
                </li>
                <!--end::Item-->
         
            </ul>
            <!--end::Nav-->
        </div>
        <!--end::Dropdown-->
    </div>
    <!--end::Languages-->
