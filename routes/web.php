<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\pelanggaranController;
use App\Http\Controllers\laporanController;

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
    return view('welcome');
});

Route::get('/Sidebar', function () {
    return view('layout.App');
});

Route::get('/dasboard', function () {
    return view('dasboard.dash');
});

Route::get('/dasboard/tablesiswa', function () {
    return view('student.index');
});

Route::get('/dasboard/tableguru', function () {
    return view('guru.index');
});

Route::get('/dasboard/tablepelanggar', function () {
    return view('pelanggaran.index');
});



//siswa
Route::get('/dasboard/tablesiswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/create/siswa', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/store/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/student/detail/{id}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/student/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::resource('/student-update', SiswaController::class);
Route::delete('/delete/siswa/{id}', [SiswaController::class, 'destroy'])->name('destroy.siswa');


//guru
Route::get('/dasboard/tableguru', [guruController::class, 'index'])->name('guru.index');
Route::get('/create', [guruController::class, 'create'])->name('guru.create');
Route::post('/storeguru', [guruController::class, 'store'])->name('guru.store');
Route::get('/guru/detail/{id}', [guruController::class, 'show'])->name('guru.show');
Route::get('/guru/edit/{id}', [guruController::class, 'edit'])->name('guru.edit');
Route::resource('/guru-update', guruController::class);
Route::delete('/dasboard-destroy/{id}', [guruController::class, 'destroy'])->name('destroy.guru');



//pelanggaran
Route::get('/dasboard/tablepelanggar', [pelanggaranController::class, 'index'])->name('pelanggar.index');
Route::get('/createpelanggar', [pelanggaranController::class, 'create'])->name('pelanggar.create');
Route::post('/store', [pelanggaranController::class, 'store'])->name('pelanggar.store');
Route::get('/pelanggaran/detail/{id}', [pelanggaranController::class, 'show'])->name('pelanggar.show');
Route::get('/pelanggaran/edit/{id}', [pelanggaranController::class, 'edit'])->name('pelanggar.edit');
Route::resource('/pelanggar-update', pelanggaranController::class);
Route::delete('/dasboard/destroy/{id}', [pelanggaranController::class, 'destroy'])->name('destroy.pelanggar');

//laporan
Route::get('/dasboard/laporan', [laporanController::class, 'index'])->name('laporan');
Route::get('/createlaporan', [laporanController::class, 'create'])->name('laporan.create');
Route::post('/storelaporan', [laporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/edit/{id}', [laporanController::class, 'edit'])->name('laporan.edit');
Route::resource('/laporan-update', laporanController::class);
Route::get('/dasboard-destrroy/{id}', [laporanController::class, 'destroy'])->name('destroy.laporan');




Route::get('/cari_siswa', [pencarianController::class,'cari_siswa'])->name('cari_siswa');
Route::get('/cari_guru', [pencarianController::class,'cari_guru'])->name('cari_guru');
