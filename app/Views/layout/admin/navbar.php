<?php
$uri = service('uri');
// Handle root URL by checking if segments exist
$segment = $uri->getTotalSegments() > 0 ? $uri->getSegment(1) : '';
$subSegment = $uri->getTotalSegments() > 1 ? $uri->getSegment(2) : '';
$role = session()->get('role');
?>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">

    <!-- Header -->
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" 
           aria-hidden="true" id="iconSidenav"></i>

        <a class="navbar-brand m-0" href="#">
            <img src="<?= base_url('img/logo-ct-dark.png') ?>" 
                 class="navbar-brand-img h-100" 
                 alt="main_logo">

            <span class="ms-1 font-weight-bold">Web Kelompok-9</span>
        </a>
    </div>

    <hr class="horizontal dark mt-0">

    <!-- Menu -->
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link <?= ($segment == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('dashboard') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <?php if ($role == 'admin') : ?>
            <!-- User Management -->
            <li class="nav-item">
                <a class="nav-link <?= ($segment == 'users') ? 'active' : '' ?>" href="<?= base_url('users') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Manajemen User</span>
                </a>
            </li>
            <?php endif; ?>

            <!-- Dropdown Tables -->
            <li class="nav-item" id="tablesDropdown">
                <a class="nav-link <?= ($segment == 'table') ? 'active' : '' ?>" href="javascript:void(0);">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>

                    <i class="fas fa-chevron-down ms-auto"></i>
                </a>

                <!-- Submenu -->
                <ul class="dropdown-menu ps-4" style="display: <?= ($segment == 'table') ? 'block' : 'none' ?>;">
                    <li><a class="dropdown-item" href="<?= base_url('table/table5_2') ?>">Tabel 5.2 (Prasarana)</a></li>
                </ul>
            </li>

        </ul>
    </div>

    <!-- Footer -->
    <div class="sidenav-footer">
        <hr class="horizontal dark mt-3">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <div class="card-body p-3 w-100 pt-0 d-flex">
                <a class="nav-link" href="<?= base_url('logout') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md">
                        <i class="ni ni-ui-04 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text">Logout (<?= $role ?>)</span>
                </a>
            </div>
        </div>
    </div>

</aside>

<!-- FIXED Dropdown JS -->
<script>
    document.getElementById('tablesDropdown').addEventListener('click', function () {
        const menu = this.querySelector('.dropdown-menu');

        // toggle show/hide
        if (menu.style.display === "none" || menu.style.display === "") {
            menu.style.display = "block";
        } else {
            menu.style.display = "none";
        }

        // toggle icon
        const icon = this.querySelector('.fa-chevron-down');
        icon.classList.toggle('fa-chevron-up');
    });
</script>
