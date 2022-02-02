<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">SIRusun</div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/warga'); ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Warga</span>
        <a class="nav-link" href="<?= base_url('admin/kamar'); ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Kamar</span></a>
        <a class="nav-link" href="admin/manajemen">
            <i class="fas fa-fw fa-circle"></i>
            <span>Manajemen</span></a>
        <a class="nav-link" href="admin/pesan">
            <i class="fas fa-fw fa-circle"></i>
            <span>Pesan</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
