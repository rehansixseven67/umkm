@extends('layout.layout')
@section('content')
<h1>edit produk</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('product.update', $product->id_product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="{{ $product->nama_produk }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="{{ $product->deskripsi }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" value="{{ $product->kategori }}" required>
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
            <label class="form-label">
                foto produk
            </label>

            <input type="file"
                name="image"
                class="form-control"
                accept="image/jpeg,image/png,image/jpg,image/webp">

            <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>

    </div>
    <button type="submit" class="btn btn-primary">perbarui produk</button>
    <a href="{{ route('product.index') }}" class="btn btn-outline-warning">kembali</a>
    </form>
</div>
</div>
@endsection