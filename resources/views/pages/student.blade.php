@extends('layouts.main')

@section('content')

    <h1 class="fs-2">Detail {{ $student->nama_lengkap }}</h1>
    <hr class="my-4">

    <h2 class="fs-4 mb-3">Identitas Calon Peserta Didik</h2>
    <div class="card mb-3 border-0">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="{{ asset($student->foto) }}" class="img-fluid rounded-start" alt="{{ $student->nama_lengkap }}">
          </div>
          <div class="col-md-10">
            <div class="card-body row">
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-sm-5">Nama Lengkap</dt>
                        <dd class="col-sm-7">{{ $student->nama_lengkap }}</dd>
                        <dt class="col-sm-5">Nama Panggilan</dt>
                        <dd class="col-sm-7">{{ $student->nama_panggilan }}</dd>
                        <dt class="col-sm-5">Jenis Kelamin</dt>
                        <dd class="col-sm-7">{{ $student->jk }}</dd>
                        <dt class="col-sm-5">Tempat, Tanggal Lahir</dt>
                        <dd class="col-sm-7">{{ $student->tempat_lahir . ', ' . $student->tanggal_lahir }}</dd>
                        <dt class="col-sm-5">Agama</dt>
                        <dd class="col-sm-7">{{ $student->agama }}</dd>
                        <dt class="col-sm-5">Kewarganegaraan</dt>
                        <dd class="col-sm-7">{{ $student->kewarganegaraan }}</dd>
                        <dt class="col-sm-5">Anak Ke</dt>
                        <dd class="col-sm-7">{{ $student->anak_ke }}</dd>
                        <dt class="col-sm-5">Jumlah Saudara Kandung</dt>
                        <dd class="col-sm-7">{{ $student->jumlah_saudara_kandung }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-sm-5">Bahasa Sehari-hari</dt>
                        <dd class="col-sm-7">{{ $student->bahasa_sehari_hari }}</dd>
                        <dt class="col-sm-5">Berat Badan</dt>
                        <dd class="col-sm-7">{{ $student->berat_badan }} kg</dd>
                        <dt class="col-sm-5">Tinggi Badan</dt>
                        <dd class="col-sm-7">{{ $student->tinggi_badan }} cm</dd>
                        <dt class="col-sm-5">Golongan Darah</dt>
                        <dd class="col-sm-7">{{ $student->golongan_darah }}</dd>
                        <dt class="col-sm-5">Riwayat Penyakit</dt>
                        <dd class="col-sm-7">{{ $student->riwayat_penyakit }}</dd>
                        <dt class="col-sm-5">Alamat</dt>
                        <dd class="col-sm-7">{{ $student->alamat }}</dd>
                        <dt class="col-sm-5">Jarak ke Sekolah</dt>
                        <dd class="col-sm-7">{{ $student->jarak_ke_sekolah }} km</dd>
                        <dt class="col-sm-5">Status Penerimaan</dt>
                        <dd class="col-sm-7">
                            @if ( $student->diterima == 'lolos' )
                            <p class="text-info my-auto">Lolos</p>
                            @endif
                            @if ( $student->diterima == 'tidak lolos' )
                            <p class="text-danger my-auto">Tidak Lolos</p>
                            @endif
                            @if ( $student->diterima == 'proses seleksi' )
                            <p class="text-primary my-auto">Proses Seleksi</p>
                            @endif
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        </div>
      </div>

      <hr class="my-4">

      <div class="row">
        <div class="col-md-6">
            <h2 class="fs-4 mb-3">Identitas Ayah Kandung</h2>
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset($student->foto_ktp_ayah) }}" class="img-fluid rounded-start" alt="{{ $student->nama_ayah }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-5">Nama Lengkap</dt>
                                <dd class="col-sm-7">{{ $student->nama_ayah }}</dd>
                                <dt class="col-sm-5">No Hp</dt>
                                <dd class="col-sm-7">{{ $student->no_hp_ayah }}</dd>
                                <dt class="col-sm-5">Pendidikan</dt>
                                <dd class="col-sm-7">{{ $student->pendidikan_ayah }}</dd>
                                <dt class="col-sm-5">Pekerjaan</dt>
                                <dd class="col-sm-7">{{ $student->pekerjaan_ayah }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <h2 class="fs-4 mb-3">Identitas Ibu Kandung</h2>
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset($student->foto_ktp_ibu) }}" class="img-fluid rounded-start" alt="{{ $student->nama_ibu }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-5">Nama Lengkap</dt>
                                <dd class="col-sm-7">{{ $student->nama_ibu }}</dd>
                                <dt class="col-sm-5">No Hp</dt>
                                <dd class="col-sm-7">{{ $student->no_hp_ibu }}</dd>
                                <dt class="col-sm-5">Pendidikan</dt>
                                <dd class="col-sm-7">{{ $student->pendidikan_ibu }}</dd>
                                <dt class="col-sm-5">Pekerjaan</dt>
                                <dd class="col-sm-7">{{ $student->pekerjaan_ibu }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">

        <div class="row">
        <div class="col-md-6">
            <h2 class="fs-4 mb-3">Identitas Wali</h2>
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset($student->foto_ktp_wali) }}" class="img-fluid rounded-start" alt="{{ $student->nama_wali }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-5">Nama Lengkap</dt>
                                <dd class="col-sm-7">{{ $student->nama_wali }}</dd>
                                <dt class="col-sm-5">No Hp</dt>
                                <dd class="col-sm-7">{{ $student->no_hp_wali }}</dd>
                                <dt class="col-sm-5">Pendidikan</dt>
                                <dd class="col-sm-7">{{ $student->pendidikan_wali }}</dd>
                                <dt class="col-sm-5">Pekerjaan</dt>
                                <dd class="col-sm-7">{{ $student->pekerjaan_wali }}</dd>
                                <dt class="col-sm-5">Hubungan Keluarga</dt>
                                <dd class="col-sm-7">{{ $student->hubungan_keluarga_wali }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <h2 class="fs-4 mb-3">Dokumen dan Informasi Tambahan</h2>
            <dl class="row">
                <dt class="col-sm-5">Cerita</dt>
                <dd class="col-sm-6">{{ $student->cerita }}</dd>
                <dt class="col-sm-5">Masuk Sebagai</dt>
                <dd class="col-sm-6">{{ $student->masuk_sebagai
                 }}</dd>
                <dt class="col-sm-5">Pindahan Dari</dt>
                <dd class="col-sm-6">{{ $student->pindahan_dari
                 }}</dd>
                <dt class="col-sm-5">Tanggal Pindah</dt>
                <dd class="col-sm-6">{{ $student->tanggal_pindah
                 }}</dd>
            </dl>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($student->foto_akta) }}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset($student->foto_kk) }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    @auth
    <form action="/admin/student/{{ $student->id }}" method="post" class="d-inline">
        @csrf
        @method('put')
        <input type="hidden" name="diterima" value="lolos">
        <button href="submit" class="btn btn-sm btn-success">terima</button>
    </form>
    <form action="/admin/student/{{ $student->id }}" method="post" class="d-inline">
        @csrf
        @method('put')
        <input type="hidden" name="diterima" value="tidak lolos">
        <button href="submit" class="btn btn-sm btn-danger">tolak</button>
    </form>
    @endauth



@endsection
