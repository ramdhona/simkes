<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if (config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if (config('adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li> --}}
                @if (request()->is('dokter*'))
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center side-sec-name">
                        <div class="image">
                            <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                                alt="User Image" style="width: 40px; height: 40px;">
                        </div>
                        <div class="info ml-2">
                            <a href="#"
                                class="side-name d-block mb-0 font-weight-bold">{{ Auth::user()->nama }}</a>
                            <small class="side-role d-block text-muted">{{ Auth::user()->role }}</small>
                        </div>
                    </div>

                    <li class="nav-item">
                        <a href="/dokter" class="nav-link @if (request()->is('dokter')) active @endif">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dokter/memeriksa" class="nav-link @if (request()->is('dokter/memeriksa')) active @endif">
                            <i class="fas fa-stethoscope"></i>
                            <p>Periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dokter/obat" class="nav-link @if (request()->is('dokter/obat')) active @endif">
                            <i class="fas fa-pills"></i>
                            <p>Obat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>

                        <form id="logout-form" action="{{ route('actionlogout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </li>
                @elseif (auth()->user()->role == 'pasien')
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center side-sec-name">
                        <div class="image">
                            <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                                alt="User Image" style="width: 40px; height: 40px;">
                        </div>
                        <div class="info ml-2">
                            <a href="#"
                                class="side-name d-block mb-0 font-weight-bold">{{ Auth::user()->nama }}</a>
                            <small class="side-role d-block text-muted">{{ Auth::user()->role }}</small>
                        </div>
                    </div>

                    <!-- Dashboard -->

                    <li class="nav-item">
                        <a href="/pasien" class="nav-link @if (request()->is('pasien')) active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <!-- Periksa -->
                    <li class="nav-item">
                        <a href="/pasien/periksa" class="nav-link @if (request()->is('pasien/periksa')) active @endif">
                            <i class="nav-icon fas fa-stethoscope"></i>
                            <p>Periksa</p>
                        </a>
                    </li>

                    <!-- Logout -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>


                    <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
                @else
                    @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
                @endif


                {{-- Configured sidebar links --}}
                {{-- @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') --}}
            </ul>
        </nav>
    </div>

</aside>
