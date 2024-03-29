<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// COBA
Route::group(['prefix' => 'guru',  'middleware' => 'is_guru'], function(){
    Route::get('/dashguru','UserController@dashguru');
    Route::get('/tambahmateri','MateriController@insertmateri');
    Route::get('/tambahuser','UserController@insertuser');
    Route::post('/simpan/user', 'UserController@simpanuser')->name('simpan.user');
    Route::post('/simpan/materi', 'MateriController@simpanmateri')->name('simpan.materi');
    Route::get('/siswa','UserController@siswa');
    Route::get('/subbab','MateriController@subbab');
    Route::get('/guruvideo','MateriController@video');
    Route::get('/guru','UserController@guru')->name('user.guru');
    Route::get('/nilai','JawabanController@nilai');
    Route::get('/gurusoal', function () {
        return view('guru.soal');
    });
    Route::get('/materiguru1', function () {
        return view('guru.materiguru1');
    });
    Route::get('/materiguru2', function () {
        return view('guru.materiguru2');
    });
    Route::get('/materiguru3', function () {
        return view('guru.materiguru3');
    });
    Route::get('/materitambah', function () {
        return view('guru.materitambah');
    });
    Route::get('/kuistambah', function () {
        return view('guru.kuistambah');
    });
    Route::get('/jawaban', 'JawabanController@index');
    Route::get('/jawaban/export_excel', 'JawabanController@export_excel');
    Route::get('/pesan', function () {
        return view('guru.pesan');
    });

    Route::get('/delete/user{id}','UserController@delete')->name('delete.user');
    Route::get('/edit/user{id}','UserController@edit')->name('edit.user');
    Route::put('/update/user{id}','UserController@update')->name('update.user');
    

});


Route::group(['prefix' => 'siswa',  'middleware' => 'is_siswa'], function(){
    Route::get('/dashsiswa','UserController@dashsiswa');
    Route::get('/jawaban', 'JawabanController@jawaban');
    Route::post('/simpan/jawaban', 'JawabanController@simpanjawaban')->name('simpanjawaban');
    Route::get('/kd', function () {
        return view('siswa.kd');
    });
    Route::get('/kuis', function () {
        return view('siswa.kuis');
    });
    Route::get('/bab', function () {
        return view('siswa.subbab');
    });
    Route::get('/materi1', function () {
        return view('siswa.materi1');
    });
    Route::get('/materi2', function () {
        return view('siswa.materi2');
    });
    Route::get('/materi3', function () {
        return view('siswa.materi3');
    });
});

Route:: get ('/', function () {
       return view('auth.login');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
