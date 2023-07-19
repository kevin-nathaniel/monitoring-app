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
use App\Http\Controllers\LogController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanDamkarController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\JadwalController;

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

// Log Activity Inspeksi
Route::resource('/dashboard/log', LogController::class)->middleware('auth');
Route::resource('/dashboard/log-damkar', DamkarController::class)->middleware('auth');

// Laporan Inspeksi
Route::resource('/dashboard/laporan', LaporanController::class)->middleware('auth');
Route::resource('/dashboard/laporan-damkar', LaporanDamkarController::class)->middleware('auth');

// Report PDF
Route::get('/view/{id}', [LaporanDamkarController::class, 'viewPDF']);
Route::get('/generate', [LaporanDamkarController::class, 'generatePDF']);

// Grafik Laporan
Route::resource('/dashboard/grafik', GrafikController::class)->middleware('auth');

// Bobot
Route::resource('/dashboard/bobot', BobotController::class)->middleware('auth');

// Bobot
Route::resource('/dashboard/jadwal', JadwalController::class)->middleware('auth');



// Route::get('/entry-inspeksi', function () {
//     return view('report/entry-inspeksi');
// });

// // Route::get('/log-activity', function () {
// //     return view('log-activity');
// // });

// Route::get('/laporan-hanggar', function () {
//     return view('report/laporan-hanggar');
// });

// Route::get('/laporan-hbs', function () {
//     return view('report/laporan-hbs');
// });

// Route::get('/laporan-terminal', function () {
//     return view('report/laporan-terminal');
// });

// Route::get('/laporan-damkar', function () {
//     return view('report/laporan-damkar');
// });

