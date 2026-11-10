@extends('admin.layout')
@section('content')
<h1>edit kategori</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('category.update', $category->id_kategori) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="kategori" class="form-label">kategori</label>
                <input type="text" class="form-control" name="kategori" value="{{ $category->kategori }}" required>
            </div>

            <!-- <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" value="{{ $category->jumlah }}" required>
            </div> -->
            <!-- <div class="mb-3">

                <label class="form-label">
                    foto alat ada
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
            <button type="submit" class="btn btn-primary">perbarui alat tersedia</button>
            <a href="{{ route('category.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div>
@endsection