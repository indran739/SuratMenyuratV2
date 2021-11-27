<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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
    return view('auth.login');
});

// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'dashboard']);
Route::get('/surat_masuk', 'MahasiswaController@suratMasuk')->name('surat_masuk');
Route::get('/surat_keluar', 'MahasiswaController@suratKeluar')->name('surat_keluar');
Route::get('/detail_{id_surat}', 'MahasiswaController@detailSuratKeluar');
Route::get('/surat_ijin_kp', 'MahasiswaController@suratKP')->name('surat_ijin_kp');
Route::get('/surat_tugas', 'MahasiswaController@suratTugas')->name('surat_tugas');
Route::get('/edit_{id_surat}', 'MahasiswaController@editSurat')->name('surat_tugas');
Route::post('/tambah_surat_tugas', 'MahasiswaController@tambahSuratTugas')->name('tambah_surat_tugas');


// Dosen
Route::get('/dosen_dashboard', function () {
    return view('dosen.dashboard_dosen');
});

// Admin

Route::get('/admin', function () {
    return view('admin.dashboard');
});


Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('mahasiswa', function () { return view('mahasiswa.m_dashboard'); })->middleware('checkRole:mahasiswa');
    Route::get('dosen', function () { return view('dashboard_dosen'); })->middleware(['checkRole:dosen']);
    Route::get('admin', function () { return view('admin.a_dashboard'); })->middleware(['checkRole:admin']);
