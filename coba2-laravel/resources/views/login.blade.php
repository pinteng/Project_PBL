<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>
  <header class="header">
    <div class="logo">
      <img src="assets/logo.png" alt="a logo">
    </div>
    <div class="header-text">
      <h2>FAKULTAS VOKASI</h2>
      <p>UNIVERSITAS BRAWIJAYA</p>
    </div>
  </header>

  <div class="section-1">
    <style type="text/css">
      body{
        background-image: url(assets/vokasi.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <div class="login">
      <div class="logo-vokasi">
        <img src="assets/logo_vokasi.png" alt="">
      </div>
      <form action="{{ route('login.post') }}" method="POST" class="main-login">
        @csrf <!-- {{ csrf_field() }} -->
        <div style="text-align: center;color: red;">
          @if (Session::get('error'))
            {{ Session::get('error') }}
          @endif
        </div>
        <div class="email">
          <p>Email</p>
          <input type="text" placeholder="Enter Email" name="email" required>
        </div>
        <div class="password">
          <p>Password</p>
          <input type="password" placeholder="Input Password" name="password" required>
        </div><br><br>
        <button class="login-1">
          Log In
        </button>
      </form>
      
      <hr>
      <div class="forgot"><p>Forgot Password?</p></div>
    </div>
  </div>
  <br><br>
</body>
</html>