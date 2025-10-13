<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    {{-- <a href="{{ route('dashboard') }}" class="nav-link" ><i class="ri-dashboard-2-line"></i> @lang('translation.dashboards')</a> --}}
                    <a class="nav-link menu-link" href="/" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-dashboard-2-line"></i><span>@lang('translation.dashboards')</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultiguna" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="bx bx-layer"></i> <span>@lang('translation.multiguna_pegawai')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultiguna">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('simulations.index') }}" class="nav-link">@lang('translation.simulasi_kredit')</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('debiturs.index') }}" class="nav-link">@lang('translation.data_debitur')</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('analisa_kredit.index') }}" class="nav-link">@lang('translation.analisa_kredit')</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDataMaster" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="bx bx-layer"></i> <span>@lang('translation.data_master')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDataMaster">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">@lang('translation.users')</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('account_officers.index') }}" class="nav-link">@lang('translation.account_officers')</a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
               
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
