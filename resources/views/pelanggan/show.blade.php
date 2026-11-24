@extends('layout.pelanggan')
@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h2 class="fw-bold mb-1">detail produk</h2>
        <p class="text-secondary mb-0">
            Lihat detail dan informasi produk sebelum memesan!!
        </p>
    </div>
    <div class="card border shadow-sm">

        <div class="card-body p-3 p-lg-4">

            <div class="row g-4">

                <div class="col-lg-6">
                    @if ($product->image)
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        class="img-fluid rounded border w-100"
                        alt="{{ $product->produk }}">
                    @else
                    <div class="bg-light rounded border d-flex align-items-center justify-content-center"
                        style="min-height: 350px">
                        <span class="text-muted">Foto produk belum tersedia</span>
                    </div>
                    @endif
                </div>

                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3">
                            <li class="breadcrumb-item">
                                <a href="{{ route('pelanggan.index', ['page' => request('page', 1)]) }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $product->category?->kategori ?? 'Produk' }}
                            </li>
                        </ol>
                    </nav>

                    <h1 class="h2 fw-bold">{{ $product->produk }}</h1>

                    <p class="fs-2 fw-semibold text-success mb-3">
                        Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                    </p>
                    @if ($totalReviews > 0)
                    @php
                    $displayRating = round((float) $averageRating * 2) / 2;
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
                                {{ number_format((float) $averageRating, 1, ',', '.') }}
                                ({{ $totalReviews }} ulasan)
                            </small>
                    </span>
                    @else
                    <p class="text-secondary mb-3">Belum ada rating</p>
                    @endif

                    <div class="mt-4">
                        <h5 class="fw-bold">Tentang produk</h5>
                        <p class="text-secondary mb-0">{{ $product->deskripsi }}</p>
                    </div>
                    <hr>

                    <p class="mb-4">
                        <strong>Status:</strong>
                        {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                    </p>

                    @php
                    $nomorWhatsapp = '6285710135707';
                    $pesan = "halo, saya mau pesan {$product->produk}, apakah barangnya ready?";
                    @endphp

                    <a
                        href="https://wa.me/{{ $nomorWhatsapp }}?text={{ urlencode($pesan) }}"
                        class="btn btn-success btn-lg w-100 mb-3"
                        target="_blank"
                        rel="noopener noreferrer">
                        <i class="bi bi-whatsapp me-2"></i>
                        Hubungi Penjual via WhatsApp
                    </a>

                    @if ($product->tokopedia_url)
                    <a
                        href="{{ $product->tokopedia_url }}"
                        class="btn btn-outline-success btn-lg w-100"
                        target="_blank"
                        rel="noopener noreferrer">
                        Beli di Tokopedia
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card border shadow-sm mt-4">
        <div class="card-body">
            <h4 class="fw-bold">Beri Rating dan Ulasan</h4>

            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->has('ulasan'))
            <div class="alert alert-danger">{{ $errors->first('ulasan') }}</div>
            @endif

            @if ($userReview)
            <p class="text-secondary mb-0">Kamu sudah memberi ulasan untuk produk ini.</p>
            @else
            @auth
            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <div class="mb-3">
                    <span class="form-label d-block">Rating</span>

                    @for ($rating = 5; $rating >= 1; $rating--)
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="rating"
                            id="rating-{{ $rating }}"
                            value="{{ $rating }}"
                            @checked(old('rating')==$rating)
                            required>

                        <label class="form-check-label" for="rating-{{ $rating }}">
                            <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                            {{ $rating }} (
                            @for ($star = 0; $star < $rating; $star++)
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                @endfor
                                )
                        </label>
                    </div>
                    @endfor

                    @error('rating')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ulasan" class="form-label">Ulasan</label>
                    <textarea
                        name="ulasan"
                        id="ulasan"
                        class="form-control"
                        rows="4"
                        maxlength="1000"
                        required>{{ old('ulasan') }}</textarea>
                    @error('ulasan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Kirim Ulasan</button>
            </form>
            @else
            <p>
                <a href="{{ route('login') }}">Login</a> untuk memberi ulasan.
            </p>
            @endauth
            @endif
        </div>
    </div>
    <div class="card border shadow-sm mt-4">
        <div class="card-body">
            <h4 class="fw-bold">Ulasan Pelanggan</h4>

            @forelse ($product->reviews as $review)
            <div class="border-bottom py-3">
                <div class="d-flex justify-content-between flex-wrap gap-2">
                    <strong>{{ $review->user?->name ?? 'Pelanggan' }}</strong>
                    <small class="text-secondary">
                        {{ $review->created_at?->format('d M Y') }}
                    </small>
                </div>

                <div class="my-2" aria-label="Rating {{ $review->rating }} dari 5">
                    @for ($star = 1; $star <= 5; $star++)
                        <i
                        class="bi {{ $star <= $review->rating ? 'bi-star-fill text-warning' : 'bi-star text-secondary' }}"
                        aria-hidden="true"></i>
                        @endfor
                </div>

                <p class="mb-0">{{ $review->ulasan }}</p>
            </div>
            @empty
            <p class="text-secondary mb-0">Belum ada ulasan untuk produk ini.</p>
            @endforelse
        </div>
    </div>
    <a href="{{ route('pelanggan.index', ['page' => request('page', 1)]) }}" class=" btn btn-outline-secondary mt-3">
        Kembali ke daftar produk
    </a>
</div>
@endsection