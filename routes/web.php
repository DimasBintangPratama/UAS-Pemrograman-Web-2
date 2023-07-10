<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KriteriaController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/telkomsel', function () {
    return view('telkomsel');
});

Route::get('/gojek', function () {
    return view('gojek');
});

Route::get('/google', function () {
    return view('google');
});

Route::get('/traveloka', function () {
    return view('traveloka');
});

Route::get('/tokopedia', function () {
    return view('tokopedia');
});

Route::get('/seagroup', function () {
    return view('seagroup');
});

Route::get('/meta', function () {
    return view('meta');
});

Route::get('/sociolla', function () {
    return view('sociolla');
});

Route::get('/ajaib', function () {
    return view('ajaib');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/requirement', function () {
    return view('requirement');
});

Route::resource('/admin/kriteria', KriteriaController::class);
Route::resource('/admin/produk', ProdukController::class);

Route::get('/admin/hitung', [HitungController::class, 'hitung'])->name('hitung');