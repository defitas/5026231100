<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnackController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pegawai
		$snack = DB::table('snack')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('snack',['snack' => $snack]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('snacktambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('snack')->insert([
			'snack_merek' => $request->merek,
			'snack_harga' => $request->harga,
			'snack_tersedia' => $request->tersedia,
			'snack_berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/snack');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$snack = DB::table('snack')->where('snack_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('snackedit',['snack' => $snack]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('snack')->where('snack_id',$request->id)->update([
			'snack_merek' => $request->merek,
			'snack_harga' => $request->harga,
			'snack_tersedia' => $request->tersedia,
			'snack_berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('snack')->where('snack_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$snack = DB::table('snack')
		->where('snack_merek','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('snack',['snack' => $snack, 'cari' => $cari]);

	}
}
