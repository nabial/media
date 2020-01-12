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
Route::get('/haha', function () {
    return view('welcome');
});

Route::get('/alterra', function () {
    return view('alterra');
});

// GURU
Route::get('/dashguru', function () {
    return view('guru.dash_guru');
});
Route::get('/guru', function () {
    return view('guru.guru');
});
Route::get('/siswa', function () {
    return view('guru.siswa');
});
Route::get('/gurusoal', function () {
    return view('guru.soal');
});
Route::get('/gurubab', function () {
    return view('guru.subbab');
});
Route::get('/tambahuser', function () {
    return view('guru.tambahuser');
});
Route::get('/guruvideo', function () {
    return view('guru.video');
});


//SISWAAAA
Route::get('/dashsiswa', function () {
    return view('siswa.dash_siswa');
});
Route::get('/kd', function () {
    return view('siswa.kd');
});
Route::get('/ki', function () {
    return view('siswa.ki');
});
Route::get('/indikator', function () {
    return view('siswa.indikator');
});
Route::get('/tujuan', function () {
    return view('siswa.tujuan');
});
Route::get('/kuis', function () {
    return view('siswa.kuis');
});
Route::get('/bab', function () {
    return view('siswa.subbab');
});
Route::get('/video', function () {
    return view('siswa.video');
});