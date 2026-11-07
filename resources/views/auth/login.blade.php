@extends('layout.layout')
@section('content')
<div class="row justify-content-center w-100">
    <div class="col-12 col-sm-10 col-md-8 col-lg-5">
        <div class="card">
            <div class="card-body p-4">
                <h6 class="mb-3 text-uppercase">Login Dashboard Admin</h6>
                <hr />
                <form action="{{ route('login.submit') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="username" class="form-label">username</label>
                        <input id="username" name="username" type="text" class="form-control" placeholder="username bebas" required autofocus>
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" name="password" type="password" placeholder="password bebas" class="form-control" required>
                    </div>
                    <div class="col-6 text-end">
                        <a href="javascript:;">Forgot Password?</a>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection