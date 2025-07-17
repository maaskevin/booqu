@extends('v_layout.layout')

@section('title', 'Book')
@section('css')
<link rel="stylesheet" href="{{ asset('css/v_keranjang/style.css') }}">
@endsection

@section('content')

<body>

<div class="cart-container">
  <div class="cart-header">Cart <span style="color: gray;"></span></div>
  <div class="cart-subheader">Review your order and complete your purchase securely</div>

  @foreach($index as $i)
  <div class="cart-item">
    <img src="{{asset($i->cartBook->cover)}}" alt="{{($i->cartBook->judul)}}">
    <div class="cart-details">
      <div class="cart-title">{{$i->cartBook->judul}}</div>
      <div class="cart-author">{{$i->cartBook->penulis}}</div>
      <div class="cart-description">
        <span>{{$i->cartBook->deskripsi}}</span>
      </div>
      <div class="cart-controls">
        <form action="{{ route('keranjang.kurang', $i->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('put')
          <button type="submit"><i class="fas fa-minus circle"></i></button>
        </form>

        <span>{{ $i->jumlah }}</span>

        <form action="{{ route('keranjang.tambah', $i->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('put')
          <button type="submit"><i class="fas fa-plus circle"></i></button>
        </form>
      </div>
      <div class="cart-price">Rp{{number_format($i->cartBook->harga)}}</div>
    </div>
    <div class="cart-right">
      <div class="rating">★★★★★</div>
      <form action="{{ route('keranjang.destroy', $i->id) }}" method="POST" onsubmit="return confirm('Hapus buku {{$i->cartBook->judul}} dari keranjang?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-btn"><i class="fas fa-trash"></i></button>
      </form>
    </div>
  </div>
  @endforeach

  <div class="cart-footer"> 
    <div class="total">Total<br>Rp{{number_format($total)}}</div>
    <button class="checkout-btn" onclick="bayar()">Checkout All</button>
  </div>
</div>

@endsection

@section('script')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-XXX"></script>
<script>
function bayar() {
    fetch("{{ route('bayar.snap') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({})
    })
    .then(res => res.json())
    .then(data => {
        if (data.token) {
            snap.pay(data.token, {
                onSuccess: function(result) {
                    fetch("{{ route('keranjang.reset') }}", {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        credentials: 'same-origin', // ⬅️ WAJIB supaya Auth::id() terbaca
                        body: JSON.stringify({})
                    })
                    .then(() => {
                        alert("Pembayaran sukses!");
                        window.location.href = "{{ route('keranjang.index') }}";
                    });
                },
                onPending: function(result) {
                    alert("Menunggu pembayaran...");
                },
                onError: function(result) {
                    alert("Pembayaran gagal.");
                }
            });
        } else {
            alert(data.error || "Gagal mendapatkan Snap token.");
        }
    });
}
</script>

@endsection
