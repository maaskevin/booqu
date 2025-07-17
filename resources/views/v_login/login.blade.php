<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Booq</title>
  <link rel="stylesheet" href="{{asset('css/v_login/login/style.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <!-- KIRI -->
    <div class="left-panel">
      <div class="welcome-text">
        <h2>Welcome to the World<br>of Digital Books</h2>
        <p>Discover inspiring works and meet<br>your favorite authors up close.</p>
        <div class="dots">
          <span class="dot active"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>
      <div class="author">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5d/J._K._Rowling_2010.jpg" alt="J.K. Rowling" />
        <h3>J.K. Rowling</h3>
        <p>Harry Potter</p>
      </div>
    </div>

    <!-- KANAN -->
    <div class="right-panel">
      <div class="form-box">
        <div class="logo">
          <i class="fas fa-book"></i> <span>Booqu</span>
        </div>
        <h2>Login</h2>
        <p class="subtext">Log In to Your Library</p>

        <form method="POST" action="{{route('login.submit')}}">
          @csrf
            <label>Email</label>
            <input type="email" name="email" placeholder="Your email" required />

            <label>Password</label>
            <input type="password" name="password"placeholder="Your password" required />

            <!-- <div class="form-options">
              <label class="remember">
                <input type="checkbox" /> Remember Me
              </label>
              <a href="#">Forgot Password?</a>
            </div> -->

            <div class="buttons">
              <button type="submit" class="login">Login</button>
              <!-- <a href=""></a> -->
              <a type="button" class="register" href="{{route('register')}}">Sign Up</a>
            </div>
          </form>
      </div>
    </div>
  </div>
</body>
</html>
