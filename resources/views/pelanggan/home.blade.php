@extends('layout.pelanggan')
@section('content')
<main>
    <div class="home-container">
        <!-- <img src="{{ asset('assets/images/naturally55_banner.png') }}" alt=""> -->
    </div>
    <section class="hero">

        <div class="hero-content">
            <p class="eyebrow">Informasi Toko Online</p>
            <h1>Naturally55</h1>
            <p>
                nyenyenyenyenyenyenyenyenyenyenyenyenyenyenyenye
            </p>
            <a class="hero-button" href="https://tk.tokopedia.com/ZSpKsdv9T/">
                kunjungi di tokopedia!
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
                <h2>Produk terpopuler</h2>
                <p>berikut adalah produk yg paling banyak dibeli.</p>
            </div>
            <a class="text-link" href="{{ route('pelanggan.index') }}">
                Lihat semua produk <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="product-grid">
            @forelse ($produkTerlaris as $product)
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
                    @if ($product->reviews_count > 0)
                    @php
                    $displayRating = round((float) $product->reviews_avg_rating * 2) / 2;
                    @endphp

                    <span class="d-block mb-3">
                        @for ($star = 1; $star <= 5; $star++)
                            @if ($star <=floor($displayRating))
                            <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                            @elseif (($star - $displayRating) == 0.5)
                            <i class="bi bi-star-half text-warning" aria-hidden="true"></i>
                            @else
                            <i class="bi bi-star text-secondary" aria-hidden="true"></i>
                            @endif
                            @endfor

                            <small class="text-secondary">
                                {{ number_format((float) $product->reviews_avg_rating, 1, ',', '.') }}
                                ({{ $product->reviews_count }})
                            </small>
                    </span>
                    @else
                    <p class="text-secondary mb-3">Belum ada rating</p>
                    @endif
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

    <section class="home-container">
        <div class="section-heading">
            <div>
                <h2>Produk terbaru</h2>
                <p>berikut adalah produk yg baru ditambahkan.</p>
            </div>
            <a class="text-link" href="{{ route('pelanggan.index') }}">
                Lihat semua produk <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="product-grid">
            @forelse ($produkTerbaru as $product)
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
                    @if ($product->reviews_count > 0)
                    @php
                    $displayRating = round((float) $product->reviews_avg_rating * 2) / 2;
                    @endphp

                    <span class="d-block mb-3">
                        @for ($star = 1; $star <= 5; $star++)
                            @if ($star <=floor($displayRating))
                            <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                            @elseif (($star - $displayRating) == 0.5)
                            <i class="bi bi-star-half text-warning" aria-hidden="true"></i>
                            @else
                            <i class="bi bi-star text-secondary" aria-hidden="true"></i>
                            @endif
                            @endfor

                            <small class="text-secondary">
                                {{ number_format((float) $product->reviews_avg_rating, 1, ',', '.') }}
                                ({{ $product->reviews_count }})
                            </small>
                    </span>
                    @else
                    <p class="text-secondary mb-3">Belum ada rating</p>
                    @endif
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