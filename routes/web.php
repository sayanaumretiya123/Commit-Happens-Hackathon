<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Senior\DashboardController as SeniorDashboard;
use App\Http\Controllers\Fresher\DashboardController as FresherDashboard;

// Redirect to dashboard based on role
Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->isSenior()) {
            return redirect()->route('senior.dashboard');
        } elseif (auth()->user()->isFresher()) {
            return redirect()->route('fresher.dashboard');
        }
    }
    return redirect()->route('login');
})->name('dashboard');

// Admin Routes (Protected by role middleware)
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
});

// Senior Routes (Protected by role middleware)
Route::middleware(['auth', 'role:senior'])->prefix('senior')->name('senior.')->group(function () {
    Route::get('/dashboard', [SeniorDashboard::class, 'index'])->name('dashboard');
});

// Fresher Routes (Protected by role middleware)
Route::middleware(['auth', 'role:fresher'])->prefix('fresher')->name('fresher.')->group(function () {
    Route::get('/dashboard', [FresherDashboard::class, 'index'])->name('dashboard');
});

// Authentication Routes (Placeholder - to be replaced by Laravel Breeze)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
})->name('logout');
