@extends('admin.layout')
@section('content')
<a href="{{ route('product.create') }}" class="btn btn-primary ms-auto mb-2">tambah data produk</a>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">tambah produk</h5>
            <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                <input class="form-control ps-5" type="text" placeholder="search">
            </form>
        </div>
        <div class="table-responsive mt-3">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>foto produk</th>
                        <th>produk</th>
                        <th>harga</th>
                        <th>kategori</th>
                        <th>status</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>

                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="{{ asset('storage/' . $product->image) }}"
                                    class="rounded"
                                    width="100"
                                    height="100"
                                    alt="{{ $product->produk }}">
                            </div>
                        </td>
                        <td>{{ $product->produk }}</td>
                        <td>Rp {{ number_format((float) $product->harga * 1000, 0, ',', '.') }}</td>
                        <td>{{ $product->category?->kategori ?? '-' }}</td>
                        <td>{{ ucfirst(str_replace('_', ' ', $product->status)) }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                                <a href="{{ route('product.edit', $product->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger border-0 bg-transparent"
                                        onclick="return confirm('Hapus produk?')">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection