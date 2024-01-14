<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PinjamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route untuk Halaman Home
Route::get('/',[BukuController::class, 'viewHome'])->name('view.home');

//Route untuk menuju ke halaman Lihat Selengkapnya
Route::get('/buku/{id}', [BukuController::class, 'lihatBuku'])->name('buku.lihat');

//Route untuk Data Buku
Route::get('/buku',[BukuController::class, 'bukutampil'])->middleware('auth');
Route::post('/buku/tambah',[BukuController::class, 'bukutambah'])->middleware('auth');
Route::get('/buku/hapus/{id_buku}',[BukuController::class, 'bukuhapus'])->middleware('auth');
Route::put('/buku/edit/{id_buku}', [BukuController::class, 'bukuedit'])->middleware('auth');

//Route untuk Data Buku
Route::get('/home', [BukuController::class, 'viewHome']);

//Route Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Route untuk Data Anggota
Route::get('/anggota', [AnggotaController::class, 'anggotatampil']);
Route::post('/anggota/tambah', [AnggotaController::class, 'anggotatambah']);
Route::get('/anggota/hapus/{id_anggota}', [AnggotaController::class, 'anggotahapus']);
Route::put('/anggota/edit/{id_anggota}', [AnggotaController::class, 'anggotaedit']);

//Route untuk Data Petugas
Route::get('/petugas', [PetugasController::class, 'petugastampil']);
Route::post('/petugas/tambah', [PetugasController::class, 'petugastambah']);
Route::get('/petugas/hapus/{id_petugas}', [PetugasController::class, 'petugashapus']);
Route::put('/petugas/edit/{id_petugas}', [PetugasController::class, 'petugasedit']);

//Route untuk Data Peminjaman
Route::get('/pinjam', [PinjamController::class, 'pinjamtampil']);
Route::post('/pinjam/tambah',[PinjamController::class, 'pinjamtambah']);
Route::get('/pinjam/hapus/{id_pinjam}',[PinjamController::class, 'pinjamhapus']);
Route::put('/pinjam/edit/{id_pinjam}', [PinjamController::class, 'pinjamedit']);


