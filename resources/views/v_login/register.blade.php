<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up | Booq</title>
  <link rel="stylesheet" href="{{asset('css/v_login/login/register.css')}}" />
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
        <h2>Sign up</h2>
        <p class="subtext">Sign up & Start Reading</p>

        <form action="{{route('user.store')}}" method="POST">
          @csrf
          <label for="nama-depan">Nama Depan</label>
          <input type="text" name="first_name" placeholder="Masukan Nama Depan">
          <label for="nama-belakang">Nama Belakang</label>
          <input type="text" name="last_name" placeholder="Masukan Nama Belakang">
          <label>Email</label>
          <input type="email"  name ="email" placeholder="Masukan Email" required />

          <label>Password</label>
          <input type="password" name="password" placeholder="Masukan Password" required />

          <label>Confirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm Password" required />

          <div class="buttons">
            <button type="submit" class="register">Register</button>
            <a class="login" href="{{route('login')}}">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
