<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('upload');
});


Route::get('/mahasiswa', function(){
    echo 'mahasiswa';
});
//routing dengan parameter
Route::get('/ubg/ilkom/mahasiswa/{nim}', function($nim){
    echo 'mahasiswa ilkom kampus ubg' .$nim;
});
Route::redirect('/login','/masuk');
//groub get
Route::group(['prefix'=>'/admin'], function(){
Route::get('/mahasiswa', function(){
    return 'Admin mahasiswa';
});
Route::get('/dosen', function(){
    return 'Admin dosen';
});
Route::get('/pegawai', function(){
    return 'Admin pegawai';
});
});
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
//routing default

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
return view('index');
});
Route::get('/kontak/{hp}', function($hp){
return view('kontak', ['handphone'=>$hp]);
});
Route::get('/tentang-kami', function(){
    return view('tentang');
});

//crud

Route::get('customer','CustomerController@index');