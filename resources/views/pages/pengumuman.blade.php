@extends('layouts.main')

@section('content')

    <h1 class="fs-2">Informasi Data Penerimaan Calon Peserta Didik</h1>
    <hr class="my-4">
    <p>Berikut adalah semua data calon peserta didik berdasarkan tahun ajaran yang diterima maupun tidak diterima</p>

    @if( count($recruitments) > 0 )
    <form action="/admin/index" method="get">
        <label>Temukan Calon Peserta Didik</label>
        <div class="mb-3 row">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari nama atau informasi lain yang terkait" value="{{ request('search') }}">
                    <select class="form-select" name="tahun_ajaran" style="max-width: 150px;">
                        @foreach ($recruitments as $recruitment)
                        <option value="{{ $recruitment->tahun_ajaran }}" {{ request('tahun_ajaran') == $recruitment->tahun_ajaran ? 'selected' : '' }}>{{ $recruitment->tahun_ajaran }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-info text-white">Cek</button>
                </div>
            </div>
        </div>
    </form>
    @endif

    @if( count($students) > 0 )
    <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nama Panggilan</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Daftar</th>
            <th scope="col">Status Penerimaan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($students as $student)
          <tr valign="middle">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $student->nama_lengkap }}</td>
            <td>{{ $student->nama_panggilan }}</td>
            <td>{{ $student->jk }}</td>
            <td>{{ $student->created_at }}</td>
            <td>
                @if ( $student->diterima == 'lolos' )
                <p class="text-success my-auto">Lolos</p>
                @endif
                @if ( $student->diterima == 'tidak lolos' )
                <p class="text-danger my-auto">Tidak Lolos</p>
                @endif
                @if ( $student->diterima == 'proses seleksi' )
                <p class="text-primary my-auto">Proses Seleksi</p>
                @endif
            </td>
            <td>
                <a href="/ppdb/student/{{ $student->id }}" class="btn btn-sm btn-info text-white w-100 mb-2">detail</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    @else
    <p>Belum ada calon peserta didik</p>
    @endif


@endsection
