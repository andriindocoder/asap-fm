<!DOCTYPE html>
<html>
<head>
  @include('layouts.asap.head')
  @yield('styling')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('layouts.asap.navbar')

    @include('layouts.asap.sidebar')

    @yield('content')

    @include('layouts.asap.footer')

    @include('layouts.asap.right-sidebar')
  </div>
  <!-- ./wrapper -->
  @include('layouts.asap.script')
  @yield('script')
</body>
</html>
