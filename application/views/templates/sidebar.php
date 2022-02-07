<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">SIRusun</div>
    </a>

    <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-align-justify"></i>
                <span>Beranda</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/warga'); ?>">
              <i class="fas fa-fw fa-address-book"></i>
                <span>Warga</span>
            <a class="nav-link" href="<?= base_url('admin/kamar'); ?>">
              <i class="fas fa-fw fa-bed"></i>
                <span>Kamar</span></a>
            <a class="nav-link" href="<?= base_url('admin/pesan'); ?>">
               <i class="fas fa-fw fa-comment-alt"></i>
                 <span>Pesan</span></a>
        </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-tasks"></i>
                        <span>Manajemen</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                            <a class="collapse-item" href="<?= base_url('manajemen/fasilitasUmum'); ?>">fasilitas umum</a>
                            <a class="collapse-item" href="<?= base_url('manajemen/jadwalPiket'); ?>">jadwal piket</a>
                            <a class="collapse-item" href="<?= base_url('manajemen/informasi'); ?>">Informasi</a>
                            <a class="collapse-item" href="<?= base_url('manajemen/setting'); ?>">Setting</a>
                            <a class="collapse-item" href="<?= base_url('manajemen/admin'); ?>">Admin</a>
                        </div>
                    </div>
                </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
