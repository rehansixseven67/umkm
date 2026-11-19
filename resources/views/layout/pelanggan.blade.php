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
            <a class="nav-button" href="{{ route('pelanggan.index') }}">Jelajahi Produk</a>
        </div>
    </nav>
    <div class="customer-home">
        @yield('content')
    </div>

</body>
</html>