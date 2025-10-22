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
                <!-- Persiapan Kredit -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPersiapanKredit" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPersiapanKredit">
                        <i class="bx bx-file"></i> <span>@lang('translation.persiapan_kredit')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPersiapanKredit">
                        <ul class="nav nav-sm flex-column">
                            <!-- Modal Kerja -->
                            <li class="nav-item">
                                <a href="#sidebarModalKerja" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarModalKerja">
                                    @lang('translation.modal_kerja')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarModalKerja">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('simulations.index', ['jenis_kredit' => 'Modal Kerja']) }}" class="nav-link">@lang('translation.simulasi_modal_kerja')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('debiturs.index', ['jenis_kredit' => 'Modal Kerja']) }}" class="nav-link">@lang('translation.data_debitur_modal_kerja')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Pensiun -->
                            <li class="nav-item">
                                <a href="#sidebarPensiun" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPensiun">
                                    @lang('translation.pensiun')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPensiun">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('simulations.index', ['jenis_kredit' => 'Pensiun']) }}" class="nav-link">@lang('translation.simulasi_pensiun')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('debiturs.index', ['jenis_kredit' => 'Pensiun']) }}" class="nav-link">@lang('translation.data_debitur_pensiun')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Pasar -->
                            <li class="nav-item">
                                <a href="#sidebarPasar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPasar">
                                    @lang('translation.pasar')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPasar">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('simulations.index', ['jenis_kredit' => 'Pasar']) }}" class="nav-link">@lang('translation.simulasi_pasar')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('debiturs.index', ['jenis_kredit' => 'Pasar']) }}" class="nav-link">@lang('translation.data_debitur_pasar')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- UMKM -->
                            <li class="nav-item">
                                <a href="#sidebarUMKM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUMKM">
                                    @lang('translation.umkm')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarUMKM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('simulations.index', ['jenis_kredit' => 'UMKM']) }}" class="nav-link">@lang('translation.simulasi_umkm')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('debiturs.index', ['jenis_kredit' => 'UMKM']) }}" class="nav-link">@lang('translation.data_debitur_umkm')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Analis Kredit -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAnalisKredit" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalisKredit">
                        <i class="bx bx-analyse"></i> <span>@lang('translation.analisa_kredit')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAnalisKredit">
                        <ul class="nav nav-sm flex-column">
                            <!-- Modal Kerja -->
                            <li class="nav-item">
                                <a href="#sidebarAnalisModalKerja" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalisModalKerja">
                                    @lang('translation.modal_kerja')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAnalisModalKerja">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('analisa_kredit.index', ['jenis_kredit' => 'Modal Kerja']) }}" class="nav-link">@lang('translation.analisa_kredit')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Pensiun -->
                            <li class="nav-item">
                                <a href="#sidebarAnalisPensiun" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalisPensiun">
                                    @lang('translation.pensiun')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAnalisPensiun">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('analisa_kredit.index', ['jenis_kredit' => 'Pensiun']) }}" class="nav-link">@lang('translation.analisa_kredit')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Pasar -->
                            <li class="nav-item">
                                <a href="#sidebarAnalisPasar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalisPasar">
                                    @lang('translation.pasar')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAnalisPasar">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('analisa_kredit.index', ['jenis_kredit' => 'Pasar']) }}" class="nav-link">@lang('translation.analisa_kredit')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- UMKM -->
                            <li class="nav-item">
                                <a href="#sidebarAnalisUMKM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalisUMKM">
                                    @lang('translation.umkm')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAnalisUMKM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('analisa_kredit.index', ['jenis_kredit' => 'UMKM']) }}" class="nav-link">@lang('translation.analisa_kredit')</a>
                                        </li>
                                    </ul>
                                </div>
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
