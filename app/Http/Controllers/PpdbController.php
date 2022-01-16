<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use App\Models\StudentCandidate;
use Carbon\Carbon;
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
        $title = 'Form Pendaftaran Calon Siswa TK Al-Ishlah';

        $title .= count(Recruitment::all()) > 0 && Carbon::now() < Recruitment::orderBy('id', 'desc')->first()->penutupan ? '<br>Tahun Ajaran ' . Recruitment::orderBy('id', 'desc')->first()->tahun_ajaran : '';

        return view('pages.daftar', [
            'title' => $title,
            'is_available' => count(Recruitment::all()) > 0 && Carbon::now() < Recruitment::orderBy('id', 'desc')->first()->penutupan
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_lengkap' => 'required|min:3|max:255',
            'nama_panggilan' => 'required|min:3|max:255',
            'jk' => 'required|in:Laki-laki, Perempuan',
            'tempat_lahir' => 'required|min:3|max:255',
            'tanggal_lahir' => 'required',
            'agama' => 'required|in:Islam,Kristen,Khatolik,Protestan,Hindu,Budha',
            'kewarganegaraan' => 'required|in:Indonesia,Lainnya',
            'anak_ke' => 'required|integer|min:1',
            'jumlah_saudara_kandung' => 'required|integer|min:1',
            'bahasa_sehari_hari' => 'required',
            'berat_badan' => 'required|integer|min:1',
            'tinggi_badan' => 'required|integer|min:1',
            'golongan_darah' => 'max:3',
            'alamat' => 'required',
            'jarak_ke_sekolah' => 'required|integer|min:1',
            'foto' => 'required|image|file|max:1024',
            'foto_akta' => 'required|image|file|max:1024',
            'foto_kk' => 'required|image|file|max:1024',
            'nama_ayah' => 'required|min:3|max:255',
            'no_hp_ayah' => 'required|min:12|max:14',
            'pendidikan_ayah' => 'required|in:SD,SMP/SLTP/Sederajat,SMA/SLTA/Sederajat,Sarjana/Diploma,Magister,Doktor',
            'pekerjaan_ayah' => 'required',
            'foto_ktp_ayah' => 'required|image|file|max:1024',
            'nama_ibu' => 'required|min:3|max:255',
            'no_hp_ibu' => 'required|min:12|max:14',
            'pendidikan_ibu' => 'required|in:SD,SMP/SLTP/Sederajat,SMA/SLTA/Sederajat,Sarjana/Diploma,Magister,Doktor',
            'pekerjaan_ibu' => 'required',
            'foto_ktp_ibu' => 'required|image|file|max:1024',
            'masuk_sebagai' => 'required|in:Peserta Didik Baru,Pindahan'
        ];

        if( $request->nama_wali != null ) :
            $rules['nama_wali'] = 'required|min:3|max:255';
            $rules['no_hp_wali'] = 'required|min:12|max:14';
            $rules['pendidikan_wali'] = 'required|in:SD,SMP/SLTP/Sederajat,SMA/SLTA/Sederajat,Sarjana/Diploma,Magister,Doktor';
            $rules['pekerjaan_wali'] = 'required';
            $rules['hubungan_keluarga'] = 'required|in:Kakak,Paman,Bibi,Kakek,Nenek,Lainnya';
            $rules['foto_ktp_wali'] = 'required|image|file|max:1024';
        endif;

        if( $request->masuk_sebagai == 'Pindahan' ) :
            $rules['pindahan_dari'] = 'required';
            $rules['tanggal_pindah'] = 'required';
        endif;

        $validated = $request->validate($rules);
        $validated['foto'] = $request->file('foto')->store('student-photos');
        $validated['foto_akta'] = $request->file('foto_akta')->store('student-photos');
        $validated['foto_kk'] = $request->file('foto_kk')->store('student-photos');
        $validated['foto_ktp_ayah'] = $request->file('foto_ktp_ayah')->store('student-photos');
        $validated['foto_ktp_ibu'] = $request->file('foto_ktp_ibu')->store('student-photos');

        if( $request->nama_wali != null ) :
            $validated['foto_ktp_wali'] = $request->file('foto_ktp_wali')->store('student-photos');
        else :
            $validated['nama_wali'] = null;
            $validated['no_hp_wali'] = null;
            $validated['pendidikan_wali'] = null;
            $validated['pekerjaan_wali'] = null;
            $validated['foto_ktp_wali'] = null;
            $validated['hubungan_keluarga'] = null;
        endif;

        $validated['recruitment_id'] = Recruitment::orderBy('id', 'desc')->first()->id;

        StudentCandidate::create($validated);

        return redirect('/ppdb/daftar')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert"><strong>berhasil daftar</strong>. Silahkan tunggu hasil saat pengumuman.<button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }


    public function pengumuman()
    {
        return view('pages.pengumuman', [
            'title' => 'Data Pengumuman Siswa yang Diterima di TK Al-Ishlah',
            'students' => StudentCandidate::with(['recruitment'])->tahunAjaran(request('tahun_ajaran'))->search(request('search'))->active()->paginate(50)->withQueryString(),
            'recruitments' => Recruitment::orderBy('id','desc')->get()
        ]);
    }

    public function show( StudentCandidate $student )
    {
        return view('pages.student', [
            'title' => 'Detail Calon Peserta Didik',
            'student' => $student
        ]);
    }

}
