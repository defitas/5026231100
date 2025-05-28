<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pegawai2Controller extends Controller
{
    public function index($nama){
    	return $nama;
    }

     public function formulir(){
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama'); // parse variabel name
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama."<br> Alamat : ".$alamat;
    }
}
