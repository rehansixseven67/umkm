@extends('layout.pelanggan')

@section('content')
<main class="home-container py-4">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Ulasan Pelanggan</p>
            <h2>Ulasan dari Pelanggan</h2>
        </div>
    </div>

    @forelse ($reviews as $review)
    <article class="card border shadow-sm mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between flex-wrap gap-2">
                <strong>{{ $review->user->name }}</strong>
                <small class="text-secondary">
                    {{ $review->created_at?->format('d M Y') }}
                </small>
            </div>

            <p class="mb-2">
                Produk: {{ $review->product->produk }}
            </p>

            <div class="mb-2" aria-label="Rating {{ $review->rating }} dari 5">
                @for ($star = 1; $star <= 5; $star++)
                    @if ($star <=$review->rating)
                    <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                    @else
                    <i class="bi bi-star text-secondary" aria-hidden="true"></i>
                    @endif
                    @endfor
            </div>
            <p class="mb-0">{{ $review->ulasan }}</p>
        </div>
    </article>
    @empty
    <p>Belum ada ulasan.</p>
    @endforelse

    @if ($reviews->hasPages())
    <div class="product-pagination">
        {{ $reviews->links() }}
    </div>
    @endif
</main>
@endsection