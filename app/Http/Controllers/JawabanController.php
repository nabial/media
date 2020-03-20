<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Jawaban;

class JawabanController extends Controller
{
    public function simpanjawaban(Request $request)
    {
    	$jawaban = new jawaban;
    	$jawaban->id = $request->id;
    	$jawaban->user_id = Auth::user()->email;
        $jawaban->no_1 = $request->no_1;
        $jawaban->no_2 = $request->no_2;
        $jawaban->no_3 = $request->no_3;
        $jawaban->no_4 = $request->no_4;
        $jawaban->no_5 = $request->no_5;
        $jawaban->no_6 = $request->no_6;
        $jawaban->no_7 = $request->no_7;
        $jawaban->no_8 = $request->no_8;
        $jawaban->no_9 = $request->no_9;
        $jawaban->no_10 = $request->no_10;
        $jawaban->no_11 = $request->no_11;
        $jawaban->no_12 = $request->no_12;
        $jawaban->no_13 = $request->no_13;
        $jawaban->no_14 = $request->no_14;
        $jawaban->no_15 = $request->no_15;
        $jawaban->no_16 = $request->no_16;
        $jawaban->no_17 = $request->no_17;
        $jawaban->no_18 = $request->no_18;
        $jawaban->no_19 = $request->no_19;
        $jawaban->no_20 = $request->no_20;

        $score = 0;
        if ($jawaban->no_1 == "A")
        {
            $score += 10;
        }
        if ($jawaban->no_2 == "A")
        {
            $score += 10;
        }
        if ($jawaban->no_3 == "A")
        {
            $score += 10;
        }
        if ($jawaban->no_4 == "A")
        {
            $score += 10;
        }
        if ($jawaban->no_5 == "A")
        {
            $score += 10;
        }
        if ($jawaban->no_6 == "B")
        {
            $score += 10;
        }
        if ($jawaban->no_7 == "B")
        {
            $score += 10;
        }
        if ($jawaban->no_8 == "B")
        {
            $score += 10;
        }
        if ($jawaban->no_9 == "C")
        {
            $score += 10;
        }
        if ($jawaban->no_10 == "C")
        {
            $score += 10;
        }
        $jawaban->score = $score;
    	
    	
    	if ($jawaban->save()){
    		return redirect('/siswa/jawaban');
    	}

    }

    public function jawaban()
    {
        $data['simpanjawaban'] = Jawaban::where('user_id', Auth::user()->email)->orderBy('created_at','desc')->limit(1)->get();
        return view('siswa.jawaban',$data);
    }

    public function nilai()
    {
        $data['hasil'] = Jawaban::all();
        return view('guru.nilai',$data);
    }
}
