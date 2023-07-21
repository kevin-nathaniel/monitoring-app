<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\InspeksiController;
use App\Http\Controllers\HanggarController;
use App\Http\Controllers\DamkarController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanDamkarController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\PKController;
use App\Http\Controllers\ActivityController;


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

//Route::get('/', [profilController::class, 'index']);

Route::get('/',[DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Akun Selain Super Admin
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

// Akun Super Admin
Route::resource('/dashboard/account', AccountController::class)->middleware('IsSuper');

// Inspeksi
Route::resource('/dashboard/inspeksi', InspeksiController::class)->middleware('auth');
Route::resource('/dashboard/inspeksi/hanggar', HanggarController::class)->middleware('auth');
Route::resource('/dashboard/inspeksi/damkar', DamkarController::class)->middleware('auth');
Route::resource('/dashboard/inspeksi/terminal', TerminalController::class)->middleware('auth');

// Laporan Inspeksi
Route::resource('/dashboard/laporan', LaporanController::class)->middleware('auth');
Route::resource('/dashboard/laporan-damkar', LaporanDamkarController::class)->middleware('auth');

// Report PDF
Route::get('/pdf/view/{id}', [LaporanDamkarController::class, 'viewPDF']);
Route::get('/pdf/{id}/generate', [LaporanDamkarController::class, 'generatePDF']);

// Grafik Laporan
Route::resource('/dashboard/grafik/', GrafikController::class)->middleware('auth');

// Activity Inspeksi
Route::resource('/dashboard/activity', ActivityController::class)->middleware('auth');

