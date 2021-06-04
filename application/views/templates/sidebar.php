        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-black-tie"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hilman</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">


            <hr class="sidebar-divider mt-3">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/edit'); ?>">
                <i class="fas fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/changePassword'); ?>">
                    <i class="fas fa-key"></i>
                    <span>Change Password</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 