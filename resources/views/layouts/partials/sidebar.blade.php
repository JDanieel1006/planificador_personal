<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-users-gear"></i>
        </div>
        <div class="sidebar-brand-text mx-3">S-P-P</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Herramientas
    </div>

    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('usuarios.index')}}">
            <i class="fa-solid fa-users"></i>
            <span>Usuarios</span></a>
    </li>

    <!-- Nav Item - Projects -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('proyectos.index')}}">
            <i class="fa-solid fa-bars-progress"></i>
            <span>Proyectos</span></a>
    </li>

    <!-- Nav Item - Project Assignment -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-file-contract"></i>
            <span>Asignacion de proyectos</span></a>
    </li>

    <!-- Nav Item - Project history -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Historial de proyectos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
