<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin-home') }}" class="brand-link">
        <img src="/images/logo_lampung_selatan.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sudes Kalisari</span>
    </a>
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('profile') }}" class="nav-link  {{ (request()->is('layanan')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Profil Warga
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('layanan-pengaduan') }}"
                        class="nav-link {{ (request()->is('layanan/pengaduan*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pengaduan</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('surat-izin-usaha') }}" class="nav-link 
                        
                        ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layanan Surat
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="{{ route('surat-izin-usaha') }}"
                                class="nav-link  {{ (request()->is('layanan/surat-izin-usaha*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Izin Usaha</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('surat-menikah') }}"
                                class="nav-link  {{ (request()->is('layanan/surat-menikah*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Menikah</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('surat-kelahiran') }}"
                                class="nav-link  {{ (request()->is('layanan/kelahiran*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Kelahiran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('surat-domisili') }}"
                                class="nav-link  {{ (request()->is('layanan/domisili*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Domisili</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>