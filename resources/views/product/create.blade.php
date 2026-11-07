@extends('layout.layout')
@section('content')
<h1>halaman tambah produk</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">

                <label class="form-label">
                    foto produk
                </label>

                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">

                <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>

            </div>
            <div class="mb-3">
                <label for="produk" class="form-label">produk</label>
                <input type="string" class="form-control" name="produk" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input class="form-control" type="string" name="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    <option value="">Pilih Status</option>
                    <option value="ada">Ada</option>
                    <option value="hampir_habis">Hampir Habis</option>
                    <option value="habis">Habis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input class="form-control" type="string" name="harga" required>
            </div>
            <div class="mb-3">
                <label for="kategori_id" class="form-label">kategori</label>
                <select name="kategori_id" class="form-control" required>
                    <option value="">Pilih kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id_kategori }}">{{ $category->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">tambahkan produk</button>
            <a href="{{ route('product.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div>
@endsection