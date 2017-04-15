<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    //
	public function index()
    {
    	// mengambil semua data kendaraan
		$kendaraans = \App\Kendaraan::all(); 
		
		// melempar data ke view
    	return view('crud.kendaraan.view', compact('kendaraans')); 
    }
	
	public function destroy($id)
	{
		//Nggoleki
		$kendaraans = \App\Kendaraan::find($id);
		
		//DELETE
		$kendaraans->delete();
		return redirect('kendaraan');
	}
}
