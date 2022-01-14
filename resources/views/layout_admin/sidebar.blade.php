<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Tours</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">Tours</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li>
            <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Kategori</li>
          <li>
            <a href="{{ url('virtual') }}" class="nav-link"><i class="fas fa-vr-cardboard"></i><span>Virtual Tour</span></a>
          </li>
          <li>
            <a href="{{ url('wisata') }}" class="nav-link"><i class="fas fa-user"></i><span> Profile Wisata</span></a>
          </li>
          <li>
            <a href="{{ url('artikels') }}" class="nav-link"><i class="fas fa-newspaper"></i><span>Artikel</span></a>
          </li>
          <li>
            <a href="{{ url('testimoni_admin') }}" class="nav-link"><i class="fas fa-comments"></i><span>Testimoni</span></a>
          </li>
        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div> --}}
    </aside>
  </div>
