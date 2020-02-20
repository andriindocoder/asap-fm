<!DOCTYPE html>
<html>
<head>
  @include('layouts.asap.head')
  @yield('style')
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
</body>
</html>
