<?php

// import java.io
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\KbController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Karyawan2Controller;

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

// System.out.println();
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloword']);

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('latihanlayout', function () {
	return view('latihanlayout');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('tes', function () {
	return view('tes');
});

Route::get('index', function () {
	return view('index');
});

Route::get('dosen', [Link::class, 'index']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
// Route::post('/pegawai/{nama}', [PegawaiController::class, 'index']);

// Route::get('formulir', [PegawaiController::class, 'formulir']);
// Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Route::get('/blog', [BlogController::class, 'home']);
// Route::get('/blog/tentang', [BlogController::class, 'tentang']);
// Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

// CRUD snack (tugas CRUD)
Route::get('/snack', [SnackController::class, 'index']);
Route::get('/snack/tambah', [SnackController::class, 'tambah']);
Route::post('/snack/store', [SnackController::class, 'store']);
Route::get('/snack/edit/{id}', [SnackController::class, 'edit']);
Route::post('/snack/update', [SnackController::class, 'update']);
Route::get('/snack/hapus/{id}', [SnackController::class, 'hapus']);
Route::get('/snack/cari', [SnackController::class, 'cari']);

// CRUD latihan 1
Route::get('/kb', [KbController::class, 'index']);
Route::get('/kb/tambah', [KbController::class, 'tambah']);
Route::post('/kb/store', [KbController::class, 'store']);
Route::get('/kb/hapus/{id}', [KbController::class, 'hapus']);

// CRUD latihan 2
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

// CRUD latihan 2
Route::get('/karyawan2', [Karyawan2Controller::class, 'index']);
Route::get('/karyawan2/tambah', [Karyawan2Controller::class, 'tambah']);
Route::post('/karyawan2/store', [Karyawan2Controller::class, 'store']);
Route::get('/karyawan2/hapus/{id}', [Karyawan2Controller::class, 'hapus']);
