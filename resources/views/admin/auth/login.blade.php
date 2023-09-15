{{-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/admin/fonts/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->

</head>
<style>
    input.form-control{
        text-align: center;
    }
    p.text-danger{
        text-align: center;
    }
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        @if (Session::has('error'))
            <div class="alert alert-danger text-center" role="alert">
                {{ Session::get('error') }}

            </div>

        @endif
      <p class="login-box-msg">تسجيل الدخول</p>

      <form action="{{ route('admin.login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="اسم المستخدم">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('username')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">دخول</button>
          </div>
          <!-- /.col -->
        </div>

      </form>

      <div class="social-auth-links text-center mb-3">

      </div>
      <!-- /.social-auth-links -->

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminbag-v1.3.bittyfox.com/default/green-blue/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2023 17:50:43 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin-Bag | responsive  login page html  </title>
<!-- Bootstrap -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- slimscroll -->
<link href="{{ asset('assets/css/jquery.slimscroll.css') }}" rel="stylesheet">
<!-- Fontes -->
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
<!-- all buttons css -->
<link href="{{ asset('assets/css/buttons.css') }}" rel="stylesheet">
<!-- animate css -->
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<!-- adminbag main css -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
<!-- white blue theme css -->
<link href="{{ asset('assets/css/green-blue.css') }}" rel="stylesheet">
<!-- media css for responsive  -->
<link href="{{ asset('assets/css/main.media.css') }}" rel="stylesheet">
<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>
<body class="green-bg login">
<div class="middle-box text-center loginscreen ">
  <div class="widgets-container">
    <div>
      <h1 class="logo-name">A-BAG</h1>
    </div>
    <h3>Welcome to Admin-Bag</h3>
    <div class="card">
        <div class="card-body login-card-body">
            @if (Session::has('error'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ Session::get('error') }}

                </div>

            @endif
          <p class="login-box-msg"></p>
    <form action="{{ route('admin.login') }}" method="post">
        @csrf

      <div class="form-group">
        <input type="text" name="username"class="form-control" placeholder="Username" >
      </div>

      @error('username')
      <p class="text-danger">
          {{ $message }}
      </p>
      @enderror

      <div class="form-group">
        <input type="password" name="password" placeholder="Password" class="form-control">
      </div>
      @error('password')
      <p class="text-danger">
          {{ $message }}
      </p>
      @enderror

      <button class="btn green block full-width bottom15" type="submit">Se connecter</button>
      <a href="forgot_password.html"><small>Forgot password?</small></a>
      <p class="text-muted text-center"><small>Do not have an account?</small></p>
      <a href="register.html" class="btn btn-sm btn-white btn-block">Create an account</a>
    </form>
    <p class="top15"> <small>Admin-Bag is easy to use and customize &copy; 2016-2017</small> </p>
  </div>
</div>
</body>

<!-- Mirrored from adminbag-v1.3.bittyfox.com/default/green-blue/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2023 17:50:43 GMT -->
</html>





