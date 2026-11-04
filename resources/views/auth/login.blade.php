@extends('layout.layout')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="border p-3 rounded">
            <h6 class="mb-0 text-uppercase">Login form</h6>
            <hr />
            <form class="row g-3">
                <div class="col-12">
                    <label class="form-label">Email ID</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-6 text-end">
                    <a href="javascript:;">Forgot Password?</a>
                </div>
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <p class="mb-0">Not a member? <a href="javascript:;">Register</a></p>
                </div>
                <!-- <div class="col-12 text-center">
                    <p class="mb-0">or sign up with:</p>
                </div>
                <div class="col-12 text-center">
                    <div class="error-social">
                        <a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                        <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div> -->
            </form>
        </div>
    </div>
</div>
@endsection