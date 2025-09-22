<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController; // <--- BARIS INI YANG BARU DAN PENTING

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// RUTE HALAMAN PUBLIK
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/berita', [PageController::class, 'news'])->name('news');
Route::get('/konsultasi-tte', [PageController::class, 'consultation'])->name('consultation');
Route::post('/konsultasi-tte', [PageController::class, 'storeConsultation'])->name('consultation.store');


// RUTE UNTUK TAMU (HANYA JIKA BELUM LOGIN)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});


// RUTE UNTUK PENGGUNA YANG SUDAH LOGIN
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/janji-temu', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/janji-temu', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::delete('/janji-temu/{appointment}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');
});


// RUTE KHUSUS ADMIN (MEMERLUKAN LOGIN DAN ROLE ADMIN)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Rute untuk menangani form berita
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
});