@extends('admin.layout')

@section('content')
<div class="dashboard-heading mb-4">
    <h2>Selamat Datang, {{ auth()->user()->name }}!</h2>
    <!-- <p>Kelola data dan pantau perkembangan produk Naturally55.</p> -->
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3 mb-4">
    <div class="col">
        <div class="dashboard-stat-card h-100">
            <div class="stat-icon"><i class="bi bi-bag-fill"></i></div>
            <div class="stat-copy">
                <p>Total Produk</p>
                <h3>{{ number_format($totalProducts, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="dashboard-stat-card h-100">
            <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
            <div class="stat-copy">
                <p>Total User</p>
                <h3>{{ number_format($totalProducts, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="dashboard-stat-card h-100">
            <div class="stat-icon"><i class="bi bi-cart-check-fill"></i></div>
            <div class="stat-copy">
                <p>Total Barang Terjual</p>
                <h3>5.9k</h3>
                <!-- <small>Menunggu data transaksi</small> -->
            </div>
        </div>
    </div>
    <div class="col">
        <div class="dashboard-stat-card h-100">
            <div class="stat-icon"><i class="bi bi-star-fill"></i></div>
            <div class="stat-copy">
                <p>Rating</p>
                <h3>4.8 (1.2k)</h3>
                <!-- <small>Menunggu data ulasan</small> -->
            </div>
        </div>
    </div>
</div>

<div class="card dashboard-product-card border-0">
    <div class="card-header">
        <h5 class="mb-0"><i class="bi bi-box-seam me-2"></i>Produk Terbaru</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table dashboard-product-table align-middle mb-0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Ditambahkan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produkTerbaru as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->produk }}" class="dashboard-product-image">
                            @else
                            <div class="dashboard-product-placeholder"><i class="bi bi-image"></i></div>
                            @endif
                        </td>
                        <td class="product-name">{{ $product->produk }}</td>
                        <td><span class="dashboard-category-badge">{{ $product->category?->kategori ?? '-' }}</span></td>
                        <td>
                            Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}
                        </td>
                        <td>{{ $product->created_at?->format('d M Y') ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-product-action" title="Edit produk"><i class="bi bi-pencil-fill"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="dashboard-empty-state">
                            <i class="bi bi-inbox"></i>
                            <span>Belum ada produk yang ditambahkan.</span>
                            <a href="{{ route('product.create') }}">Tambah produk pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection