<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// static
Route::get('/hello',function(){
    $hello = ['Hello World', 2=>['Hello Jakarta', 'Hello Karawang','Hello Medan']];
    // var_dump($hello);
    // die();

    // dd($hello);

    // dump($hello);

    print_r($hello);
    die();

    return $hello;
});

// parameter
Route::get('/nama/{nama}',function($nama){
    return "Tampilkan data nama berserta $nama";
});

// Route Group
Route::prefix('/admin')->group(function(){

   Route::get('/mahasiswa',function(){
    echo "<h1>Daftar Mahasiswa</h1>";
   });
   Route::get('/dosen',function(){
    echo "<h1>Daftar Dosen</h1>";
   });
   Route::get('/karyawan',function(){
    echo "<h1>Daftar Karyawan</h1>";
   });



});