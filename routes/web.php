<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Handle login request
Route::post('/admin/login', [AdminController::class, 'adminlogin'])->name('admin.login.submit');
// Admin dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/student', [AdminController::class, 'student'])->name('student');
Route::get('/payment', [AdminController::class, 'payment'])->name('payment');

Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');