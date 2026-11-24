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
                <h3>{{ number_format($totalProducts, 0, ',', '.') }} produk</h3>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="dashboard-stat-card h-100">
            <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
            <div class="stat-copy">
                <p>Total User</p>
                <h3>{{ number_format($totalUsers, 0, ',', '.') }} user</h3>
                <small>
                    {{ number_format($totalAdmins, 0, ',', '.') }} admin,
                    {{ number_format($totalCustomers, 0, ',', '.') }} user
                </small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="dashboard-stat-card h-100">
            <div class="stat-icon"><i class="bi bi-chat-left-text-fill"></i></div>
            <div class="stat-copy">
                <p>Total Ulasan</p>
                <h3>{{ number_format($totalReviews, 0, ',', '.') }} ulasan</h3>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="dashboard-stat-card h-100">
            <div class="stat-icon"><i class="bi bi-star-fill"></i></div>
            <div class="stat-copy">
                <p>Rata-rata Rating</p>

                @php
                $displayRating = round((float) $averageRating * 2) / 2;
                @endphp

                <h3>{{ number_format((float) $averageRating, 1, ',', '.') }}</h3>

                <div aria-label="Rata-rata rating {{ number_format((float) $averageRating, 1, ',', '.') }} dari 5">
                    @for ($star = 1; $star <= 5; $star++)
                        @if ($star <=floor($displayRating))
                        <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                        @elseif (($star - $displayRating) == 0.5)
                        <i class="bi bi-star-half text-warning" aria-hidden="true"></i>
                        @else
                        <i class="bi bi-star text-secondary" aria-hidden="true"></i>
                        @endif
                        @endfor
                </div>

                <small>{{ number_format($totalReviews, 0, ',', '.') }} ulasan</small>
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
<div class="card dashboard-product-card border-0 mt-4">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="bi bi-chat-left-text me-2"></i>Ulasan Terbaru
        </h5>
    </div>
    @if (session('success'))
    <div class="alert alert-success m-3 mb-0">
        {{ session('success') }}
    </div>
    @endif

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table dashboard-product-table align-middle mb-0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Pelanggan</th>
                        <th>Produk</th>
                        <th>Rating</th>
                        <th>Ulasan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($latestReviews as $review)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $review->user?->name ?? '-' }}</td>
                        <td>{{ $review->product?->produk ?? '-' }}</td>
                        <td>
                            @for ($star = 1; $star <= 5; $star++)
                                <i
                                class="bi {{ $star <= $review->rating ? 'bi-star-fill text-warning' : 'bi-star text-secondary' }}"
                                aria-hidden="true"></i>
                                @endfor
                                <span>({{ $review->rating }}/5)</span>
                        </td>
                        <td>{{ $review->ulasan }}</td>
                        <td>{{ $review->created_at?->format('d M Y') ?? '-' }}</td>
                        <td>
                            <form
                                action="{{ route('reviews.destroy', $review) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus ulasan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="dashboard-empty-state">
                            Belum ada ulasan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection