<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Desa</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{ route('penduduk.index') }}">
          <i class="fas fa-address-card"></i>
          <span>Penduduk</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{ route('fam.index') }}"  >
          <i class="fas fa-users"></i>
          <span>Kartu Keluarga</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{ route('birth.index') }}"  >
          <i class="fas fa-user-plus"></i>
          <span>Akta Kelahiran</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{ route('dead.index') }}"  >
          <i class="fas fa-user-minus"></i>
          <span>Akta Kematian</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{ route('migrasi.index') }}"  >
          <i class="fas fa-truck-moving"></i>
          <span>Migrasi</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{ route('surat.index') }}"  >
          <i class="far fa-paper-plane"></i>
          <span>Surat</span>
        </a>
      </li>

     
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

   
    </ul>
    <!-- End of Sidebar -->