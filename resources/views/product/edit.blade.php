@extends('admin.layout')
@section('content')
<h1>edit produk</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('product.update', $product->id) }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Produk</label>
                <input type="text" name="produk" class="form-control"
                    value="{{ old('produk', $product->produk) }}" required>
                @error('produk') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control"
                    value="{{ old('deskripsi', $product->deskripsi) }}" required>
                @error('deskripsi') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" step="0.01" name="harga" class="form-control"
                    value="{{ old('harga', $product->harga) }}" required>
                @error('harga') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="tokopedia_url">Link Tokopedia</label>
                <input
                    type="url"
                    name="tokopedia_url"
                    id="tokopedia_url"
                    class="form-control"
                    value="{{ old('tokopedia_url', $product->tokopedia_url ?? '') }}"
                    placeholder="https://www.tokopedia.com/...">
                @error('tokopedia_url')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select name="kategori_id" id="kategori_id" class="form-select" required>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id_kategori }}"
                        @selected(old('kategori_id', $product->kategori_id) == $category->id_kategori)>
                        {{ $category->kategori }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select" required>
                    @foreach (['ada' => 'Ada', 'hampir_habis' => 'Hampir Habis', 'habis' => 'Habis'] as $value => $label)
                    <option value="{{ $value }}"
                        @selected(old('status', $product->status) === $value)>
                        {{ $label }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui produk</button>
            <a href="{{ route('product.index') }}" class="btn btn-outline-warning">Kembali</a>
        </form>
    </div>
</div>
@endsection