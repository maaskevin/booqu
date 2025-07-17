@extends('v_layout.layout')

@section('title', 'Home')
@section('css')
<link rel="stylesheet" href="{{asset('css/v_beranda/style.css')}}">
@section('content')
  <!-- Tempel konten halaman di sini -->

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Welcome to Your <span>Reading Universe</span></h1>
      <p >Explore your favorite genres, find hidden gems, and enjoy reading like never before</p>
      <button class="bg-orange">Explore Now</button>
    </div>
    
  </section>

  <!-- Search Bar -->
   
  <section class="search-section">
    <h2>Look for book here</h2>
    <div class="">

        <input type="text" placeholder="Search books here">
        <button class="bg-orenge">Search book</button>
    </div>
  </section>

  <!-- Category Section -->
  <section class="categories">
    <div class="category-card blue">
      <h3>Trending Now</h3>
      <button>Explore More</button>
    </div>
    <div class="category-card green">
      <h3>New Releases</h3>
      <button>Explore More</button>
    </div>
    <div class="category-card purple">
      <h3>Top Rated</h3>
      <button>Explore More</button>
    </div>
  </section>

  <!-- Books Section -->
  <section class="books">
   <div class="section-header">
  <h2>Books The Day</h2>


  <a href="#" class="orange-btn">View All</a>
</div>
    <div class="book-grid">
      <!-- ulangi ini -->
      @foreach($index as $i)
      <div class="book-card">
          <div class="favorite-icon">
            <i class="fas fa-heart"></i>
          </div>
          <img src="{{$i->cover}}" alt="Book">
          <div class="rating">⭐ ⭐ ⭐ ⭐ ⭐</div>
        <h4>{{$i->judul}}</h4>
        <p class="price">Rp {{ number_format($i->harga, 0, ',', '.')}}</p>
        <a class="view-btn" href="{{route('produk.show',$i->slug)}}">View</a>
      </div>
      @endforeach
    </div>
    
  </section>

  <!-- Feedback Section -->
  <section class="feedback">
    <div class="section-header">
      <h2>Feedback Reader</h2>
      <a href="#" class="orange-btn">View All</a>
    </div>
    <div class="feedback-grid">
      <div class="feedback-card">
        <h4>👤 Gustar Roy</h4>
        <p>This book was life-changing. The way the author tells the story makes it feel so real. A must-read!</p>
        <img src="https://via.placeholder.com/100x140" alt="Book">
      </div>
      <div class="feedback-card">
        <h4>👤 Rika Mini</h4>
        <p>This book was life-changing. The way the author tells the story makes it feel so real. A must-read!</p>
        <img src="https://via.placeholder.com/100x140" alt="Book">
      </div>
    </div>
  </section>
    <!-- <script>
       document.addEventListener('DOMContentLoaded', function () {
  const navHome = document.getElementById('nav-home');
  if (navHome) {
    navHome.classList.add('active');
  }
});
    </script> -->
@endsection
