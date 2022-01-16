@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    <p>Manajemen Penerimaan Peserta Didik</p>
    <a href="/admin/recruitment/create" class="btn btn-info text-white">Buat Pendaftaran Baru</a>
    <hr class="my-4">
    @if (session('message'))
        {!! session('message') !!}
    @endif

    <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tahun Ajaran</th>
            <th scope="col">Pembukaan</th>
            <th scope="col">Penutupan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($recruitments as $recruitment)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td scope="row">{{ $recruitment->tahun_ajaran }}</td>
                <td scope="row">{{ $recruitment->pembukaan }}</td>
                <td scope="row">{{ $recruitment->penutupan }}</td>
                <td>
                    <a href="/admin/recruitment/{{ $recruitment->id }}/edit" class="btn btn-sm btn-daftar">Ubah</a>
                    <form action="/admin/recruitment/{{ $recruitment->id}}" method="post" class="d-inline">
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>


@endsection
