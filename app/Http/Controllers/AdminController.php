<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use App\Models\StudentCandidate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function login()
    {
        return view('pages.login',
        [
            'title' => 'Login Admin'
        ]);
    }

    public function loginValidation(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|min:11|exists:users,email|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/index');
        }

        return back()->with('failed', '<div class="alert alert-danger mt-3" role="alert">
            <strong>Login gagal!!</strong> Pastikan email dan password benar.
        </div>');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function index()
    {
        return view('pages.index',
        [
            'title' => 'Data Calon Peserta Didik',
            'students' => StudentCandidate::with(['recruitment'])->tahunAjaran(request('tahun_ajaran'))->search(request('search'))->active()->paginate(50)->withQueryString(),
            'recruitments' => Recruitment::orderBy('id','desc')->get()
        ]);
    }

    public function recruitment()
    {
        return view('pages.recruitment',
        [
            'title' => 'Manajemen pendaftaran Peserta Didik Baru',
            'recruitments' => Recruitment::orderBy('id', 'desc')->get(),
            'is_available' => count(Recruitment::all()) == 0 || Carbon::now() > Recruitment::orderBy('id', 'desc')->first()->penutupan
        ]);
    }

    public function createRecruitment()
    {
        return view('pages.recruitment-create',
        [
            'title' => 'Tambah Sesi pendaftaran'
        ]);
    }

    public function storeRecruitment( Request $request )
    {
        $validated = $request->validate([
            'tahun_ajaran' => 'required|unique:recruitments,tahun_ajaran|integer|min:2019|max:2999',
            'pembukaan' => 'required',
            'penutupan' => 'required'
        ]);

        Recruitment::create($validated);

        return redirect('/admin/recruitment')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">Data pendaftaran <strong>berhasil dibuat</strong>.<button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }

    public function updateRecruitment( Request $request, $id )
    {
        $rules = [
            'tahun_ajaran' => 'required',
            'pembukaan' => 'required',
            'penutupan' => 'required'
        ];

        if( request('tahun_ajaran') != Recruitment::where('id', $id)->first()->tahun_ajaran ) :
            $rules['tahun_ajaran'] = 'required|unique:recruitments,tahun_ajaran|integer|min:2019|max:2999';
        endif;

        $validated = $request->validate($rules);

        Recruitment::where('id', $id)->update($validated);

        return redirect('/admin/recruitment')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">Data pendaftaran <strong>berhasil diubah</strong>.<button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }

    public function editRecruitment(Recruitment $recruitment)
    {
        return view('pages.recruitment-edit',
        [
            'title' => 'Ubah Pendaftaran',
            'recruitment' => $recruitment
        ]);
    }

    public function destroy(Recruitment $recruitment)
    {
        Recruitment::destroy($recruitment->id);
        return redirect('/admin/recruitment')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">Data pendaftaran <strong>berhasil dihapus</strong>.<button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }

    public function updateStudent( StudentCandidate $student )
    {
        StudentCandidate::where('id', $student->id)->update(['diterima' => request('diterima')]);
        return redirect('/admin/index')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert"><strong>berhasil</strong>.<button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }












}
