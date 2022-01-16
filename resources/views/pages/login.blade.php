@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2 text-center mb-4">Login Admin</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            @if ($errors->any())
            <div class="alert alert-danger mb-3" role="alert">
                <strong>Login gagal!!</strong> Pastikan email dan password benar.
            </div>
            @endif
            @if (session('failed'))
                {!! session('failed') !!}
            @endif
            <form action="/admin/login" method="post">
            @csrf
                <div class="mb-3 form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3 form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-daftar w-100">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection
