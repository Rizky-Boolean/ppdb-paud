@extends('layouts.main')

@section('content')

    <h1 class="fs-2 ">{!! $title !!}</h1>
    <hr class="my-4">

    @if (session('message'))
        {!! session('message') !!}
    @endif
    @if ($errors->any())
    <div class="alert alert-danger mb-3" role="alert">
        <strong>Data belum benar!!</strong> Pastikan semua data benar. Ulangi isi foto-foto yang diperlukan
    </div>
    @endif

    @if ($is_available)

    <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progress"></div>
    </div>

    <form action="/ppdb/daftar" method="post" class="form" id="form" enctype="multipart/form-data">

        @csrf

        <section id="step1" class="m-0 p-0 info-step">
        <p class="text-medium fs-5 mb-0">Data Calon Peserta Didik Baru</p>
        <p><small>Wajib</small></p>

        <div class="mb-2 row">
            <label for="nama_lengkap" class="col-12 col-md-3 col-form-label">Nama Lengkap</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Isi nama lengkap calon peserta didik baru" required value="{{ old('nama_lengkap') }}">
                @error('nama_lengkap')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="nama_panggilan" class="col-12 col-md-3 col-form-label">Nama Panggilan</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" name="nama_panggilan" id="nama_panggilan" placeholder="Isi nama panggilan calon peserta didik baru" required value="{{ old('nama_panggilan') }}">
                @error('nama_panggilan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="jk" class="col-12 col-md-3 col-form-label">Jenis Kelamin</label>
            <div class="col-12 col-md-9">
                <div class="form-check form-check-inline mt-2">
                    <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="laki_laki" value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'checked' : '' }}>
                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                  </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="perempuan" value="Perempuan" {{ old('jk') == 'Perempuan' ? 'checked' : '' }}>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                  </div>
                @error('jk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="tempat_lahir" class="col-12 col-md-3 col-form-label">Tempat Lahir</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir" placeholder="Isi tempat lahir calon peserta didik baru" required value="{{ old('tempat_lahir') }}">
                @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="tanggal_lahir" class="col-12 col-md-3 col-form-label">Tanggal Lahir</label>
            <div class="col-12 col-md-9">
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" placeholder="Isi tanggal lahir calon peserta didik baru" required value="{{ old('tanggal_lahir') }}">
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="agama" class="col-12 col-md-3 col-form-label">Agama</label>
            <div class="col-12 col-md-9">
                <select class="form-select @error('agama') is-invalid @enderror" name="agama" id="agama">
                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Khatolik" {{ old('agama') == 'Khatolik' ? 'selected' : '' }}>Khatolik</option>
                    <option value="Protestan" {{ old('agama') == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                </select>
                @error('agama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="kewarganegaraan" class="col-12 col-md-3 col-form-label">Kewarganegaraan</label>
            <div class="col-12 col-md-9">
                <select class="form-select @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" id="kewarganegaraan" required>
                    <option value="Indonesia" {{ old('kewarganegaraan') == 'Indonesia' ? 'selected' : ''}}>Indonesia</option>
                    <option value="Lainnya" {{ old('kewarganegaraan') == 'Lainnya' ? 'selected' : ''}}>Lainnya</option>
                </select>
                @error('kewarganegaraan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="anak_ke" class="col-12 col-md-3 col-form-label">Anak Ke</label>
            <div class="col-12 col-md-9">
                <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke" id="anak_ke" placeholder="Isi anak ke calon peserta didik baru" required value="{{ old('anak_ke') }}">
                @error('anak_ke')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="jumlah_saudara_kandung" class="col-12 col-md-3 col-form-label">Jumlah Saudara Kandung</label>
            <div class="col-12 col-md-9">
                <input type="number" class="form-control @error('jumlah_saudara_kandung') is-invalid @enderror" name="jumlah_saudara_kandung" id="jumlah_saudara_kandung" placeholder="Isi jumlah saudara kandung calon peserta didik baru" required value="{{ old('jumlah_saudara_kandung') }}">
                @error('jumlah_saudara_kandung')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="bahasa_sehari_hari" class="col-12 col-md-3 col-form-label">Bahasa Sehari-hari</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('bahasa_sehari_hari') is-invalid @enderror" name="bahasa_sehari_hari" id="bahasa_sehari_hari" placeholder="Isi bahasa sehari-hari calon peserta didik baru" required value="{{ old('bahasa_sehari_hari') }}">
                @error('bahasa_sehari_hari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="berat_badan" class="col-12 col-md-3 col-form-label">Berat Badan (*kg)</label>
            <div class="col-12 col-md-9">
                <input type="number" class="form-control @error('berat_badan') is-invalid @enderror" name="berat_badan" id="berat_badan" placeholder="Isi berat badan (*kg) calon peserta didik baru" required value="{{ old('berat_badan') }}">
                @error('berat_badan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="tinggi_badan" class="col-12 col-md-3 col-form-label">Tinggi Badan (*cm)</label>
            <div class="col-12 col-md-9">
                <input type="number" class="form-control @error('tinggi_badan') is-invalid @enderror" name="tinggi_badan" id="tinggi_badan" placeholder="Isi tinggi badan (*cm) calon peserta didik baru" required value="{{ old('tinggi_badan') }}">
                @error('tinggi_badan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="golongan_darah" class="col-12 col-md-3 col-form-label">Golongan Darah</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('golongan_darah') is-invalid @enderror" name="golongan_darah" id="golongan_darah" placeholder="Isi golongan darah calon peserta didik baru" value="{{ old('golongan_darah') }}">
                @error('golongan_darah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="riwayat_penyakit" class="col-12 col-md-3 col-form-label">Riwayat Penyakit</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('riwayat_penyakit') is-invalid @enderror" name="riwayat_penyakit" id="riwayat_penyakit" placeholder="Isi riwayat penyakit calon peserta didik baru"  value="{{ old('riwayat_penyakit') }}">
                @error('riwayat_penyakit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="alamat" class="col-12 col-md-3 col-form-label">Alamat</label>
            <div class="col-12 col-md-9">
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Isi alamat calon peserta didik baru" required rows="3">{{ old('alamat') }}</textarea>
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="jarak_ke_sekolah" class="col-12 col-md-3 col-form-label">Jarak ke Sekolah (*km)</label>
            <div class="col-12 col-md-9">
                <input type="number" class="form-control @error('jarak_ke_sekolah') is-invalid @enderror" name="jarak_ke_sekolah" id="jarak_ke_sekolah" placeholder="Isi jarak ke sekolah (*km) calon peserta didik baru" required value="{{ old('jarak_ke_sekolah') }}">
                @error('jarak_ke_sekolah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="foto" class="col-12 col-md-3 col-form-label">Foto Calon Peserta Didik</label>
            <div class="col-12 col-md-9">
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto" required>
                @error('foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="foto_akta" class="col-12 col-md-3 col-form-label">Foto Akta Kelahiran Calon Peserta Didik</label>
            <div class="col-12 col-md-9">
                <input type="file" class="form-control @error('foto_akta') is-invalid @enderror" name="foto_akta" id="foto_akta" required>
                @error('foto_akta')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="foto_kk" class="col-12 col-md-3 col-form-label">Foto Kartu Keluarga</label>
            <div class="col-12 col-md-9">
                <input type="file" class="form-control @error('foto_kk') is-invalid @enderror" name="foto_kk" id="foto_kk" required>
                @error('foto_kk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row justify-content-end">
            <div class="col-12 col-md-9 d-flex justify-content-end">
                <button type="button" data-target="#step2" class="btn btn-info text-white btn-step btn-next">Selanjutnya</button>
            </div>
        </div>

        </section>

        <section id="step2" class="m-0 p-0 info-step">

        <p class="text-medium fs-5 mb-0">Data Ayah Kandung</p>
        <p><small>Wajib</small></p>
        <div class="mb-2 row">
            <label for="nama_ayah" class="col-12 col-md-3 col-form-label">Nama Lengkap Ayah Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" id="nama_ayah" placeholder="Isi nama lengkap ayah kandung calon peserta didik baru" required value="{{ old('nama_ayah') }}">
                @error('nama_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="no_hp_ayah" class="col-12 col-md-3 col-form-label">Nomor Hp Ayah Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('no_hp_ayah') is-invalid @enderror" name="no_hp_ayah" id="no_hp_ayah" placeholder="Isi nomor hp ayah kandung calon peserta didik baru" required value="{{ old('no_hp_ayah') }}">
                @error('no_hp_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="pendidikan_ayah" class="col-12 col-md-3 col-form-label">Pendidikan Terakhir Ayah Kandung</label>
            <div class="col-12 col-md-9">
                <select class="form-select @error('pendidikan_ayah') is-invalid @enderror" name="pendidikan_ayah" id="pendidikan_ayah" required>
                    <option value="SD" {{ old('pendidikan_ayah') == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP/SLTP/Sederajat" {{ old('pendidikan_ayah') == 'SMP/SLTP/Sederajat' ? 'selected' : '' }}>SMP/SLTP/Sederajat</option>
                    <option value="SMA/SLTA/Sederajat" {{ old('pendidikan_ayah') == 'SMA/SLTA/Sederajat' ? 'selected' : '' }}>SMA/SLTA/Sederajat</option>
                    <option value="Sarjana/Diploma" {{ old('pendidikan_ayah') == 'Sarjana/Diploma' ? 'selected' : '' }}>Sarjana/Diploma</option>
                    <option value="Magister" {{ old('pendidikan_ayah') == 'Magister' ? 'selected' : '' }}>Magister</option>
                    <option value="Doktor" {{ old('pendidikan_ayah') == 'Doktor' ? 'selected' : '' }}>Doktor</option>
                </select>
                @error('pendidikan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="pekerjaan_ayah" class="col-12 col-md-3 col-form-label">Pekerjaan Ayah Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Isi pekerjaan ayah kandung" required value="{{ old('pekerjaan_ayah') }}">
                @error('pekerjaan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="foto_ktp_ayah" class="col-12 col-md-3 col-form-label">Foto KTP Ayah Kandung</label>
            <div class="col-12 col-md-9">
                <input type="file" class="form-control @error('foto_ktp_ayah') is-invalid @enderror" name="foto_ktp_ayah" id="foto_ktp_ayah" required>
                @error('foto_ktp_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row justify-content-end">
            <div class="col-12 col-md-9 d-flex justify-content-between">
                <button type="button" data-target="#step1" class="btn btn-danger btn-step btn-prev">Sebelumnya</button>
                <button type="button" data-target="#step3" class="btn btn-info text-white btn-step btn-next">Selanjutnya</button>
            </div>
        </div>

        </section>

        <section id="step3" class="m-0 p-0 info-step">

        <p class="text-medium fs-5 mb-0">Data Ibu Kandung</p>
        <p><small>Wajib</small></p>
        <div class="mb-2 row">
            <label for="nama_ibu" class="col-12 col-md-3 col-form-label">Nama Lengkap Ibu Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" id="nama_ibu" placeholder="Isi nama lengkap ibu kandung calon peserta didik baru" required value="{{ old('nama_ibu') }}">
                @error('nama_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="no_hp_ibu" class="col-12 col-md-3 col-form-label">Nomor Hp Ibu Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('no_hp_ibu') is-invalid @enderror" name="no_hp_ibu" id="no_hp_ibu" placeholder="Isi nomor hp ibu kandung calon peserta didik baru" required value="{{ old('no_hp_ibu') }}">
                @error('no_hp_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="pendidikan_ibu" class="col-12 col-md-3 col-form-label">Pendidikan Terakhir Ibu Kandung</label>
            <div class="col-12 col-md-9">
                <select class="form-select @error('pendidikan_ibu') is-invalid @enderror" name="pendidikan_ibu" id="pendidikan_ibu" required>
                    <option value="SD" {{ old('pendidikan_ibu') == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP/SLTP/Sederajat" {{ old('pendidikan_ibu') == 'SMP/SLTP/Sederajat' ? 'selected' : '' }}>SMP/SLTP/Sederajat</option>
                    <option value="SMA/SLTA/Sederajat" {{ old('pendidikan_ibu') == 'SMA/SLTA/Sederajat' ? 'selected' : '' }}>SMA/SLTA/Sederajat</option>
                    <option value="Sarjana/Diploma" {{ old('pendidikan_ibu') == 'Sarjana/Diploma' ? 'selected' : '' }}>Sarjana/Diploma</option>
                    <option value="Magister" {{ old('pendidikan_ibu') == 'Magister' ? 'selected' : '' }}>Magister</option>
                    <option value="Doktor" {{ old('pendidikan_ibu') == 'Doktor' ? 'selected' : '' }}>Doktor</option>
                </select>
                @error('pendidikan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="pekerjaan_ibu" class="col-12 col-md-3 col-form-label">Pekerjaan Ibu Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Isi pekerjaan ibu kandung" required value="{{ old('pekerjaan_ibu') }}">
                @error('pekerjaan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="foto_ktp_ibu" class="col-12 col-md-3 col-form-label">Foto KTP Ibu Kandung</label>
            <div class="col-12 col-md-9">
                <input type="file" class="form-control @error('foto_ktp_ibu') is-invalid @enderror" name="foto_ktp_ibu" id="foto_ktp_ibu" required>
                @error('foto_ktp_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row justify-content-end">
            <div class="col-12 col-md-9 d-flex justify-content-between">
                <button type="button" data-target="#step2" class="btn btn-danger btn-step btn-prev">Sebelumnya</button>
                <button type="button" data-target="#step4" class="btn btn-info text-white btn-step btn-next">Selanjutnya</button>
            </div>
        </div>

        </section>

        <section id="step4" class="m-0 p-0 info-step">

        <p class="text-medium fs-5 mb-0">Data Wali</p>
        <p><small>Opsional</small></p>
        <div class="mb-2 row">
            <label for="nama_wali" class="col-12 col-md-3 col-form-label">Nama Lengkap Wali</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_wali') is-invalid @enderror" name="nama_wali" id="nama_wali" placeholder="Isi nama lengkap Wali calon peserta didik baru" value="{{ old('nama_wali') }}">
                @error('nama_wali')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="no_hp_wali" class="col-12 col-md-3 col-form-label">Nomor Hp Wali</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('no_hp_wali') is-invalid @enderror" name="no_hp_wali" id="no_hp_wali" placeholder="Isi nomor hp Wali calon peserta didik baru" value="{{ old('no_hp_wali') }}">
                @error('no_hp_wali')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="pendidikan_wali" class="col-12 col-md-3 col-form-label">Pendidikan Terakhir Wali</label>
            <div class="col-12 col-md-9">
                <select class="form-select @error('pendidikan_wali') is-invalid @enderror" name="pendidikan_wali" id="pendidikan_wali">
                    <option value="SD" {{ old('pendidikan_wali') == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP/SLTP/Sederajat" {{ old('pendidikan_wali') == 'SMP/SLTP/Sederajat' ? 'selected' : '' }}>SMP/SLTP/Sederajat</option>
                    <option value="SMA/SLTA/Sederajat" {{ old('pendidikan_wali') == 'SMA/SLTA/Sederajat' ? 'selected' : '' }}>SMA/SLTA/Sederajat</option>
                    <option value="Sarjana/Diploma" {{ old('pendidikan_wali') == 'Sarjana/Diploma' ? 'selected' : '' }}>Sarjana/Diploma</option>
                    <option value="Magister" {{ old('pendidikan_wali') == 'Magister' ? 'selected' : '' }}>Magister</option>
                    <option value="Doktor" {{ old('pendidikan_wali') == 'Doktor' ? 'selected' : '' }}>Doktor</option>
                </select>
                @error('pendidikan_wali')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="pekerjaan_wali" class="col-12 col-md-3 col-form-label">Pekerjaan Wali</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('pekerjaan_wali') is-invalid @enderror" name="pekerjaan_wali" id="pekerjaan_wali" placeholder="Isi pekerjaan wali" value="{{ old('pekerjaan_wali') }}">
                @error('pekerjaan_wali')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="hubungan_keluarga" class="col-12 col-md-3 col-form-label">Hubungan Keluarga dengan Wali</label>
            <div class="col-12 col-md-9">
                <select class="form-select @error('hubungan_keluarga') is-invalid @enderror" name="hubungan_keluarga" id="hubungan_keluarga">
                    <option value="Kakak" {{ old('hubungan_keluarga') == 'Kakak' ? 'selected' : '' }}>Kakak</option>
                    <option value="Paman" {{ old('hubungan_keluarga') == 'Paman' ? 'selected' : '' }}>Paman</option>
                    <option value="Bibi" {{ old('hubungan_keluarga') == 'Bibi' ? 'selected' : '' }}>Bibi</option>
                    <option value="Kakek" {{ old('hubungan_keluarga') == 'Kakek' ? 'selected' : '' }}>Kakek</option>
                    <option value="Nenek" {{ old('hubungan_keluarga') == 'Nenek' ? 'selected' : '' }}>Nenek</option>
                    <option value="Lainnya" {{ old('hubungan_keluarga') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
                @error('hubungan_keluarga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="foto_ktp_wali" class="col-12 col-md-3 col-form-label">Foto KTP Wali</label>
            <div class="col-12 col-md-9">
                <input type="file" class="form-control @error('foto_ktp_wali') is-invalid @enderror" name="foto_ktp_wali" id="foto_ktp_wali">
                @error('foto_ktp_wali')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row justify-content-end">
            <div class="col-12 col-md-9 d-flex justify-content-between">
                <button type="button" data-target="#step3" class="btn btn-danger btn-step btn-prev">Sebelumnya</button>
                <button type="button" data-target="#step5" class="btn btn-info text-white btn-step btn-next">Selanjutnya</button>
            </div>
        </div>

        </section>

        <section id="step5" class="m-0 p-0 info-step">

        <p class="text-medium fs-5 mb-0">Data Tambahan</p>
        <p><small>Wajib tapi tidak semua diisi</small></p>
        <div class="mb-2 row">
            <label for="cerita" class="col-12 col-md-3 col-form-label">Cerita Tentang Calon Peserta Didik</label>
            <div class="col-12 col-md-9">
                <textarea class="form-control @error('cerita') is-invalid @enderror" name="cerita" id="cerita" placeholder="Ada informasi tambahan untuk kami tentang calon peserta didik?" rows="3">{{ old('cerita') }}</textarea>
                @error('cerita')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="masuk_sebagai" class="col-12 col-md-3 col-form-label">Masuk Sebagai</label>
            <div class="col-12 col-md-9">
                <div class="form-check form-check-inline mt-2">
                    <input class="form-check-input @error('masuk_sebagai') is-invalid @enderror" type="radio" name="masuk_sebagai" id="opsi_baru" checked data-bs-toggle="collapse" value="Peserta Didik Baru">
                    <label class="form-check-label" for="opsi_baru">Peserta Didik Baru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('masuk_sebagai') is-invalid @enderror" type="radio" name="masuk_sebagai" id="opsi_pindahan" data-bs-toggle="collapse" value="Pindahan" href="#info_pindahan">
                    <label class="form-check-label" for="opsi_pindahan">Pindahan</label>
                </div>
                @error('masuk_sebagai')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

    <section id="info_pindahan" class="info-pindahan collapse m-0 p-0">

        <div class="mb-2 row">
            <label for="pindahan_dari" class="col-12 col-md-3 col-form-label">Pindahan Dari</label>
            <div class="col-12 col-md-9">
                <textarea class="form-control @error('pindahan_dari') is-invalid @enderror" name="pindahan_dari" id="pindahan_dari" placeholder="Kalau pindahan, pindahan dari TK mana?" rows="3"></textarea>
                @error('pindahan_dari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="tanggal_pindah" class="col-12 col-md-3 col-form-label">Tanggal Pindah</label>
            <div class="col-12 col-md-9">
                <input type="date" class="form-control @error('tanggal_pindah') is-invalid @enderror" name="tanggal_pindah" id="tanggal_pindah">
                @error('tanggal_pindah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

    </section>

    <div class="my-2 row justify-content-end">
        <div class="col-12 col-md-9 d-flex justify-content-between">
            <button type="button" name="previous-step" data-target="#step4" class="btn btn-danger btn-step btn-prev">Sebelumnya</button>
            <button type="submit" class="btn btn-info text-white">Daftar</button>
        </div>
    </div>

        </section>

    </form>

    @else

    <p>Belum ada jadwal pendaftaran<br>Jika sudah mendaftar, silahkan cetak bukti pendaftaran atau kartu peserta</p>

    @endif

@endsection
