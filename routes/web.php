<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RangkaianController;
use App\Http\Controllers\HasilController;

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
    return view('auth/login');
});

//login admin
Route::get('/loginadmin', [LoginController::class, 'index']);
Route::post('/proseslogin', [LoginController::class, 'proses']);
Route::get('/logoutadmin', [LoginController::class, 'logout']);

//penjadawalan
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/penjadwalan', [PenjadwalanController::class, 'index']);
Route::get('/t_penjadwalan', [PenjadwalanController::class, 't_penjadwalan']);
Route::resource('savej', PenjadwalanController::class);
Route::post('/penjadwalan/status', [PenjadwalanController::class, 'status']);
Route::get('/penjadwalan/riwayat', [PenjadwalanController::class, 'r_penjadwalan']);

//pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/t_pegawai', [PegawaiController::class, 'create']);
Route::resource('savep', PegawaiController::class);

//rangkaian
Route::get('/rangkaian', [RangkaianController::class, 'index']);
Route::resource('rangkaian', RangkaianController::class);

//hasil
Route::get('/hasilpanen', [HasilController::class, 'index']);
Route::get('/hasilpanen/riwayat', [HasilController::class, 'r_hasil']);
Route::resource('saveh', HasilController::class);

