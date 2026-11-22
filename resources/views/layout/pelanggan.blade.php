<!DOCTYPE html>
<html lang="en" class="pelanggan">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturally55</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pelanggan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="home-nav">
        <a class="brand" href="{{ route('pelanggan.home') }}">Naturally55</a>

        <div class="nav-links">
            <a href="{{ route('pelanggan.home') }}">Beranda</a>
            <a href="{{ route('pelanggan.index') }}">Semua Produk</a>
            <a href="{{ route('kontak') }}">Kontak</a>
            @guest
            <a class="nav-button" href="{{ route('login') }}">Masuk</a>
            <!-- <a class="nav-button" href="{{ route('register') }}">Daftar</a> -->
            @endguest
            @auth
            <span class="nav-button">
                {{ auth()->user()->name }}
                <small class="ms-1">
                    ({{ auth()->user()->getRoleNames()->first() ?? 'User' }})
                </small>
            </span>

            <form method="POST" action="{{ route('logout') }}" class="m-0">
                @csrf
                <button type="submit" class="nav-button border-0">Keluar</button>
            </form>
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

</body>

</html>