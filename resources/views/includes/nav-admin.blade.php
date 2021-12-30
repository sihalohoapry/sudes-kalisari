<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
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
                    <a href="{{ route('admin-home') }}"
                        class="nav-link  {{ (request()->is('admin')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('penduduk.index') }}"
                        class="nav-link  {{ (request()->is('admin/penduduk*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Penduduk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengaduan.index') }}"
                        class="nav-link {{ (request()->is('admin/pengaduan')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pengaduan</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('surat-izin-usaha.index') }}" class="nav-link 
                        
                        ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Persuratan
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="{{ route('surat-izin-usaha.index') }}"
                                class="nav-link  {{ (request()->is('admin/surat-izin-usaha*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Izin Usaha</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('surat-menikah.index') }}"
                                class="nav-link  {{ (request()->is('admin/surat-menikah*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Menikah</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('surat-lahir.index') }}"
                                class="nav-link  {{ (request()->is('admin/surat-lahir*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Kelahiran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('surat-domisili.index') }}"
                                class="nav-link  {{ (request()->is('admin/surat-domisili*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Domisili</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('berita.index') }}"
                        class="nav-link {{ (request()->is('admin/berita*')) ? 'active' : '' }}">
                        <i class="far fa-newspaper"></i>
                        <p>
                            Berita Desa</span>
                        </p>
                    </a>
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