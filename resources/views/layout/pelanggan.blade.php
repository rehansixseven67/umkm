<!DOCTYPE html>
<html lang="en" class="pelanggan">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturally55</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pelanggan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="home-nav">
        <a class="brand" href="{{ route('pelanggan.home') }}">
            <i class="bi bi-leaf-fill" aria-hidden="true"></i>
            <span class="brand-name">Naturally55</span>
        </a>

        <button class="nav-toggle" type="button"
            aria-expanded="false" aria-controls="customer-nav-links">
            <i class="bi bi-list" aria-hidden="true"></i>
            <span class="visually-hidden">Buka navigasi</span>
        </button>

        <div class="nav-links" id="customer-nav-links">
            <a class="{{ request()->routeIs('pelanggan.home') ? 'active' : '' }}"
                href="{{ route('pelanggan.home') }}">Beranda</a>

            <a class="{{ request()->routeIs('pelanggan.index', 'pelanggan.show') ? 'active' : '' }}"
                href="{{ route('pelanggan.index') }}">Semua Produk</a>

            <a class="{{ request()->routeIs('reviews.index') ? 'active' : '' }}"
                href="{{ route('reviews.index') }}">Ulasan</a>

            <a class="{{ request()->routeIs('kontak') ? 'active' : '' }}"
                href="{{ route('kontak') }}">Kontak</a>
            @guest
            <a class="nav-button" href="{{ route('login') }}">Masuk</a>
            <!-- <a class="nav-button" href="{{ route('register') }}">Daftar</a> -->
            @endguest
            @auth
            <div class="dropdown">
                <button
                    class="nav-button dropdown-toggle border-0"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ auth()->user()->name }}
                </button>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Keluar
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </nav>
    <div class="customer-home">
        @yield('content')
    </div>

    <footer class="pelanggan-footer">
        <div class="pelanggan-footer-inner">
            <div class="pelanggan-footer-about">
                <h2>Naturally55</h2>
                <p>menjual berbagai vitamin yg bermanfaat untuk semua kalangan dengan harga murah!</p>
            </div>

            <div class="pelanggan-footer-team">
                <h3>Developed By</h3>
                <p>Kelompok 1 - Kelas 12 PPLG 2</p>
                <p>SMK Media Informatika</p>

                <div class="pelanggan-footer-list">
                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-github"></i>nigas
                    </a>
                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-github"></i>nigas
                    </a>
                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-github"></i>nigas
                    </a>
                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-github"></i>nigas
                    </a>
                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-github"></i>nigas
                    </a>
                </div>
            </div>
        </div>
        <center>
            <div class="pelanggan-footer-inner pelanggan-footer-copy">
                © {{ date('Y') }} Naturally55. Semua Hak Cipta Dilindungi.
            </div>
        </center>
    </footer>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('assets/js/toogle.js')}}"></script>
</body>

</html>