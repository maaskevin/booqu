@extends('v_layout.layout')

@section('title', 'Book')
@section('css')
<link rel="stylesheet" href="{{ asset('css/v_book/style.css') }}">
@endsection

@section('content')

<!-- Search -->
<section class="search-section">
  <h2>Look for book here</h2>
  <div>
    <input type="text" id="search-input" placeholder="Search books here">
    <button>Search book</button>
  </div>
</section>

<!-- Tombol Filter -->
<section class="category-section">
  <button class="filter-btn active" data-filter="all">All Category</button>
  <button class="filter-btn" data-filter="fantasy">Fantasy</button>
  <button class="filter-btn" data-filter="horror">Horror</button>
</section>

<!-- ALL CATEGORY: Tampilkan horror & fantasy masing-masing 5 -->
<section class="kategori-section" data-kategori="all">
  {{-- HORROR --}}
  <div class="book-section">
    <div class="section-header">
      <h2>Horror</h2>
      <a href="javascript:void(0);" class="orange-btn" onclick="filterKategori('fantasy')">View All</a>

    </div>
    <div class="book-grid">
      @php $count = 0; @endphp
      @foreach ($index as $buku)
        @if (strtolower($buku->kategori) === 'horror')
          <div class="book-card">
              <div class="favorite-icon">
              <i class="fas fa-heart"></i>
              </div>
              <img src="{{ asset($buku->cover) }}" alt="cover">
              <div class="rating">⭐ ⭐ ⭐ ⭐ ⭐</div>
              <h4>{{ $buku->judul }}</h4>
              <p class="price">Rp {{ number_format($buku->harga) }}</p>
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

  {{-- FANTASY --}}
  <div class="book-section">
    <div class="section-header">
      <h2>Fantasy</h2>
      <a href="" class="orange-btn">view all</a>
    </div>
    <div class="book-grid">
      @php $count = 0; @endphp
      @foreach ($index as $buku)
        @if (strtolower($buku->kategori) === 'fantasy')
          <div class="book-card">
            <div class="favorite-icon">
            <i class="fas fa-heart"></i>
            </div>
            <img src="{{ asset($buku->cover) }}" alt="cover">
            <div class="rating">⭐ ⭐ ⭐ ⭐ ⭐</div>
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
</section>

<!-- KATEGORI KHUSUS -->
@foreach (['fantasy', 'horror'] as $kategori)
<section class="book-section kategori-section" data-kategori="{{ $kategori }}" style="display: none;">
  <div class="section-header">
    <h2>{{ ucfirst($kategori) }}</h2>
  </div>
  <div class="book-grid">
    @foreach ($index as $buku)
      @if (strtolower($buku->kategori) === $kategori)
        <div class="book-card">
          <img src="{{ asset($buku->cover) }}" alt="cover">
          <div class="rating">⭐ ⭐ ⭐ ⭐ ⭐</div>
          <h4>{{ $buku->judul }}</h4>
          <p class="price">Rp {{ number_format($buku->harga) }}</p>
          <a href="{{ route('produk.show', $buku->slug) }}">
            <button class="view-btn">View</button>
          </a>
        </div>
      @endif
    @endforeach
  </div>
</section>
@endforeach

@endsection
@section('script')
<script>
  let kategoriAktif = 'all';

  // Jadikan global supaya bisa dipanggil dari onclick
  window.filterKategori = function(kategori) {
    kategoriAktif = kategori;

    const sections = document.querySelectorAll('.kategori-section');
    const buttons = document.querySelectorAll('.filter-btn');

    sections.forEach(function(section) {
      const k = section.dataset.kategori;
      if (kategori === 'all') {
        if (k === 'all') {
          section.style.display = 'block';
        } else {
          section.style.display = 'none';
        }
      } else {
        if (k === kategori) {
          section.style.display = 'block';
        } else {
          section.style.display = 'none';
        }
      }
    });

    buttons.forEach(function(btn) {
      btn.classList.remove('active');
    });

    const activeBtn = document.querySelector('.filter-btn[data-filter="' + kategori + '"]');
    if (activeBtn) {
      activeBtn.classList.add('active');
    }

    applySearchFilter();
  };

  // Inisialisasi semua tombol kategori
  document.querySelectorAll('.filter-btn').forEach(function(button) {
    button.addEventListener('click', function () {
      filterKategori(button.dataset.filter);
    });
  });

  // Jalankan filter saat input diketik
  document.getElementById('search-input').addEventListener('input', function () {
    applySearchFilter();
  });

  // Fungsi filter pencarian judul
  function applySearchFilter() {
  const keyword = document.getElementById('search-input').value.toLowerCase();
  const sections = document.querySelectorAll('.kategori-section');

  sections.forEach(function(section) {
    if (section.style.display === 'none') return;

    const allBookSections = section.querySelectorAll('.book-section');

    // Jika dalam kategori "all" → terdapat 2 sub book-section (horror & fantasy)
    if (kategoriAktif === 'all') {
      allBookSections.forEach(function(bookSection) {
        const cards = bookSection.querySelectorAll('.book-card');
        let count = 0;

        cards.forEach(function(card) {
          const title = card.querySelector('h4').textContent.toLowerCase();
          if (title.includes(keyword) && count < 5) {
            card.style.display = 'block';
            count++;
          } else {
            card.style.display = 'none';
          }
        });
      });
    } else {
      // kategori spesifik
      const cards = section.querySelectorAll('.book-card');
      cards.forEach(function(card) {
        const title = card.querySelector('h4').textContent.toLowerCase();
        if (title.includes(keyword)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }
  });
}

</script>
@endsection

