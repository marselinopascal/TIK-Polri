<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController; 
use App\Http\Controllers\Admin\NewsController as AdminNewsController; // <-- Ubah/tambahkan ini
use App\Http\Controllers\Admin\ConsultationController as AdminConsultationController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;

// <--- BARIS INI YANG BARU DAN PENTING

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
Route::get('/berita/{news}', [PageController::class, 'showNews'])->name('news.show');



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
     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Menggunakan Resource Controller untuk Berita
     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // CRUD penuh untuk Berita
    Route::resource('news', AdminNewsController::class);
    Route::resource('news', AdminNewsController::class);
     Route::resource('news', AdminNewsController::class);
        Route::get('consultations/{consultation}', [AdminConsultationController::class, 'show'])->name('consultations.show');
    Route::put('consultations/{consultation}', [AdminConsultationController::class, 'update'])->name('consultations.update');
    Route::get('appointments/{appointment}', [AdminAppointmentController::class, 'show'])->name('appointments.show');
    Route::put('appointments/{appointment}', [AdminAppointmentController::class, 'update'])->name('appointments.update');

});