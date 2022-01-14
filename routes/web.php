<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\VirtulController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Admin\Artikel_AdminController;
use App\Http\Controllers\Admin\VirtualController as AdminVirtualController;
use App\Http\Controllers\Admin\WisataController as AdminWisataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VirtualController;
use App\Http\Controllers\WisataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Home user
Route::get('/', [HomeController::class, 'index'])->name('home'); //tampilan awal
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/virtual_tour', [VirtulController::class, 'index'])->name('virtual');
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('readmore');
Route::get('/profile_dat', [ProfileController::class, 'dat'])->name('profile_dat');
Route::get('/profile_tb', [ProfileController::class, 'tb'])->name('profile_tb');
Route::get('/profile_kmd', [ProfileController::class, 'kmd'])->name('profile_kmd');

// Testimoni
Route::get('testimoni', [TestimoniController::class, 'index']);
Route::post('feedback', [TestimoniController::class, 'store']);

// login and register
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register_login', [LoginController::class, 'register_login'])->name('register_login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/signin', [LoginController::class, 'signin'])->name('signin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    //link virtual get started
    Route::get('/virtual_tour', [VirtulController::class, 'index'])->name('virtual');
});
/// arahkan ke link ini ketika user klik "login with google"
Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
/// siapkan route untuk menampung callback dari google
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

/// arahkan ke link ini ketika user klik "login with google"
Route::get('auth/facebook', [LoginController::class, 'facebookRedirect']);
/// siapkan route untuk menampung callback dari google
Route::get('auth/facebook/callback', [LoginController::class, 'loginWithFacebook']);
// Admin
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //virtual menu
    Route::get('virtual', [AdminVirtualController::class, 'index']);
    Route::post('virtualcreate', [AdminVirtualController::class, 'store']);
    Route::get('virtual_edit/{id}', [AdminVirtualController::class, 'show']);
    Route::delete('virtual_hapus/{id}', [AdminVirtualController::class, 'destroy']);
    // wisata menu
    Route::get('wisata', [AdminWisataController::class, 'index']);
    Route::post('wisatacreate', [AdminWisataController::class, 'store']);
    Route::get('wisata_edit/{id}', [AdminWisataController::class, 'show']);
    Route::delete('wisata_hapus/{id}', [AdminWisataController::class, 'destroy']);
    //artikels
    Route::get('artikels', [Artikel_AdminController::class, 'index']);
    Route::post('artikelscreate', [Artikel_AdminController::class, 'store']);
    Route::get('artikels_edit/{id}', [Artikel_AdminController::class, 'show']);
    Route::delete('artikels_hapus/{id}', [Artikel_AdminController::class, 'destroy']);
    //testimoni
    Route::get('testimoni_admin', [TestimoniController::class, 'testi_admin']);
    Route::delete('testimoni_hapus/{id}', [TestimoniController::class, 'destroy']);
});
