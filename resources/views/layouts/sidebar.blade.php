<nav class="main-sidebar ps-menu">
    <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div>
    <div class="sidebar-header">
        <div class="text">DP</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->segment(1) == '' || request()->segment(1) ==  'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <hr class="mt-4">
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Gizi</span>
                </a>
                <ul class="sub-menu ">
                    <li><a href="element-ui.html" class="link"><span>Data Pemeriksaan Gizi</span></a></li>
                    <li><a href="element-ui.html" class="link"><span>Riwayat</span></a></li>
                </ul>
            </li>
            <li class="{{ request()->segment(1) == 'imunisasi' ? 'active open' : '' }}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Imunisasi</span>
                </a>
                <ul class="sub-menu {{ request()->segment(1) == 'imunisasi' ? 'expand' : '' }}">
                    <li><a href="element-ui.html" class="link"><span>Data Imunisasi</span></a></li>
                    <li class="{{ request()->segment(2) == 'jenis-imunisasi' ? 'active' : '' }}"><a href="{{ route('jenis-imunisasi.index') }}" class="link"><span>Jenis Imunisasi</span></a></li>
                </ul>
            </li>
            <li>
                <hr class="mt-4">
            </li>
            <li class="{{ request()->segment(1) == 'unit-kesehatan' ? 'active open' : '' }}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-wheelchair"></i>
                    <span>Unit Kesehatan</span>
                </a>
                <ul class="sub-menu {{ request()->segment(1) == 'unit-kesehatan' ? 'expand' : '' }}">
                    <li class="{{ request()->segment(2) == 'puskesmas' ? 'active' : '' }}"><a href="{{ route('puskesmas.index') }}" class="link"><span>Puskesmas</span></a></li>
                    <li class="{{ request()->segment(2) == 'posyandu' ? 'active' : '' }}"><a href="{{ route('posyandu.index') }}" class="link"><span>Posyandu</span></a></li>
                </ul>
            </li>
            <li class="{{ request()->segment(1) == 'wilayah' ? 'active open' : '' }}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-location-arrow"></i>
                    <span>Data Wilayah</span>
                </a>
                <ul class="sub-menu {{ request()->segment(1) == 'wilayah' ? 'expand' : '' }}">
                    <li class="{{ request()->segment(2) == 'kecamatan' ? 'active' : '' }}"><a href="{{ route('kecamatan.index') }}" class="link"><span>Kecamatan</span></a></li>
                    <li class="{{ request()->segment(2) == 'desa' ? 'active' : '' }}"><a href="{{ route('desa.index') }}" class="link"><span>Desa</span></a></li>
                </ul>
            </li>
            <li class=" {{ request()->segment(1) == 'users' ? 'active open' : '' }}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-user"></i>
                    <span>Akun Pengguna</span>
                </a>
                <ul class="sub-menu {{ request()->segment(1) == 'users' ? 'expand' : '' }}">
                    <li class="{{ request()->segment(1) == 'users' ? 'active' : '' }}"><a href="{{ route('users.index') }}" class="link"><span>Akun</span></a></li>
                </ul>
            </li>
            <li class="{{ request()->segment(1) == 'pasien' ? 'active open' : '' }}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-basketball"></i>
                    <span>Anak</span>
                </a>
                <ul class="sub-menu {{ request()->segment(1) == 'pasien' ? 'expand' : '' }}">
                    <li class="{{ request()->segment(2) == 'data-pasien' ? 'active' : '' }}"><a href="{{ route('data-pasien.index') }}" class="link"><span>Data Anak</span></a></li>
                    <li class="{{ request()->segment(2) == 'keluarga' ? 'active' : '' }}"><a href="{{ route('keluarga.index') }}" class="link"><span>Data Keluarga</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>  