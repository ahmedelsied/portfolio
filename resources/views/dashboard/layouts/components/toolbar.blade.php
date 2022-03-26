<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="navbar-collapse collapse flex-lg-1 order-2 order-lg-1" id="navbar-search">
    </div>

    <div
        class="d-flex justify-content-end align-items-center flex-1 flex-lg-0 order-1 order-lg-2">
        <ul class="navbar-nav flex-row">
            <li class="nav-item nav-item-dropdown-lg dropdown">
                <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle"
                   data-toggle="dropdown">
                    <span>{{ auth()->user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('dashboard.core.administration.profile') }}"
                       class="dropdown-item"><i
                            class="icon-cog5"></i> {{ __('Account settings') }}</a>
                    <div class="dropdown-divider"></div>

                    <a href="{{ route('dashboard.logout') }}" class="dropdown-item"><i
                            class="icon-switch2"></i> {{ __('Logout') }}</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
