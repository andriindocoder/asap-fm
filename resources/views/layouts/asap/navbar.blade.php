<style>
  .main-header {
    border-bottom: 0px;
  }
</style>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #D2F3FE">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <h3 class="m-0 text-dark judul">@yield('judul', 'Building ABC')</h3>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <div class="image" style="margin-right: 20px;">
        <img width="100%" src="{{ asset('frontend/dist/img/asaplogo.png') }}" alt="Asap Logo">
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->