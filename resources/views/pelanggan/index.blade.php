@extends('layout.pelanggan')

@section('content')
<main class="home-container">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Katalog Produk</p>
            <h2>Semua Produk</h2>
          
        </div>
        <form class="product-search" action="{{ route('pelanggan.index') }}" method="GET">
            <input
                type="search"
                name="search"
                value="{{ $search }}"
                placeholder="Cari produk"
                aria-label="Cari produk">

            <button type="submit">Cari</button>

            @if ($search !== '')
            <a href="{{ route('pelanggan.index') }}" class="search-clear">Reset</a>
            @endif
        </form>
    </div>

    <div class="product-grid">
        @forelse ($products as $product)
        <article class="product-card">
            <a href="{{ route('pelanggan.show', [
                    'product' => $product,
                    'page' => $products->currentPage(),
                ]) }}">
                <div class="product-image">
                    @if ($product->image)
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->produk }}">
                    @else
                    <span>Foto produk belum tersedia</span>
                    @endif
                </div>
            </a>

            <div class="product-info">
                <p class="product-category">
                    {{ $product->category?->kategori ?? 'Produk UMKM' }}
                </p>
                <h3>{{ $product->produk }}</h3>
                <p class="product-price">
                    Rp. {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                </p>
                <a
                    class="product-button"
                    href="{{ route('pelanggan.show', [
                            'product' => $product,
                            'page' => $products->currentPage(),
                        ]) }}">
                    Lihat detail
                </a>
            </div>
        </article>
        @empty
        <p class="empty-products">belum ada produk.</p>
        @endforelse
    </div>

    @if ($products->hasPages())
    <div class="product-pagination">
        {{ $products->links() }}
    </div>
    @endif
</main>
@endsection