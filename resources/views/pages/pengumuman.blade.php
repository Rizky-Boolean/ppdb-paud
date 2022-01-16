@extends('layouts.main')

@section('content')

    <h1 class="fs-2">Informasi Data Penerimaan Calon Peserta Didik</h1>
    <hr class="my-4">
    <p>Berikut adalah semua data calon peserta didik berdasarkan tahun ajaran yang diterima maupun tidak diterima</p>

    <form action="/ppdb/pengumuman" method="get">
        <label>Temukan Calon Peserta Didik</label>
        <div class="mb-3 row">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari nama atau informasi lain yang terkait">
                    <select class="form-select" name="tahun_daftar" style="max-width: 150px;">
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    <button type="submit" class="btn btn-info text-white">Cek</button>
                </div>
            </div>
        </div>
    </form>

    <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nama Panggilan</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Daftar</th>
            <th scope="col">Status Penerimaan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Laki-laki</td>
            <td>9 Januari 2022</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>

@endsection
