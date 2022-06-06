<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Test Web</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class='nav-item {{ ($title === "Dashboard") ? "active" : "" }}'>
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menus
    </div>

    <!-- Nav Item - Users -->
    <li class='nav-item {{ ($title === "Data Users") ? "active" : "" }}'>
        <a class="nav-link" href="/users">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span></a>
    </li>
    
    <!-- Nav Item - Data Murid -->
    <li class='nav-item {{ ($title === "Data Murid") ? "active" : "" }}'>
        <a class="nav-link" href="/data-murid">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Murid</span></a>
    </li>

    <!-- Nav Item - Data Cabang -->
    <li class='nav-item {{ ($title === "Table Orders") ? "active" : "" }}'>
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-building"></i>
            <span>Data Cabang</span></a>
    </li>

    <!-- Nav Item - Report -->
    <li class='nav-item {{ ($title === "Table Orders") ? "active" : "" }}'>
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-file"></i>
            <span>Report</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->