<?php

use App\Http\Controllers\bookingAdminController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\layanan;
use App\Http\Controllers\layananPelanggan;
use App\Http\Controllers\register;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganAdmin;
use App\Http\Controllers\RiwayatAdminController;
use App\Http\Controllers\RiwayatController;
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
Route::get('/homePelanggan', function () {return view('Pelanggan/HomeTidakLogin');});
Route::get('/', function () {return view('login');})->middleware('user_not_login');
Route::get('/loginAdmin',[AdminLogin::class, 'index']);
Route::post('/loginAdmin',[AdminLogin::class, 'authenticate']);
Route::get('/register',[register::class, 'index'])->middleware('user_not_login');
Route::post('/register/add',[register::class, 'store']);
Route::get('/login',[LoginController::class, 'index'])->middleware('user_not_login');
Route::post('/login',[LoginController::class, 'authenticate']);

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
Route::get('/pelanggan/viewadd',[PelangganAdmin::class, 'viewAdd']);
Route::get('/homeAdmin',[bookingAdminController::class, 'index']);
Route::get('/orders',[bookingAdminController::class, 'orders']);
Route::get('/orders/hapus/{id}',[bookingAdminController::class, 'hapus']);
Route::put('/orders/update',[bookingAdminController::class, 'updateDataStatus']);
Route::get('/riwayat',[RiwayatAdminController::class,'index']);
Route::get('/riwayat/print',[RiwayatAdminController::class,'generatePDF']);
Route::put('/updateAkun',[HomeController::class,'updateAkun']);
Route::get('/logout/admin', [AdminLogin::class, 'logout']);
Route::put('/updateAkun/admin',[bookingAdminController::class,'updateAkun']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/layananPelanggan',[layananPelanggan::class, 'index']);
Route::get('/pelanggan/booking',[bookingController::class, 'index']);
Route::get('/pelanggan/booking/add',[bookingController::class, 'addBooking']);
Route::get('/pelanggan/add/{id}',[bookingController::class,'getID']);
Route::post('/pelanggan/booking/create',[bookingController::class,'addData']);
Route::get('/pelanggan/booking/detail/{id}',[bookingController::class,'getDetailBooking']);
Route::get('/pelanggan/booking/pembayaran/{id}',[bookingController::class,'addPembayaran']);
Route::post('/pelanggan/booking/updatepembayaran',[bookingController::class,'updateDataPembayaran']);
Route::get('/pelanggan/riwayat',[RiwayatController::class,'index']);
Route::get('/riwayat/print/{id}',[RiwayatController::class,'generatePDF']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');