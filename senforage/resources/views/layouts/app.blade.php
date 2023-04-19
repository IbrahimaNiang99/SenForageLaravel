<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'Sén forage') }}</title>
  <link rel="stylesheet" href="{{('bootstrap_modal/css/bootstrap.min.css')}}">  
  <link rel="stylesheet" href="{{('tempforage/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{('tempforage/vendors/css/vendor.bundle.base.css')}}">
  <link rel="shortcut icon" href="{{('tempforage/images/favicon.png')}}" />
  <link rel="stylesheet" href="{{('tempforage/css/style.css')}}">
</head>
<body>
    

  <div class="container-scroller d-flex">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">2</div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('village.liste')}}">
            <i class="mdi mdi-home-variant"></i>
            <span class="menu-title ml-2">Village</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('client.liste')}}">
            <i class="mdi mdi-account-multiple"></i>
            <span class="menu-title ml-2">Client</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('compteur.liste')}}">
            <i class="mdi mdi-account-multiple"></i>
            <span class="menu-title ml-2">Compteur</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Pages</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>Apps</p>
          <span></span>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo"><img src="{{('tempforage/images/logo.svg')}}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini"><img src="{{('tempforage/images/logo-mini.svg')}}" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, Brandon Haynes</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher ici..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <!-- <img src="{{('tempforage/images/faces/face5.jpg')}}"/> -->
                <span class="nav-profile-name"> {{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <x-dropdown-link :href="route('profile.edit')">
                        <i class="mdi mdi-settings text-primary"></i>
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="mdi mdi-logout text-primary"></i>
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

            <main class="py-4">
                @yield('content')
                
            </main>
                
                
            </div>
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="{{('bootstrap_modal/js/bootstrap.js')}}"></script>

  <!-- base:js -->
  <script src="{{('tempforage/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{('tempforage/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{('tempforage/js/off-canvas.js')}}"></script>
  <script src="{{('tempforage/js/hoverable-collapse.js')}}"></script>
  <script src="{{('tempforage/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{('tempforage/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>