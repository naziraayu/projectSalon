<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [LandingController::class, 'index'])->name('landing');

Route::get('/admin', [AdminController::class, 'admin'])->name('template');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

// Rute untuk mengirim email reset kata sandi
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

// Rute untuk menampilkan formulir reset kata sandi
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

// Rute untuk proses reset kata sandi
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');

Route::get('/data_menu', [MenuController::class, 'index'])->name('data_menu');
Route::get('/tambah_data_menu', [MenuController::class,'create'])->name('tambah_data_menu');
Route::get('/edit_data_menu/{id}', [MenuController::class,'edit'])->name('edit_data_menu');
Route::post('/tambah_data_menu', [MenuController::class,'store'])->name('tambah_data_menu');
Route::post('/hapus_data_menu/{id}', [MenuController::class,'destroy'])->name('hapus_data_menu');
Route::post('/update_data_menu/{id}', [MenuController::class,'update']);
// Route::get('/admin',[MenuController::class,'index'])->name('admin');
