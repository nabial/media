<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\materi;

class MateriController extends Controller
{
    public function insertmateri()
    {
    	return view('guru.tambahmateri');
    } 

    public function simpanmateri(Request $request)
    {
    	$users = new materi;
    	$users->id_materi = $request->id_materi;
    	$users->judul = $request->judul;
    	$users->isi_materi = $request->isi_materi;
    	$users->video = $request->video;
    	$users->gambar = $request->gambar;
    	if ($users->save()){
    		return view('guru.tambahmateri');
    	}

    } 

}
