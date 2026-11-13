@extends('layout.layout')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <div class="row g-3 align-items-center">
            <div class="col-lg-3 col-md-6 me-auto">
                <div class="position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                        <i class="bi bi-search"></i>
                    </div>
                    <input class="form-control ps-5" type="text" placeholder="Cari produk">
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="product-grid">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-5 g-3">
                @forelse ($products as $product)
                    <div class="col d-flex">
                        <div class="card border shadow-none mb-0 w-100 h-100">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3">
                                    @if ($product->image)
                                        <img
                                            src="{{ asset('storage/' . $product->image) }}"
                                            class="w-100 h-100"
                                            style="object-fit: contain;"
                                            alt="{{ $product->produk }}">
                                    @else
                                        <div class="d-flex align-items-center justify-content-center text-muted">
                                            Gambar tidak tersedia
                                        </div>
                                    @endif
                                </div>

                                <h6 class="product-title text-truncate">
                                    <a
                                        href="{{ route('pelanggan.show', $product) }}"
                                        class="stretched-link text-dark text-decoration-none fs-4 fw-semibold">
                                        {{ $product->produk }}
                                    </a>
                                </h6>

                                <p class="product-price fs-5 mb-1 text-truncate">
                                    Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                                </p>

                                <p class="text-truncate">
                                    {{ $product->category?->kategori ?? '-' }}
                                </p>

                                <small class="text-truncate">
                                    Status: {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                                </small>

                                <a
                                    href="{{ route('pelanggan.show', $product) }}"
                                    class="btn btn-dark mt-auto mt-3 position-relative">
                                    Detail Produk
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="mb-0">Belum ada produk.</p>
                    </div>
                @endforelse
            </div>
        </div>

        @if ($products->hasPages())
            <div class="mt-4 d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</div>
@endsection