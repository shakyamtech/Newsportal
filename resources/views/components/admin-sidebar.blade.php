<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('dashboard')}}"> <img alt="image" src="/assets/img/codeitlogo.webp" class="header-logo" /> <span
          class="logo-name"></span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown active">
        <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>

      <li class="dropdown">
        <a href="{{route('admin.company.create')}}" class="nav-link"><i class="fas fa-building"></i><span>Company</span></a>
      </li>

      <li class="dropdown">
        <a href="" class="nav-link"><i class="fas fa-spinner"></i><span>Category</span></a>
      </li>

      <li class="dropdown">
        <a href="index.html" class="nav-link"><i class="fas fa-poo"></i><span>Article</span></a>
      </li>

      <li class="dropdown">
        <a href="index.html" class="nav-link"><i class="fab fa-adversal"></i><span>Advertise</span></a>
      </li>
      {{-- <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Widgets</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
          <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
        </ul>
      </li>

        </ul>
      </li> --}}
    </ul>
  </aside>
