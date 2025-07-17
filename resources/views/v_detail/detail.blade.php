@extends('v_layout.layout')

@section('title', 'detail')
@section('css')
<link rel="stylesheet" href="{{ asset('css/v_detail/style.css') }}">
@endsection

@section('content')

<div class="book-detail-container">
  <h3>Detail Book</h3>

  <div class="book-card">
    <div class="book-image">
      <img src="{{asset($index->cover)}}" alt="Filosofi Teras" />
    </div>

    <div class="book-info">
      <div class="book-title">
        <h2>{{($index->judul)}}</h2>
        <div class="stars">
          ⭐⭐⭐⭐⭐
        </div>
      </div>
      <p class="author">{{$index->penulis}}</p>
      <p class="desc">
        {{$index->deskripsi}}
      </p>
      <p class="price">Rp {{number_format($index->harga, 0, ',', '.')}}</p>

      <div class="book-actions">
        <form action="{{route('keranjang.store')}}" method="POST">
            @csrf
            <input type="hidden" name="book_id" value="{{ $index->id }}">
            <button type="submit" class="checkout orange-btn">Checkout</button>
        </form>
        <form action="{{ route('favorite.store') }}" method="POST">
          @csrf
          <input type="hidden" name="book_id" value="{{ $index->id }}">
          <button type="submit"><i class="fa-solid fa-book myicon"> </i></button>
        </form>

            
        
      </div>
    </div>
  </div>

    <h3>Similar Book</h3>
    <div class="book-grid">
  @php $count = 0; @endphp
  @foreach ($similar as $buku)
    @if (strtolower($buku->kategori) === strtolower($index->kategori))
      <div class="similar-card">
        <div class="favorite-icon">
          <i class="fas fa-heart"></i>
        </div>
        <img src="{{ asset($buku->cover) }}" alt="cover">
        <div class="rating">★★★★★</div>
        <h4>{{ $buku->judul }}</h4>
        <p class="price">Rp {{ number_format($buku->harga, 0, ',', '.') }}</p>
        <a href="{{ route('produk.show', $buku->slug) }}">
          <button class="view-btn">View</button>
        </a>
      </div>
      @php $count++; @endphp
      @if ($count >= 5) @break @endif
    @endif
  @endforeach
</div>

</div>


</div>
@endSection