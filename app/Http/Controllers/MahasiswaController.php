<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Tambah
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    //
	public function index()
	{
		//$mahasiswa = DB::table('mahasiswa')->get();
		//return @mahasiswa;
		
		//$mahasiswa = Mahasiswa::All();
		$mhs = new Mahasiswa();
		$mahasiswa = $mhs->All();
		
		return view('mahasiswa.index', compact('mahasiswa'));
	}
	
	public function show($id){
		//$mahasiswa = DB::table('mahasiswa')->find($id);
		$mahasiswa = Mahasiswa::find($id);
		return view('mahasiswa.show', compact('mahasiswa'));
	}
	
	
}
