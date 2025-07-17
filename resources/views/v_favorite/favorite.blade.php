@extends('v_layout.layout')
@section('css')
<link rel="stylesheet" href="{{asset('css/v_favorite/style.css')}}">
@section('title', 'favorite')

@section('content')
  <section class="book-section">
    <h2>Your Favorite Books</h2>
    <p class="subtext">A curated list of stories you love, all in one place</p>
   

    <div class="book-flex">
       @foreach($index as $i)
      <!-- Ulangi div ini sebanyak yang diperlukan -->
       
      <div class="book-card">
        <div class="image-wrapper">
          <img src="{{asset($i->favBook->cover)}}" alt="Book"/>
        </div>
        <div class="rating">★★★★★</div>
        <h3>{{$i->favBook->judul}}</h3>
        <p class="price">Rp {{ number_format($i->favBook->harga, 0, ',', '.') }}</p>
        <form action="{{route('keranjang.store')}}" method="POST">
            @csrf
            <input type="hidden" name="book_id" value="{{ $i->book_id }}">
            <button type="submit" class="checkout-btn orange-btn">Checkout</button>
        </form>
        <form action="{{ route('favorite.destroy', $i->id) }}" method="POST" 
         onsubmit="return confirm('Hapus buku {{$i->favBook->judul}} dari favorit?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-btn no-bg">
            <i class="fas fa-trash orenge-icon no-border"></i>
        </button>
        </form>

      </div>
      
    @endforeach
      <!-- Ulangi sesuai jumlah -->
       
    </div>
  </section>

@endsection
