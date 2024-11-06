<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('Admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('Admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('Admin/css/font.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('Admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('Admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('Admin/img/favicon.ico') }}">
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Welcome to the Admin Dashboard</p>
                </div>
              </div>
            </div>
            <!-- Form Panel -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <!-- Perbaiki form action dan method POST -->
                  <form action="{{ route('login.submit') }}" method="POST" class="form-validate">
                    @csrf
                    <div class="form-group">
                      <input id="login-username" type="text" name="email" required class="input-material" value="{{ old('email') }}">
                      <label for="login-username" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                      </label>
                    </div>
                    <!-- Tombol Login -->
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>

                  <!-- Forgot Password Link -->
                  <a href="#" class="forgot-pass">Forgot Password?</a><br>
                  <small>Don't have an account? </small><a href="register.html" class="signup">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
         <p>2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
      </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('Admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('Admin/js/front.js') }}"></script>
  </body>
</html>
