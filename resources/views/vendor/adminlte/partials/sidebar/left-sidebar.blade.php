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
                    <li class="nav-item">
                        <a href="/dokter" class="nav-link  @if (request()->is('dokter')) active @endif">
                            <i class="fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dokter/periksa" class="nav-link @if (request()->is('dokter/periksa')) active @endif">
                            <p>Periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dokter/obat" class="nav-link @if (request()->is('dokter/obat')) active @endif">
                            <p>Obat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/actionlogout" class="nav-link ">
                            <p>Logout</p>
                        </a>
                    </li>
                @elseif (auth()->user()->role == 'pasien')
                    <a href="/pasien" class="nav-link  @if (request()->is('pasien')) active @endif">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                    <li class="nav-item">
                        <a href="/pasien/periksa" class="nav-link @if (request()->is('pasien/periksa')) active @endif">
                            <p>Periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pasien/riwayat" class="nav-link @if (request()->is('pasien/riwayat')) active @endif">
                            <p>Riwayat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/actionlogout" class="nav-link ">
                            <p>Logout</p>
                        </a>
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
