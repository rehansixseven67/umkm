@extends('admin.layout')

@section('content')
<div class="mb-4">
    <h3>Selamat Datang, {{ auth()->user()->name }}!</h3>
    <p>Kelola data dan pantau perkembangan produk Naturally55.</p>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3 mb-4">
    <div class="col">
        <div class="card radius-10 border-0 border-start border-tiffany border-3 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Total Produk</p>
                        <h4 class="mb-0 text-tiffany">{{ $totalProducts }}</h4>
                    </div>
                    <div class="ms-auto widget-icon bg-tiffany text-white">
                        <i class="bi bi-bag-check-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10 border-0 border-start border-success border-3 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Total Pelanggan</p>
                        <h4 class="mb-0 text-success">226</h4>
                    </div>
                    <div class="ms-auto widget-icon bg-success text-white">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10 border-0 border-start border-pink border-3 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Total Barang Terjual</p>
                        <h4 class="mb-0 text-pink">5.9rb</h4>
                    </div>
                    <div class="ms-auto widget-icon bg-pink text-white">
                        <i class="bi bi-cart-check-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10 border-0 border-start border-orange border-3 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Rating</p>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <h4 class="mb-0 text-orange">4.8</h4>
                        </div>
                    </div>
                    <div class="ms-auto widget-icon bg-orange text-white">
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card radius-10">
    <div class="card-header">
        <h5 class="mb-0">Produk Terbaru</h5>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Ditambahkan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($latestProducts as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($product->image)
                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->produk }}"
                                width="50"
                                height="50"
                                class="rounded"
                                style="object-fit: cover;">
                            @else
                            <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>{{ $product->produk }}</td>
                        <td>{{ $product->category?->kategori ?? '-' }}</td>
                        <td>
                            Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                        </td>
                        <td>{{ $product->created_at?->format('d M Y') ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Belum ada produk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection