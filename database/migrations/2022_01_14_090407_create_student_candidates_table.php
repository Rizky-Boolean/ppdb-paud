<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recruitment_id');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara_kandung');
            $table->string('bahasa_sehari_hari');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->string('golongan_darah');
            $table->string('riwayat_penyakit');
            $table->text('alamat');
            $table->integer('jarak_ke_sekolah');
            $table->string('foto');
            $table->string('foto_akta');
            $table->string('foto_kk');
            $table->string('nama_ayah');
            $table->string('no_hp_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('foto_ktp_ayah');
            $table->string('nama_ibu');
            $table->string('no_hp_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('foto_ktp_ibu');
            $table->string('nama_wali');
            $table->string('no_hp_wali');
            $table->string('pendidikan_wali');
            $table->string('pekerjaan_wali');
            $table->string('hubungan_keluarga');
            $table->string('foto_ktp_wali');
            $table->text('cerita');
            $table->string('masuk_sebagai');
            $table->string('pindahan_dari');
            $table->date('tanggal_pindah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_candidates');
    }
}
