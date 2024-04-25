<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// variabel
Route::get('/about', function () {

    $nama = "Anis nurhayati";
    $jk = "perempuan";
    $pa = "s2";
    $peker = "programer";
    $alamat = "kp bojong sereh";

    return view('data_diri', compact('nama','jk','pa','peker','alamat'));
});

Route::get('/tentang', function () {


    return view('biodata');
});


// parameter
Route::get('/about2/{nama}/{jk}/{pa}/{peker}/{alamat}', function (Request $request, $nama, $jk, $pa, $peker, $alamat) {

    $nama2 = $nama;
    $jk2 = $jk;
    $pa2 = $pa;
    $peker2 = $peker;
    $alamat2 = $alamat;

    return view('biodata2', compact('nama2', 'jk2', 'pa2', 'peker2', 'alamat2'));
});