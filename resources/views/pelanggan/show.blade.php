@extends('layout.layout')
@section('content')
<div class="container py-4">
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

                    <p class="text-secondary mb-4">{{ $product->deskripsi }}</p>

                    <hr>

                    <p class="mb-4">
                        <strong>Status:</strong>
                        {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                    </p>

                    @php
                    $nomorWhatsapp = '6281234567890';
                    $pesan = "Halo, saya mau pesan {$product->produk}.";
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

    <a href="{{ route('pelanggan.index', ['page' => request('page', 1)]) }}" class=" btn btn-outline-secondary mt-3">
        Kembali ke daftar produk
    </a>
</div>
@endsection