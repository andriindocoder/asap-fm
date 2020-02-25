<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ASAP Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend/dist/css/adminlte.min.css') }}">
  <link rel="shortcut icon" href="{{ asset('frontend/images/logosedaniatrans.png') }}" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="logosedania.png" type="image/x-icon">
  <style type="text/css">
    .btn-danger {
      background-color: #EC2A22;
    }
  </style>
</head>
<body class="hold-transition login-page" style="background-image: url('https://img.freepik.com/free-psd/abstract-background-design_1297-82.jpg?size=626&ext=jpg'); background-position: center; background-size: cover;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo">
          <img width="35%" src="frontend/images/logosedaniatrans.png" alt="Asap Logo">
      </div>

      <div align="center">
        <p>To request a Demo account, please <a href="https://www.iretail.ai/demo" target="_blank">click here</a></p>
      </div>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        @error('email')
          <div class="alert alert-warning">
              <i class="fa fa-exclamation-triangle"></i> {{ $message }}
          </div>
        @enderror
        @error('password')
          <div class="alert alert-warning">
              <i class="fa fa-exclamation-triangle"></i> {{ $message }}
          </div>
        @enderror
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-sign-in-alt"></i> Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
