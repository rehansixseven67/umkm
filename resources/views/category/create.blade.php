@extends('admin.layout')
@section('content')
<h1>Tambah kategori</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kategori" class="form-label">kategori</label>
                <input type="text" class="form-control" name="kategori" required>
            </div>

            <!-- <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input type="number" class="form-control" name="deskripsi" nullable>
            </div> -->

            <!-- <div class="mb-3">

                <label class="form-label">
                    foto 
                </label>

                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">

                <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>

            </div> -->
            <!-- <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    <option value="">Pilih Status</option>
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak_tersedia">Tidak Tersedia</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary">tambahkan kategori</button>
            <a href="{{ route('category.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div>
@endsection