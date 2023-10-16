<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BSKP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Karyawan -->
    <li class="nav-item {{ Request::is('/karyawan') ? 'active' : '' }}">
        <a class="nav-link" href="/karyawan">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Karyawan</span></a>
    </li>

    <!-- Nav Item - Tunjangan -->
    <li class="nav-item {{ Request::is('/tunjangan') ? 'active' : '' }}">
        <a class="nav-link" href="/tunjangan">
            <i class="fas fa-fw fa-hand-holding-usd"></i>
            <span>Tunjangan</span></a>
    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item text-danger">
        <a class="nav-link" href="/logout">
            <i class="fas fa-fw fa-sign-out-alt text-danger"></i>
            <spa class="text-danger">Logout</spa></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
