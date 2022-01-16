<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpdbController extends Controller
{

    public function beranda()
    {
        return view('pages.beranda', [
            'title' => 'Beranda PPDB TK Al-Ishlah'
        ]);
    }

    public function daftar()
    {
        return view('pages.daftar', [
            'title' => 'Form Pendaftaran Calon Siswa TK Al-Ishlah'
        ]);
    }

    public function pengumuman()
    {
        return view('pages.pengumuman', [
            'title' => 'Data Pengumuman Siswa yang Diterima di TK Al-Ishlah'
        ]);
    }

}
