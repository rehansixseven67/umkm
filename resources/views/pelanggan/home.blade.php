@extends('layout.layout')

@section('content')
<div class="card radius-10 mb-4">
    <div class="card-body p-4 p-lg-5">
        <p class="text-primary fw-bold">✨ Naturally55 — Pilihan Masa Kini ✨</p>

        <h1 class="display-6 fw-bold mb-3">
            Selamat datang di destinasi belanja impian Anda!
        </h1>

        <p class="fs-5 mb-4">
            Temukan, jelajahi, dan nikmati berbagai produk pilihan yang siap
            memberikan warna baru dalam keseharian Anda. Pengalaman belanja
            yang lebih mudah, lebih seru, dan penuh inspirasi dimulai di sini!
        </p>

        <a href="{{ route('pelanggan.index') }}" class="btn btn-primary btn-lg">
            Mulai Jelajahi Produk
            <i class="bi bi-arrow-right-circle ms-2"></i>
        </a>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card radius-10 h-100">
            <div class="card-body">
                <i class="bi bi-stars text-warning fs-3"></i>
                <h5 class="mt-3">Pilihan Penuh Inspirasi</h5>
                <p class="mb-0">
                    Temukan produk yang cocok untuk menemani setiap momen istimewa Anda.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card radius-10 h-100">
            <div class="card-body">
                <i class="bi bi-heart-fill text-danger fs-3"></i>
                <h5 class="mt-3">Dibuat untuk Anda</h5>
                <p class="mb-0">
                    Karena setiap pilihan kecil bisa membuat hari terasa lebih bermakna.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card radius-10 h-100">
            <div class="card-body">
                <i class="bi bi-lightning-charge-fill text-primary fs-3"></i>
                <h5 class="mt-3">Belanja Lebih Praktis</h5>
                <p class="mb-0">
                    Jelajahi katalog, lihat detail, lalu pilih produk yang Anda suka.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex align-items-center justify-content-between mb-3">
    <div>
        <h4 class="mb-1">Produk Pilihan untuk Anda</h4>
        <p class="mb-0">Lihat produk terbaru yang tersedia di katalog kami.</p>
    </div>

    <a href="{{ route('pelanggan.index') }}" class="text-primary">
        Lihat semua
    </a>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3">
    @forelse ($products as $product)
        <div class="col d-flex">
            <div class="card radius-10 w-100 h-100">
                <div class="card-body d-flex flex-column">
                    <div class="ratio ratio-4x3 mb-3">
                        @if ($product->image)
                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->produk }}"
                                class="w-100 h-100 rounded"
                                style="object-fit: contain;">
                        @else
                            <div class="d-flex align-items-center justify-content-center rounded bg-light text-muted">
                                Gambar tidak tersedia
                            </div>
                        @endif
                    </div>

                    <p class="small mb-1">
                        {{ $product->category?->kategori ?? 'Tanpa kategori' }}
                    </p>

                    <h5>{{ $product->produk }}</h5>

                    <p class="fw-semibold">
                        Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                    </p>

                    <a
                        href="{{ route('pelanggan.show', $product) }}"
                        class="btn btn-outline-primary mt-auto">
                        Temukan Detailnya
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="card radius-10">
                <div class="card-body">
                    Belum ada produk untuk dijelajahi. Silakan kembali lagi nanti!
                </div>
            </div>
        </div>
    @endforelse
</div>
@endsection