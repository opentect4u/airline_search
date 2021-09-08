

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('index')}}#flight" class="nav-link">Flights</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('index')}}#hotel" class="nav-link">Hotels</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('index')}}" class="nav-link">Flights & Hotels</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('index')}}" class="nav-link">Offers</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('index')}}" class="nav-link">Visa</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <!-- <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form> -->

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <!-- <i class="far fa-bell"></i> -->
        <i class="fa fa-user" aria-hidden="true"></i>
        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width:180px;">
        <!-- <span class="dropdown-item dropdown-header">15 Notifications</span> -->
        <div class="dropdown-divider"></div>
        <a href="{{route('logout')}}" class="dropdown-item">
          <!-- <i class="fas fa-sign-out mr-2"></i> 4 new messages -->
          <!-- <i class="fas fa-sign-out-alt"></i> -->
          <i class="fas fa-sign-out-alt mr-2"></i> Sign out
          <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
        </a>
       
      </div>
    </li>
    
  </ul>
</nav>
<!-- /.navbar -->
