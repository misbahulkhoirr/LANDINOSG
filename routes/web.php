<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;

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
    return view('Home', [
        'title' => 'Home'
    ]);
});

Route::get('/restauran', function () {
    return view('Restauran', [
        'title' => 'Restaurant'
    ]);
});

Route::get('/laundry', function () {
    return view('Laundry', [
        'title' => 'Laundry'
    ]);
});

Route::get('/carakerja', function () {
    return view('Carakerja', [
        'title' => 'Cara Kerja'
    ]);
});

Route::get('/sukses', function () {
    return view('Sukses', [
        'title' => 'Daftar Berhasil'
    ]);
});


Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store']);
