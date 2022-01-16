<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
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
            'title' => 'Index Admin'
        ]);
    }

    public function recruitment()
    {
        return view('pages.recruitment',
        [
            'title' => 'Manajemen Penerimaan Peserta Didik Baru',
            'recruitments' => Recruitment::orderBy('tahun_ajaran', 'desc')->get()
        ]);
    }

    public function createRecruitment()
    {
        return view('pages.recruitment-create',
        [
            'title' => 'Tambah Sesi Penerimaan'
        ]);
    }

    public function storeRecruitment( Request $request )
    {
        $validated = $request->validate([
            'tahun_ajaran' => 'required|integer|min:2019|max:2999',
            'pembukaan' => 'required',
            'penutupan' => 'required'
        ]);

        Recruitment::create($validated);

        return redirect('/admin/recruitment')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">Data penerimaan <strong>berhasil dibuat</strong>. Infokan untuk verifikasi email.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');


    }













}
