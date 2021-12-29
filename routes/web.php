<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenjadwalanController;

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

//admin
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/penjadwalan', [PenjadwalanController::class, 'index']);
Route::get('/t_penjadwalan', [PenjadwalanController::class, 't_penjadwalan']);
Route::resource('savej', PenjadwalanController::class);