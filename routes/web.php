<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PpdbController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/ppdb', [PpdbController::class, 'beranda']);
Route::get('/ppdb/daftar', [PpdbController::class, 'daftar']);
Route::post('/ppdb/daftar', [PpdbController::class, 'store']);
Route::get('/ppdb/pengumuman', [PpdbController::class, 'pengumuman']);
Route::get('/ppdb/student/{student}', [PpdbController::class, 'show']);
Route::put('/admin/student/{student}', [AdminController::class, 'updateStudent']);

Route::get('/admin/login', [AdminController::class, 'login'])->middleware('guest');
Route::post('/admin/login', [AdminController::class, 'loginValidation'])->middleware('guest');
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::get('/admin/index', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/recruitment', [AdminController::class, 'recruitment'])->middleware('auth');
Route::delete('/admin/recruitment/{recruitment:tahun_ajaran}', [AdminController::class, 'destroy'])->middleware('auth');
Route::get('/admin/recruitment/create', [AdminController::class, 'createRecruitment'])->middleware('auth');
Route::post('/admin/recruitment/create', [AdminController::class, 'storeRecruitment'])->middleware('auth');
Route::get('/admin/recruitment/{recruitment:tahun_ajaran}/edit', [AdminController::class, 'editRecruitment'])->middleware('auth');
Route::put('/admin/recruitment/{id}', [AdminController::class, 'updateRecruitment'])->middleware('auth');
