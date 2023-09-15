{{-- <!DOCTYPE html>
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

    <form action="{{ route('admin.login') }}" method="post">
        @csrf
      <div class="form-group">
        <input type="email" required="" placeholder="Username" class="form-control" placeholder="Nom Utilisateur">
      </div>
      @error('username')
      <p class="text-danger">
          {{ $message }}
      </p>
      @enderror
      <div class="form-group">
        <input type="password" required="" placeholder="Password" class="form-control" placeholder="Passwords">
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


 --}}


