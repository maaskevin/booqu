@extends('v_layout.layout')

@section('title', 'detail')
@section('css')
<link rel="stylesheet" href="{{ asset('css/v_detail/style.css') }}">
@endsection

@section('content')
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    .user-info {
      margin-bottom: 20px;
    }

    .user-info img {
      width: 50px;
      border-radius: 50%;
      vertical-align: middle;
    }

    .user-info .name {
      font-weight: bold;
      margin-left: 10px;
    }

    .user-info .address {
      font-size: 14px;
      margin-top: 5px;
      display: flex;
      align-items: center;
    }

    .user-info .address i {
      margin-left: 5px;
      color: #FF5C00;
    }

    .order-section {
      margin-top: 30px;
    }

    .order-section h3 {
      margin-bottom: 10px;
    }

    .book-card {
      display: flex;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
      align-items: flex-start;
      position: relative;
    }

    .book-card.highlight {
      border: 2px dashed #0095FF;
      background-color: #f6fbff;
    }

    .book-cover {
      width: 100px;
      height: 140px;
      object-fit: cover;
      border-radius: 8px;
      margin-right: 15px;
    }

    .book-info {
      flex-grow: 1;
    }

    .book-info h4 {
      margin: 0 0 5px 0;
    }

    .book-info p {
      font-size: 14px;
      margin: 0;
    }

    .book-price {
      font-weight: bold;
      margin-top: 10px;
    }

    .rating {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 14px;
      color: #ffc107;
    }

    .delete-btn {
      position: absolute;
      bottom: 15px;
      right: 20px;
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      color: red;
      text-align: center;
      line-height: 30px;
      cursor: pointer;
    }

    .total {
      font-size: 18px;
      font-weight: bold;
      text-align: right;
      margin-top: 20px;
    }

    .checkout-btn {
      background-color: #FF5C00;
      color: white;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      float: right;
      margin-top: 10px;
    }

    .title-bold {
      font-weight: bold;
      font-size: 16px;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="user-info">
    <img src="https://via.placeholder.com/50" alt="User">
    <span class="name">John Doe</span><br>
    <div class="address">
      Jl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      <i class="fas fa-pen-to-square"></i>
    </div>
  </div>

  <div class="order-section">
    <h3>Detail Order (2)</h3>
    <p>Provide your shipping details to receive your books on time.</p>

    <!-- Buku 1 -->
    <div class="book-card">
      <img src="https://cdn.gramedia.com/uploads/items/9786020637681.jpg" class="book-cover" alt="Filosofi Teras">
      <div class="book-info">
        <h4>Filosofi Teras</h4>
        <p><i>Henry Manampiring</i></p>
        <p>Filosofi Teras adalah buku yang ingin memaparkan mazhab filsafat yang mampu menemukan akar masalah dan juga solusi dari banyak emosi <span style="color:#FF5C00">lebih banyak</span></p>
        <div class="book-price">Rp69.000</div>
      </div>
      <div class="rating">⭐⭐⭐⭐⭐ <br> X1</div>
      <div class="delete-btn"><i class="fas fa-trash"></i></div>
    </div>

    <!-- Buku 2 -->
    <div class="book-card highlight">
      <img src="https://cdn.gramedia.com/uploads/items/9786020637681.jpg" class="book-cover" alt="Bodo Amat">
      <div class="book-info">
        <h4>Sebuah seni untuk bersikap bodo amat</h4>
        <p><i>Mark Manson</i></p>
        <p>Sebuah seni untuk bersikap bodo amat adalah mengajarkan cara menghadapi hidup dengan lebih tenang dan realistis. Manson menyampaikan <span style="color:#FF5C00">lebih banyak</span></p>
        <div class="book-price">Rp69.000</div>
      </div>
      <div class="rating">⭐⭐⭐⭐⭐ <br> X1</div>
      <div class="delete-btn"><i class="fas fa-trash"></i></div>
    </div>
  </div>

  <div class="total">
    Total<br>
    Rp69.000
    <form action="/bayar" method="GET">
      @csrf
      <button class="checkout-btn" type="submit">Checkout All</button>
    </form>
  </div>

</body>
</html>
@endsection