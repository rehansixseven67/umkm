@extends('admin.layout')
@section('content')



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
    <form action="{{ route('admin.reviews.index') }}" method="GET" class="p-3 border-bottom">
        <label for="review-search" class="form-label">Cari ulasan, pelanggan, atau produk</label>

        <div class="d-flex flex-wrap gap-2">
            <input
                type="search"
                id="review-search"
                name="search"
                class="form-control"
                value="{{ $search }}"
                placeholder="Masukkan kata pencarian">

            <button type="submit" class="btn btn-success">Cari</button>

            @if ($search !== '' || $rating !== '')
            <a href="{{ route('admin.reviews.index') }}" class="btn btn-outline-secondary">
                Reset
            </a>
            @endif
        </div>

        <div class="d-flex flex-wrap align-items-center gap-3 mt-3">
            <span class="fw-semibold">Filter rating:</span>

            <label class="d-flex align-items-center gap-1">
                <input
                    type="radio"
                    name="rating"
                    value=""
                    @checked($rating==='' )
                    onchange="this.form.submit()">
                Semua
            </label>

            @for ($value = 1; $value <= 5; $value++)
                <label class="d-flex align-items-center gap-1">
                <input
                    type="radio"
                    name="rating"
                    value="{{ $value }}"
                    @checked((string) $rating===(string) $value)
                    onchange="this.form.submit()">

                @for ($star = 1; $star <= $value; $star++)
                    <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                    @endfor
                    </label>
                    @endfor
        </div>
    </form>
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
                    @forelse ($reviews as $review)
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
                    @if ($reviews->hasPages())
                    <div class="p-3">
                        {{ $reviews->links() }}
                    </div>
                    @endif
                </tbody>
            </table>

        </div>
        @if ($reviews->hasPages())
        <div class="p-3">
            {{ $reviews->links() }}
        </div>
        @endif
    </div>
</div>
@endsection