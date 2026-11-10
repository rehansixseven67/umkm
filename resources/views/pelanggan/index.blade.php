@extends('layout.layout')
@section('content')
<div class="card">
    <div class="card-header py-3">
        <div class="row g-3 align-items-center">
            <div class="col-lg-3 col-md-6 me-auto">
                <div class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="search produts">
                </div>
            </div>
            <div class="card-body">
                <div class="product-grid">
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3">
                        @forelse ($products as $product)
                        <div class="col">
                            <div class="card border shadow-none mb-0">
                                <div class="card-body text-center">
                                    @if ($product->image)
                                    <img
                                        src="{{ asset('storage/' . $product->image) }}"
                                        class="img-fluid mb-3"
                                        alt="{{ $product->produk }}">
                                    @endif

                                    <h6 class="product-title">{{ $product->produk }}</h6>
                                    <p class="product-price fs-5 mb-1">
                                        Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                                    </p>
                                    <p>{{ $product->category?->kategori ?? '-' }}</p>
                                    <small>Status: {{ ucfirst(str_replace('_', ' ', $product->status)) }}</small>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>Belum ada produk.</p>
                        @endforelse
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection