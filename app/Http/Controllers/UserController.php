<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class UserController extends Controller
{
    //
    public function dashguru()
    {
    	return view('guru.dash_guru');
    } 

    public function dashsiswa()
    {
    	return view('siswa.dash_siswa');
    }

    public function siswa()
    {
    	$data['datasiswa'] = User::all();
    	return view('guru.siswa',$data);
    } 

    public function insertuser()
    {
    	return view('guru.tambahuser');
    }

	public function simpanuser(Request $request)
    {
    	$users = new user;
    	$users->id = $request->id;
    	$users->nama = $request->nama;
    	$users->email = $request->email;
    	$users->password = $request->password;
    	$users->no_tlp = $request->no_tlp;
    	$users->status = $request->status;
    	if ($users->save()){
    		return redirect('/tambahuser');
    	}

    } 
}
