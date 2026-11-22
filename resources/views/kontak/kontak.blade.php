@extends('layout.pelanggan')

@section('content')
<main class="home-container py-5">
    <div class="text-center mb-4">
        <p class="text-success fw-semibold mb-1">Kami siap membantu</p>
        <h1 class="fw-bold">Kontak Naturally55</h1>
        <p class="text-secondary">Hubungi kami melalui media sosial atau email.</p>
    </div>

    <div class="row g-3 justify-content-center">
        <div class="col-12 col-sm-6 col-lg-4">
            <a class="card h-100 shadow-sm text-decoration-none text-dark"
               href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer">
                <div class="card-body d-flex align-items-center gap-3">
                    <i class="bi bi-whatsapp fs-2 text-success"></i>
                    <span><strong>WhatsApp</strong><br><small>Chat dengan kami</small></span>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <a class="card h-100 shadow-sm text-decoration-none text-dark"
               href="https://instagram.com/username" target="_blank" rel="noopener noreferrer">
                <div class="card-body d-flex align-items-center gap-3">
                    <i class="bi bi-instagram fs-2 text-danger"></i>
                    <span><strong>Instagram</strong><br><small>@username</small></span>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <a class="card h-100 shadow-sm text-decoration-none text-dark"
               href="https://www.tiktok.com/@username" target="_blank" rel="noopener noreferrer">
                <div class="card-body d-flex align-items-center gap-3">
                    <i class="bi bi-tiktok fs-2"></i>
                    <span><strong>TikTok</strong><br><small>@username</small></span>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <a class="card h-100 shadow-sm text-decoration-none text-dark"
               href="mailto:email@contoh.com">
                <div class="card-body d-flex align-items-center gap-3">
                    <i class="bi bi-envelope-fill fs-2 text-primary"></i>
                    <span><strong>Email</strong><br><small>email@contoh.com</small></span>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <a class="card h-100 shadow-sm text-decoration-none text-dark"
               href="https://facebook.com/username" target="_blank" rel="noopener noreferrer">
                <div class="card-body d-flex align-items-center gap-3">
                    <i class="bi bi-facebook fs-2 text-primary"></i>
                    <span><strong>Facebook</strong><br><small>Halaman Facebook kami</small></span>
                </div>
            </a>
        </div>
    </div>
</main>
@endsection