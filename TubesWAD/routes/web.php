<?php

use App\Http\Controllers\bookingAdminController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\layanan;
use App\Http\Controllers\layananPelanggan;
use App\Http\Controllers\register;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebPelanggan;
use App\Http\Controllers\pelanggan;
use App\Http\Controllers\PelangganAdmin;
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

Route::get('/', function () {return view('login');});
Route::get('/homePelanggan', function () {return view('Pelanggan/HomeTidakLogin');});
Route::get('/riwayat', function () {return view('riwayat');});
Route::get('/profile', function () {return view('profile');});


// Admin
Route::get('/loginAdmin',function () {return view('LoginAdmin');});
Route::get('/layanan',[layanan::class, 'index']);
Route::post('/layanan/add',[layanan::class, 'add']);
Route::get('/layanan/viewadd',[layanan::class, 'viewAdd']);
Route::get('/layanan/delete/{id}', [layanan::class, 'hapus']);
Route::post('/layanan/update',[layanan::class, 'update']);
Route::get('/layanan/viewedit/{id}',[layanan::class, 'viewedit']);
Route::get('/pelanggan',[PelangganAdmin::class, 'index']);
Route::get('/pelanggan/delete/{id}', [PelangganAdmin::class, 'hapus']);
Route::post('/pelanggan/update',[PelangganAdmin::class, 'update']);
Route::get('/pelanggan/viewedit/{id}',[PelangganAdmin::class, 'viewedit']);
Route::post('/pelanggan/add/admin',[PelangganAdmin::class, 'add']);
Route::get('/pelanggan/viewad',[PelangganAdmin::class, 'viewAdd']);
Route::get('/homeAdmin',[bookingAdminController::class, 'index']);

// User
Route::get('/register',[register::class, 'index']);
Route::post('/register/add',[register::class, 'store']);
Route::get('/login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/layananPelanggan',[layananPelanggan::class, 'index']);
Route::get('/pelanggan/booking',[bookingController::class, 'index']);
Route::get('/pelanggan/booking/add',[bookingController::class, 'addBooking']);
Route::get('/pelanggan/add/{id}',[bookingController::class,'getID']);
Route::post('/pelanggan/booking/create',[bookingController::class,'addData']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
