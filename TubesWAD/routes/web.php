<?php

use App\Http\Controllers\layanan;
use App\Http\Controllers\register;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pelanggan;
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
    return view('home');
});
Route::get('/homePelanggan', function () {
    return view('Pelanggan/IndexPelanggan');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/profile', function () {
    return view('profile');
});


Route::get('/layanan',[layanan::class, 'index']);
Route::post('/layanan/add',[layanan::class, 'add']);
Route::get('/layanan/viewadd',[layanan::class, 'viewAdd']);
Route::get('/layanan/delete/{id}', [layanan::class, 'hapus']);

Route::get('/register',[register::class, 'index']);
Route::post('/register/add',[register::class, 'store']);
Route::post('/layanan/update',[layanan::class, 'update']);
Route::get('/layanan/viewedit/{id}',[layanan::class, 'viewedit']);
Route::get('/pelanggan',[pelanggan::class, 'index']);

Route::get('/login',[LoginController::class, 'index']);