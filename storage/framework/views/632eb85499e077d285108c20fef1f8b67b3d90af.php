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
            <li class="<?php echo e(request()->segment(1) == 'dashboard' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('dashboard')); ?>" class="link">
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
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Imunisasi</span>
                </a>
                <ul class="sub-menu ">
                    <li><a href="element-ui.html" class="link"><span>Data Imunisasi</span></a></li>
                    <li><a href="element-ui.html" class="link"><span>Jenis Imunisasi</span></a></li>
                </ul>
            </li>
            <li>
                <hr class="mt-4">
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-wheelchair"></i>
                    <span>Unit Kesehatan</span>
                </a>
                <ul class="sub-menu ">
                    <li><a href="element-ui.html" class="link"><span>Puskesmas</span></a></li>
                    <li><a href="element-ui.html" class="link"><span>Posyandu</span></a></li>
                </ul>
            </li>
            <li class="<?php echo e(request()->segment(1) == 'wilayah' ? 'active open' : ''); ?>">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-location-arrow"></i>
                    <span>Data Wilayah</span>
                </a>
                <ul class="sub-menu <?php echo e(request()->segment(1) == 'wilayah' ? 'expand' : ''); ?>">
                    <li class="<?php echo e(request()->segment(2) == 'kecamatan' ? 'active' : ''); ?>"><a href="<?php echo e(route('kecamatan.index')); ?>" class="link"><span>Kecamatan</span></a></li>
                    <li class="<?php echo e(request()->segment(2) == 'desa' ? 'active' : ''); ?>"><a href="<?php echo e(route('desa.index')); ?>" class="link"><span>Desa</span></a></li>
                </ul>
            </li>
            <li class=" <?php echo e(request()->segment(1) == 'users' ? 'active open' : ''); ?>">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-user"></i>
                    <span>Akun Pengguna</span>
                </a>
                <ul class="sub-menu <?php echo e(request()->segment(1) == 'users' ? 'expand' : ''); ?>">
                    <li class="<?php echo e(request()->segment(1) == 'users' ? 'active' : ''); ?>"><a href="<?php echo e(route('users.index')); ?>" class="link"><span>Akun</span></a></li>
                </ul>
            </li>
            <li class="<?php echo e(request()->segment(1) == 'pasien' ? 'active open' : ''); ?>">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-id-badge"></i>
                    <span>Pasien</span>
                </a>
                <ul class="sub-menu <?php echo e(request()->segment(1) == 'pasien' ? 'expand' : ''); ?>">
                    <li><a href="element-ui.html" class="link"><span>Data Pasien</span></a></li>
                    <li class="<?php echo e(request()->segment(2) == 'keluarga' ? 'active' : ''); ?>"><a href="<?php echo e(route('keluarga.index')); ?>" class="link"><span>Data Keluarga</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>  <?php /**PATH D:\Developement\DigiPosyandu\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>