<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pegawai
		$my = DB::table('mykaryawan')->get();

    	// mengirim data pegawai ke view index
		return view('eas',['my' => $my]);

	}

    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$my = DB::table('mykaryawan')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('easedit',['my' => $my]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('mykaryawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->depart
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/eas');
	}

    public function view($id) {
        $my = DB::table('mykaryawan')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('easview',['my' => $my]);
    }

}
