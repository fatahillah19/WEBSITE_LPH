<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController; // Saya rapikan posisinya di atas
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// --- PERBAIKAN DI SINI ---
// Tambahkan 'role:client' agar Admin tidak bisa masuk ke dashboard Client
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:client'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk halaman Tentang Kami
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');

// Route untuk Admin
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

require __DIR__.'/auth.php';