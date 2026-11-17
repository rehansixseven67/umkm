@extends('layout.pelanggan')
@section('content')
<main>

    <section class="hero">
        <div class="hero-content">
            <p class="eyebrow">Informasi Toko Online</p>
            <h1>Naturally55</h1>
            <p>
                nyenyenyenyenyenyenyenyenyenyenyenyenyenyenyenye
            </p>
            <a class="hero-button" href="{{ route('pelanggan.index') }}">
                kunjungi tokopedia
            </a>
        </div>

        <div class="hero-visual">
    <img
        src="{{ asset('assets/images/profil_naturally55.png') }}"
        alt="Naturally55">
</div>
    </section>

    <section class="home-container">
        <div class="section-heading">
            <div>
                <h2>Produk terbaru</h2>
                <p>Pilihan produk terbaru dari UMKM lokal.</p>
            </div>
            <a class="text-link" href="{{ route('pelanggan.index') }}">
                Lihat semua produk →
            </a>
        </div>

        <div class="product-grid">
            @forelse ($products as $product)
            <article class="product-card">
                <a
                    href="{{ route('pelanggan.show', ['product' => $product]) }}"
                    aria-label="Lihat {{ $product->produk }}">
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
                        Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                    </p>
                    <a
                        class="product-button"
                        href="{{ route('pelanggan.show', ['product' => $product]) }}">
                        Lihat detail
                    </a>
                </div>
            </article>
            @empty
            <p class="empty-products">Belum ada produk yang tersedia.</p>
            @endforelse
        </div>
    </section>
</main>
@endsection