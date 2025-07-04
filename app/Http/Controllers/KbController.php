<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KbController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pegawai
		$kb = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('kb',['kb' => $kb]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('kbtambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'kb_kode' => $request->kode,
			'kb_jumlah' => $request->jumlah,
			'kb_harga' => $request->harga,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kb');

	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('kb_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kb');
	}

}
