<?php

// import java.io
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SnackController;

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
