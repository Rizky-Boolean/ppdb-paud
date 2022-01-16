@extends('layouts.main')

@section('content')

    <h1 class="fs-2 ">{{ $title }}</h1>
    <hr class="my-4">


    <form action="/ppdf/daftar" method="post" enctype="multipart/form-data">
        @csrf

        <p class="text-medium fs-5 mb-0">Data Calon Peserta Didik Baru</p>
        <p><small>Wajib</small></p>

        <div class="mb-2 row">
            <label for="nama_lengkap" class="col-12 col-md-3 col-form-label">Nama Lengkap</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_lengkap') is_invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Isi nama lengkap calon peserta didik baru" required>
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
                <input type="text" class="form-control @error('nama_panggilan') is_invalid @enderror" name="nama_panggilan" id="nama_panggilan" placeholder="Isi nama panggilan calon peserta didik baru" required>
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
                    <input class="form-check-input @error('jk') is_invalid @enderror" type="radio" name="jk" id="laki_laki" value="Laki-laki">
                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                  </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('jk') is_invalid @enderror" type="radio" name="jk" id="perempuan" value="Perempuan">
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
                <input type="text" class="form-control @error('tempat_lahir') is_invalid @enderror" name="tempat_lahir" id="tempat_lahir" placeholder="Isi tempat lahir calon peserta didik baru" required>
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
                <input type="date" class="form-control @error('tanggal_lahir') is_invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" placeholder="Isi tanggal lahir calon peserta didik baru" required>
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
                <select class="form-select @error('agama') is_invalid @enderror" name="agama" id="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Khatolik">Khatolik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
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
                <select class="form-select @error('kewarganegaraan') is_invalid @enderror" name="kewarganegaraan" id="kewarganegaraan" required>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Lainnya">Lainnya</option>
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
                <input type="number" class="form-control @error('anak_ke') is_invalid @enderror" name="anak_ke" id="anak_ke" placeholder="Isi anak ke calon peserta didik baru" required>
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
                <input type="number" class="form-control @error('jumlah_saudara_kandung') is_invalid @enderror" name="jumlah_saudara_kandung" id="jumlah_saudara_kandung" placeholder="Isi jumlah saudara kandung calon peserta didik baru" required>
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
                <input type="text" class="form-control @error('bahasa_sehari_hari') is_invalid @enderror" name="bahasa_sehari_hari" id="bahasa_sehari_hari" placeholder="Isi bahasa sehari-hari calon peserta didik baru" required>
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
                <input type="number" class="form-control @error('berat_badan') is_invalid @enderror" name="berat_badan" id="berat_badan" placeholder="Isi berat badan (*kg) calon peserta didik baru" required>
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
                <input type="number" class="form-control @error('tinggi_badan') is_invalid @enderror" name="tinggi_badan" id="tinggi_badan" placeholder="Isi tinggi badan (*cm) calon peserta didik baru" required>
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
                <input type="text" class="form-control @error('golongan_darah') is_invalid @enderror" name="golongan_darah" id="golongan_darah" placeholder="Isi golongan darah calon peserta didik baru" required>
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
                <input type="text" class="form-control @error('riwayat_penyakit') is_invalid @enderror" name="riwayat_penyakit" id="riwayat_penyakit" placeholder="Isi riwayat penyakit calon peserta didik baru" required>
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
                <textarea class="form-control @error('alamat') is_invalid @enderror" name="alamat" id="alamat" placeholder="Isi alamat calon peserta didik baru" required rows="3"></textarea>
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
                <input type="number" class="form-control @error('jarak_ke_sekolah') is_invalid @enderror" name="jarak_ke_sekolah" id="jarak_ke_sekolah" placeholder="Isi jarak ke sekolah (*km) calon peserta didik baru" required>
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
                <input type="file" class="form-control @error('foto') is_invalid @enderror" name="foto" id="foto" required>
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
                <input type="file" class="form-control @error('foto_akta') is_invalid @enderror" name="foto_akta" id="foto_akta" required>
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
                <input type="file" class="form-control @error('foto_kk') is_invalid @enderror" name="foto_kk" id="foto_kk" required>
                @error('foto_kk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <hr class="my-4">

        <p class="text-medium fs-5 mb-0">Data Ayah Kandung</p>
        <p><small>Wajib</small></p>
        <div class="mb-2 row">
            <label for="nama_ayah" class="col-12 col-md-3 col-form-label">Nama Lengkap Ayah Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_ayah') is_invalid @enderror" name="nama_ayah" id="nama_ayah" placeholder="Isi nama lengkap ayah kandung calon peserta didik baru" required>
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
                <input type="text" class="form-control @error('no_hp_ayah') is_invalid @enderror" name="no_hp_ayah" id="no_hp_ayah" placeholder="Isi nomor hp ayah kandung calon peserta didik baru" required>
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
                <select class="form-select @error('pendidikan_ayah') is_invalid @enderror" name="pendidikan_ayah" id="pendidikan_ayah" required>
                    <option value="SD">SD</option>
                    <option value="SMP/SLTP/Sederajat">SMP/SLTP/Sederajat</option>
                    <option value="SMA/SLTA/Sederajat">SMA/SLTA/Sederajat</option>
                    <option value="Sarjana/Diploma">Sarjana/Diploma</option>
                    <option value="Magister">Magister</option>
                    <option value="Doktor">Doktor</option>
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
                <select class="form-select @error('pekerjaan_ayah') is_invalid @enderror" name="pekerjaan_ayah" id="pekerjaan_ayah" required>
                    <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                    <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                    <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                    <option value="PENSIUNAN">PENSIUNAN</option>
                    <option value="PEGAWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                    <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                    <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                    <option value="PERDAGANGAN">PERDAGANGAN</option>
                    <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                    <option value="PETERNAK">PETERNAK</option>
                    <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                    <option value="INDUSTRI">INDUSTRI</option>
                    <option value="KONSTRUKSI">KONSTRUKSI</option>
                    <option value="TRANSPORTASI">TRANSPORTASI</option>
                    <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                    <option value="KARYAWAN BUMN">KARYAWAN BUMN</option>
                    <option value="KARYAWAN BUMD">KARYAWAN BUMD</option>
                    <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                    <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                    <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                    <option value="BURUH NELAYAN/PERIKANAN">BURUH NELAYAN/PERIKANAN</option>
                    <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                    <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                    <option value="TUKANG CUKUR">TUKANG CUKUR</option>
                    <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                    <option value="TUKANG BATU">TUKANG BATU</option>
                    <option value="TUKANG KAYU">TUKANG KAYU</option>
                    <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                    <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                    <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                    <option value="TUKANG GIGI">TUKANG GIGI</option>
                    <option value="PENATA RIAS">PENATA RIAS</option>
                    <option value="PENATA BUSANA">PENATA BUSANA</option>
                    <option value="PENATA RAMBUT">PENATA RAMBUT</option>
                    <option value="MEKANIK">MEKANIK</option>
                    <option value="SENIMAN">SENIMAN</option>
                    <option value="TABIB">TABIB</option>
                    <option value="PARAJI">PARAJI</option>
                    <option value="PERANCANG BUSANA">PERANCANG BUSANA</option>
                    <option value="PENTERJEMAH">PENTERJEMAH</option>
                    <option value="IMAM MESJID">IMAM MESJID</option>
                    <option value="PENDETA">PENDETA</option>
                    <option value="PASTOR">PASTOR</option>
                    <option value="WARTAWAN">WARTAWAN</option>
                    <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                    <option value="JURU MASAK">JURU MASAK</option>
                    <option value="PROMOTOR ACARA">PROMOTOR ACARA</option>
                    <option value="ANGGOTA DPR-RI">ANGGOTA DPR-RI</option>
                    <option value="ANGGOTA DPD">ANGGOTA DPD</option>
                    <option value="ANGGOTA BPK">ANGGOTA BPK</option>
                    <option value="PRESIDEN">PRESIDEN</option>
                    <option value="WAKIL PRESIDEN">WAKIL PRESIDEN</option>
                    <option value="ANGGOTA MAHKAMAH KONSTITUSI">ANGGOTA MAHKAMAH KONSTITUSI</option>
                    <option value="ANGGOTA KABINET/KEMENTERIAN">ANGGOTA KABINET/KEMENTERIAN</option>
                    <option value="DUTA BESAR">DUTA BESAR</option>
                    <option value="GUBERNUR">GUBERNUR</option>
                    <option value="WAKIL GUBERNUR">WAKIL GUBERNUR</option>
                    <option value="BUPATI">BUPATI</option>
                    <option value="WAKIL BUPATI">WAKIL BUPATI</option>
                    <option value="WALIKOTA">WALIKOTA</option>
                    <option value="WAKIL WALIKOTA">WAKIL WALIKOTA</option>
                    <option value="ANGGOTA DPRD PROVINSI">ANGGOTA DPRD PROVINSI</option>
                    <option value="ANGGOTA DPRD KABUPATEN/KOTA">ANGGOTA DPRD KABUPATEN/KOTA</option>
                    <option value="DOSEN">DOSEN</option>
                    <option value="GURU">GURU</option>
                    <option value="PILOT">PILOT</option>
                    <option value="PENGACARA">PENGACARA</option>
                    <option value="NOTARIS">NOTARIS</option>
                    <option value="ARSITEK">ARSITEK</option>
                    <option value="AKUNTAN">AKUNTAN</option>
                    <option value="KONSULTAN">KONSULTAN</option>
                    <option value="DOKTER">DOKTER</option>
                    <option value="BIDAN">BIDAN</option>
                    <option value="PERAWAT">PERAWAT</option>
                    <option value="APOTEKER">APOTEKER</option>
                    <option value="PSIKIATER/PSIKOLOG">PSIKIATER/PSIKOLOG</option>
                    <option value="PENYIAR TELEVISI">PENYIAR TELEVISI</option>
                    <option value="PENYIAR RADIO">PENYIAR RADIO</option>
                    <option value="PELAUT">PELAUT</option>
                    <option value="PENELITI">PENELITI</option>
                    <option value="SOPIR">SOPIR</option>
                    <option value="PIALANG">PIALANG</option>
                    <option value="PARANORMAL">PARANORMAL</option>
                    <option value="PEDAGANG">PEDAGANG</option>
                    <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                    <option value="KEPALA DESA">KEPALA DESA</option>
                    <option value="BIARAWATI">BIARAWATI</option>
                    <option value="WIRASWASTA">WIRASWASTA</option>
                    <option value="LAINNYA">LAINNYA</option>
                </select>
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
                <input type="file" class="form-control @error('foto_ktp_ayah') is_invalid @enderror" name="foto_ktp_ayah" id="foto_ktp_ayah" required>
                @error('foto_ktp_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>


        <hr class="my-4">

        <p class="text-medium fs-5 mb-0">Data Ibu Kandung</p>
        <p><small>Wajib</small></p>
        <div class="mb-2 row">
            <label for="nama_ibu" class="col-12 col-md-3 col-form-label">Nama Lengkap Ibu Kandung</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_ibu') is_invalid @enderror" name="nama_ibu" id="nama_ibu" placeholder="Isi nama lengkap ibu kandung calon peserta didik baru" required>
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
                <input type="text" class="form-control @error('no_hp_ibu') is_invalid @enderror" name="no_hp_ibu" id="no_hp_ibu" placeholder="Isi nomor hp ibu kandung calon peserta didik baru" required>
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
                <select class="form-select @error('pendidikan_ibu') is_invalid @enderror" name="pendidikan_ibu" id="pendidikan_ibu" required>
                    <option value="SD">SD</option>
                    <option value="SMP/SLTP/Sederajat">SMP/SLTP/Sederajat</option>
                    <option value="SMA/SLTA/Sederajat">SMA/SLTA/Sederajat</option>
                    <option value="Sarjana/Diploma">Sarjana/Diploma</option>
                    <option value="Magister">Magister</option>
                    <option value="Doktor">Doktor</option>
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
                <select class="form-select @error('pekerjaan_ibu') is_invalid @enderror" name="pekerjaan_ibu" id="pekerjaan_ibu" required>
                    <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                    <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                    <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                    <option value="PENSIUNAN">PENSIUNAN</option>
                    <option value="PEGAWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                    <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                    <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                    <option value="PERDAGANGAN">PERDAGANGAN</option>
                    <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                    <option value="PETERNAK">PETERNAK</option>
                    <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                    <option value="INDUSTRI">INDUSTRI</option>
                    <option value="KONSTRUKSI">KONSTRUKSI</option>
                    <option value="TRANSPORTASI">TRANSPORTASI</option>
                    <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                    <option value="KARYAWAN BUMN">KARYAWAN BUMN</option>
                    <option value="KARYAWAN BUMD">KARYAWAN BUMD</option>
                    <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                    <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                    <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                    <option value="BURUH NELAYAN/PERIKANAN">BURUH NELAYAN/PERIKANAN</option>
                    <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                    <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                    <option value="TUKANG CUKUR">TUKANG CUKUR</option>
                    <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                    <option value="TUKANG BATU">TUKANG BATU</option>
                    <option value="TUKANG KAYU">TUKANG KAYU</option>
                    <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                    <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                    <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                    <option value="TUKANG GIGI">TUKANG GIGI</option>
                    <option value="PENATA RIAS">PENATA RIAS</option>
                    <option value="PENATA BUSANA">PENATA BUSANA</option>
                    <option value="PENATA RAMBUT">PENATA RAMBUT</option>
                    <option value="MEKANIK">MEKANIK</option>
                    <option value="SENIMAN">SENIMAN</option>
                    <option value="TABIB">TABIB</option>
                    <option value="PARAJI">PARAJI</option>
                    <option value="PERANCANG BUSANA">PERANCANG BUSANA</option>
                    <option value="PENTERJEMAH">PENTERJEMAH</option>
                    <option value="IMAM MESJID">IMAM MESJID</option>
                    <option value="PENDETA">PENDETA</option>
                    <option value="PASTOR">PASTOR</option>
                    <option value="WARTAWAN">WARTAWAN</option>
                    <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                    <option value="JURU MASAK">JURU MASAK</option>
                    <option value="PROMOTOR ACARA">PROMOTOR ACARA</option>
                    <option value="ANGGOTA DPR-RI">ANGGOTA DPR-RI</option>
                    <option value="ANGGOTA DPD">ANGGOTA DPD</option>
                    <option value="ANGGOTA BPK">ANGGOTA BPK</option>
                    <option value="PRESIDEN">PRESIDEN</option>
                    <option value="WAKIL PRESIDEN">WAKIL PRESIDEN</option>
                    <option value="ANGGOTA MAHKAMAH KONSTITUSI">ANGGOTA MAHKAMAH KONSTITUSI</option>
                    <option value="ANGGOTA KABINET/KEMENTERIAN">ANGGOTA KABINET/KEMENTERIAN</option>
                    <option value="DUTA BESAR">DUTA BESAR</option>
                    <option value="GUBERNUR">GUBERNUR</option>
                    <option value="WAKIL GUBERNUR">WAKIL GUBERNUR</option>
                    <option value="BUPATI">BUPATI</option>
                    <option value="WAKIL BUPATI">WAKIL BUPATI</option>
                    <option value="WALIKOTA">WALIKOTA</option>
                    <option value="WAKIL WALIKOTA">WAKIL WALIKOTA</option>
                    <option value="ANGGOTA DPRD PROVINSI">ANGGOTA DPRD PROVINSI</option>
                    <option value="ANGGOTA DPRD KABUPATEN/KOTA">ANGGOTA DPRD KABUPATEN/KOTA</option>
                    <option value="DOSEN">DOSEN</option>
                    <option value="GURU">GURU</option>
                    <option value="PILOT">PILOT</option>
                    <option value="PENGACARA">PENGACARA</option>
                    <option value="NOTARIS">NOTARIS</option>
                    <option value="ARSITEK">ARSITEK</option>
                    <option value="AKUNTAN">AKUNTAN</option>
                    <option value="KONSULTAN">KONSULTAN</option>
                    <option value="DOKTER">DOKTER</option>
                    <option value="BIDAN">BIDAN</option>
                    <option value="PERAWAT">PERAWAT</option>
                    <option value="APOTEKER">APOTEKER</option>
                    <option value="PSIKIATER/PSIKOLOG">PSIKIATER/PSIKOLOG</option>
                    <option value="PENYIAR TELEVISI">PENYIAR TELEVISI</option>
                    <option value="PENYIAR RADIO">PENYIAR RADIO</option>
                    <option value="PELAUT">PELAUT</option>
                    <option value="PENELITI">PENELITI</option>
                    <option value="SOPIR">SOPIR</option>
                    <option value="PIALANG">PIALANG</option>
                    <option value="PARANORMAL">PARANORMAL</option>
                    <option value="PEDAGANG">PEDAGANG</option>
                    <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                    <option value="KEPALA DESA">KEPALA DESA</option>
                    <option value="BIARAWATI">BIARAWATI</option>
                    <option value="WIRASWASTA">WIRASWASTA</option>
                    <option value="LAINNYA">LAINNYA</option>
                </select>
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
                <input type="file" class="form-control @error('foto_ktp_ibu') is_invalid @enderror" name="foto_ktp_ibu" id="foto_ktp_ibu" required>
                @error('foto_ktp_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <hr class="my-4">

        <p class="text-medium fs-5 mb-0">Data Wali</p>
        <p><small>Opsional</small></p>
        <div class="mb-2 row">
            <label for="nama_wali" class="col-12 col-md-3 col-form-label">Nama Lengkap Wali</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('nama_wali') is_invalid @enderror" name="nama_wali" id="nama_wali" placeholder="Isi nama lengkap Wali calon peserta didik baru">
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
                <input type="text" class="form-control @error('no_hp_wali') is_invalid @enderror" name="no_hp_wali" id="no_hp_wali" placeholder="Isi nomor hp Wali calon peserta didik baru">
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
                <select class="form-select @error('pendidikan_wali') is_invalid @enderror" name="pendidikan_wali" id="pendidikan_wali">
                    <option value="SD">SD</option>
                    <option value="SMP/SLTP/Sederajat">SMP/SLTP/Sederajat</option>
                    <option value="SMA/SLTA/Sederajat">SMA/SLTA/Sederajat</option>
                    <option value="Sarjana/Diploma">Sarjana/Diploma</option>
                    <option value="Magister">Magister</option>
                    <option value="Doktor">Doktor</option>
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
                <select class="form-select @error('pekerjaan_wali') is_invalid @enderror" name="pekerjaan_wali" id="pekerjaan_wali">
                    <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                    <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                    <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                    <option value="PENSIUNAN">PENSIUNAN</option>
                    <option value="PEGAWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                    <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                    <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                    <option value="PERDAGANGAN">PERDAGANGAN</option>
                    <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                    <option value="PETERNAK">PETERNAK</option>
                    <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                    <option value="INDUSTRI">INDUSTRI</option>
                    <option value="KONSTRUKSI">KONSTRUKSI</option>
                    <option value="TRANSPORTASI">TRANSPORTASI</option>
                    <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                    <option value="KARYAWAN BUMN">KARYAWAN BUMN</option>
                    <option value="KARYAWAN BUMD">KARYAWAN BUMD</option>
                    <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                    <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                    <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                    <option value="BURUH NELAYAN/PERIKANAN">BURUH NELAYAN/PERIKANAN</option>
                    <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                    <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                    <option value="TUKANG CUKUR">TUKANG CUKUR</option>
                    <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                    <option value="TUKANG BATU">TUKANG BATU</option>
                    <option value="TUKANG KAYU">TUKANG KAYU</option>
                    <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                    <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                    <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                    <option value="TUKANG GIGI">TUKANG GIGI</option>
                    <option value="PENATA RIAS">PENATA RIAS</option>
                    <option value="PENATA BUSANA">PENATA BUSANA</option>
                    <option value="PENATA RAMBUT">PENATA RAMBUT</option>
                    <option value="MEKANIK">MEKANIK</option>
                    <option value="SENIMAN">SENIMAN</option>
                    <option value="TABIB">TABIB</option>
                    <option value="PARAJI">PARAJI</option>
                    <option value="PERANCANG BUSANA">PERANCANG BUSANA</option>
                    <option value="PENTERJEMAH">PENTERJEMAH</option>
                    <option value="IMAM MESJID">IMAM MESJID</option>
                    <option value="PENDETA">PENDETA</option>
                    <option value="PASTOR">PASTOR</option>
                    <option value="WARTAWAN">WARTAWAN</option>
                    <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                    <option value="JURU MASAK">JURU MASAK</option>
                    <option value="PROMOTOR ACARA">PROMOTOR ACARA</option>
                    <option value="ANGGOTA DPR-RI">ANGGOTA DPR-RI</option>
                    <option value="ANGGOTA DPD">ANGGOTA DPD</option>
                    <option value="ANGGOTA BPK">ANGGOTA BPK</option>
                    <option value="PRESIDEN">PRESIDEN</option>
                    <option value="WAKIL PRESIDEN">WAKIL PRESIDEN</option>
                    <option value="ANGGOTA MAHKAMAH KONSTITUSI">ANGGOTA MAHKAMAH KONSTITUSI</option>
                    <option value="ANGGOTA KABINET/KEMENTERIAN">ANGGOTA KABINET/KEMENTERIAN</option>
                    <option value="DUTA BESAR">DUTA BESAR</option>
                    <option value="GUBERNUR">GUBERNUR</option>
                    <option value="WAKIL GUBERNUR">WAKIL GUBERNUR</option>
                    <option value="BUPATI">BUPATI</option>
                    <option value="WAKIL BUPATI">WAKIL BUPATI</option>
                    <option value="WALIKOTA">WALIKOTA</option>
                    <option value="WAKIL WALIKOTA">WAKIL WALIKOTA</option>
                    <option value="ANGGOTA DPRD PROVINSI">ANGGOTA DPRD PROVINSI</option>
                    <option value="ANGGOTA DPRD KABUPATEN/KOTA">ANGGOTA DPRD KABUPATEN/KOTA</option>
                    <option value="DOSEN">DOSEN</option>
                    <option value="GURU">GURU</option>
                    <option value="PILOT">PILOT</option>
                    <option value="PENGACARA">PENGACARA</option>
                    <option value="NOTARIS">NOTARIS</option>
                    <option value="ARSITEK">ARSITEK</option>
                    <option value="AKUNTAN">AKUNTAN</option>
                    <option value="KONSULTAN">KONSULTAN</option>
                    <option value="DOKTER">DOKTER</option>
                    <option value="BIDAN">BIDAN</option>
                    <option value="PERAWAT">PERAWAT</option>
                    <option value="APOTEKER">APOTEKER</option>
                    <option value="PSIKIATER/PSIKOLOG">PSIKIATER/PSIKOLOG</option>
                    <option value="PENYIAR TELEVISI">PENYIAR TELEVISI</option>
                    <option value="PENYIAR RADIO">PENYIAR RADIO</option>
                    <option value="PELAUT">PELAUT</option>
                    <option value="PENELITI">PENELITI</option>
                    <option value="SOPIR">SOPIR</option>
                    <option value="PIALANG">PIALANG</option>
                    <option value="PARANORMAL">PARANORMAL</option>
                    <option value="PEDAGANG">PEDAGANG</option>
                    <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                    <option value="KEPALA DESA">KEPALA DESA</option>
                    <option value="BIARAWATI">BIARAWATI</option>
                    <option value="WIRASWASTA">WIRASWASTA</option>
                    <option value="LAINNYA">LAINNYA</option>
                </select>
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
                <select class="form-select @error('hubungan_keluarga') is_invalid @enderror" name="hubungan_keluarga" id="hubungan_keluarga">
                    <option value="Kakak">Kakak</option>
                    <option value="Paman">Paman</option>
                    <option value="Bibi">Bibi</option>
                    <option value="Kakek">Kakek</option>
                    <option value="Nenek">Nenek</option>
                    <option value="Lainnya">Lainnya</option>
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
                <input type="file" class="form-control @error('foto_ktp_wali') is_invalid @enderror" name="foto_ktp_wali" id="foto_ktp_wali">
                @error('foto_ktp_wali')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <hr class="my-4">

        <p class="text-medium fs-5 mb-0">Data Tambahan</p>
        <p><small>Wajib tapi tidak semua diisi</small></p>
        <div class="mb-2 row">
            <label for="cerita" class="col-12 col-md-3 col-form-label">Cerita Tentang Calon Peserta Didik</label>
            <div class="col-12 col-md-9">
                <textarea class="form-control @error('cerita') is_invalid @enderror" name="cerita" id="cerita" placeholder="Ada informasi tambahan untuk kami tentang calon peserta didik?" rows="3"></textarea>
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
                    <input class="form-check-input @error('masuk_sebagai') is_invalid @enderror" type="radio" name="masuk_sebagai" id="opsi_baru" checked data-bs-toggle="collapse" value="Peserta Didik Baru">
                    <label class="form-check-label" for="opsi_baru">Peserta Didik Baru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('masuk_sebagai') is_invalid @enderror" type="radio" name="masuk_sebagai" id="opsi_pindahan" data-bs-toggle="collapse" value="Pindahan" href="#info_pindahan">
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
                <textarea class="form-control @error('pindahan_dari') is_invalid @enderror" name="pindahan_dari" id="pindahan_dari" placeholder="Kalau pindahan, pindahan dari TK mana?" rows="3"></textarea>
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
                <input type="date" class="form-control @error('tanggal_pindah') is_invalid @enderror" name="tanggal_pindah" id="tanggal_pindah">
                @error('tanggal_pindah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

    </section>

    <div class="my-2 row justify-content-end">
        <div class="col-12 col-md-9">
            <button type="submit" class="btn btn-info text-white">Daftar</button>
        </div>
    </div>




    </form>

@endsection
