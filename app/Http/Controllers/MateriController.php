<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Materi;

class MateriController extends Controller
{
    public function subbab()
    {
        $data['datamateri'] = Materi::all();
        return view('guru.subbab',$data);
    } 

    public function video()
    {
        $data['materivideo'] = Materi::all();
        return view('guru.video',$data);
    } 

    public function insertmateri()
    {
    	return view('guru.tambahmateri');
    } 

    public function simpanmateri(Request $request)
    {
        //menyimpan gambar ke folder public/image
        $file_gambar = $request->file('gambar');
        $file_gambar->move(public_path()."/image/", $file_gambar->getClientOriginalName());

        //menyimpan video ke folder public/video
        $file_video = $request->file('video');
        $file_video->move(public_path()."/image/", $file_video->getClientOriginalName());

    	$materi = new materi;
    	$materi->id_materi = $request->id_materi;
    	$materi->judul = $request->judul;
    	$materi->isi_materi = $request->isi_materi;
    	$materi->video = $file_video->getClientOriginalName();
        $materi->gambar = $file_gambar->getClientOriginalName();

    	if ($materi->save()){
    		return view('guru.tambahmateri');
    	}

    }

    

}
