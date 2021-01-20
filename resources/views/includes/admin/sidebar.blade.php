<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
    <div class="sidebar-brand-text mx-3">
      Mobil Admin
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('role.index') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Role</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('banner.index') }}">
      <i class="fas fa-fw fa-car"></i>
      <span>Banner</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('car-type.index') }}">
      <i class="fas fa-fw fa-car"></i>
      <span>Kategori Mobil</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('car.index') }}">
      <i class="fas fa-fw fa-car"></i>
      <span>Mobil</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('gallery.index') }}">
      <i class="fas fa-fw fa-images"></i>
      <span>Gallery</span></a>
  </li>
  

  <hr class="sidebar-divider">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
