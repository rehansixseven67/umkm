@extends('layout.layout')
@section('content')
<h1>Tambah Produk</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" required>
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
                <label class="form-label">
                    foto produk
                </label>
                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">
                <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('product.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div>
@endsection