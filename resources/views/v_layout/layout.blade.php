<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Reading Universe')</title>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  @yield('css')
</head>
<body>

  <!-- Header -->
  <header class="navbar">
    <div class="logo">📚 Booqu</div>
<nav>
  <a href="{{ route('home') }}" 
     id="nav-home" 
     class="{{ Route::is('home') ? 'active' : '' }}">
    <i class="fa-solid fa-house"></i> Home
  </a>

  <a href="{{ route('book') }}" 
     class="{{ Route::is('book') ? 'active' : '' }}">
    <i class="fa-solid fa-book"></i> Book
  </a>

  <a href="{{route('favorite.index')}}" 
     class="{{ Route::is('favorite.index') ? 'active' : '' }}">
    <i class="fa-solid fa-book"></i> Favorites
  </a>

  <a href="" 
     class="{{ Route::is('history') ? 'active' : '' }}">
    History
  </a>
</nav>
  <!-- profile  -->
  <div class="profile-side">

  @if(Auth::check())
    <div class="navbar-right">
      <a href="{{ route('keranjang.index') }}"class="{{ Route::is('keranjang.index') ? 'active' : '' }} cart-btn">
        <i class="fas fa-bag-shopping"></i>
      </a>

      <div class="dropdown-user">
        <!-- <div class="dropdown-toggle-user"> -->
          <a href="{{route('profile')}}" class="dropdown-toggle-user">
          <img src="{{asset('images/H_P.jpg')}}" alt="Profile" class="avatar">
          <span>Profile</span>
          <i class="fa-solid fa-angle-down arrow"></i>
          </a>
        <!-- </div> -->
        <div class="dropdown-content-user">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-link">
              Logout <i class="fa-solid fa-right-from-bracket"></i>
            </button>
          </form>
        </div>
      </div>
    </div>

  @else
<div class="dropdown-guest">
  <div class="dropdown-toggle-guest">
    <i class="fas fa-user"></i> Guest <span class="arrow">&#9662;</span>
  </div>
  <div class="dropdown-content-guest">
    <a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
    <a href="{{route('register')}}"><i class="fas fa-user-plus"></i> Register</a>
  </div>
</div>

@endif
</header>

  <!-- Main content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-wrapper">
      <div class="footer-social">
        <i class="fab fa-x-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-linkedin"></i>
      </div>

      <div class="footer-columns">
        <div>
          <h4>Use cases</h4>
          <ul>
            <li>UI design</li>
            <li>UX design</li>
            <li>Wireframing</li>
            <li>Diagramming</li>
            <li>Brainstorming</li>
            <li>Online whiteboard</li>
            <li>Team collaboration</li>
          </ul>
        </div>
        <div>
          <h4>Explore</h4>
          <ul>
            <li>Design</li>
            <li>Prototyping</li>
            <li>Development features</li>
            <li>Design systems</li>
            <li>Collaboration features</li>
            <li>Design process</li>
            <li>FigJam</li>
          </ul>
        </div>
        <div>
          <h4>Resources</h4>
          <ul>
            <li>Blog</li>
            <li>Best practices</li>
            <li>Colors</li>
            <li>Color wheel</li>
            <li>Support</li>
            <li>Developers</li>
            <li>Resource library</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  @yield('script')
</body>
</html>
