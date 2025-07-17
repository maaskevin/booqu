@extends('v_layout.layout')
@section('css')
<link rel="stylesheet" href="{{asset('css/v_checkout/style.css')}}">
@section('title', 'favorite')

@section('content')
<body>

  <div class="topbar">
    <input type="text" placeholder="Search books here">
    <button class="search-btn">Search book</button>
  </div>

  <h2 class="section-title">CHECKOUT</h2>

  <div class="book-list">
    <div class="book-item">
      <img src="{{asset('images/H_P.jpg')}}" alt="Filosofi Teras" class="book-img">
      <div class="book-detail">
        <h3 class="book-title">Filosofi Teras</h3>
        <p class="book-author">Henry Manampiring</p>
        <p class="book-desc">
          Filosofi Teras adalah buku yang ingin menerapkan nasihat filsuf Yunani kuno menghadapi masalah dan rasa cemas melalui cara rasional.
        </p>
        <div class="book-extra">
          <div class="rating">★★★★★</div>
          <span class="count">x 1</span>
        </div>
        <p class="book-price">Rp69.000</p>
      </div>
      <div class="buy-btn-wrap">
        <button class="buy-btn">Buy</button>
        <i class="fa-solid fa-trash"></i>
      </div>
    </div>

    <div class="book-item">
      <img src="https://via.placeholder.com/80x120" alt="Sebuah seni untuk bersikap bodo amat" class="book-img">
      <div class="book-detail">
        <h3 class="book-title">Sebuah seni untuk bersikap bodo amat</h3>
        <p class="book-author">Mark Manson</p>
        <p class="book-desc">
          Buku ini mengajarkan cara menghadapi masalah hidup tanpa rasa takut dan mengelola emosi dengan logika.
        </p>
        <div class="book-extra">
          <div class="rating">★★★★★</div>
          <span class="count">x 1</span>
        </div>
        <p class="book-price">Rp69.000</p>
      </div>
      <div class="buy-btn-wrap">
        <button class="buy-btn">Buy</button>
      </div>
      <i class="fa-solid fa-trash"></i>
    </div>
  </div>

  <div class="summary">
    <div class="summary-row">
      <span>Total</span>
      <span>Rp138.000</span>
    </div>
    <button class="checkout-final">CHECKOUT</button>
  </div>

</body>
</html>
@endsection