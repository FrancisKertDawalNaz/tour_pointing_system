<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

// Handle login request
Route::post('/admin/login', [AdminController::class, 'adminlogin'])->name('admin.login.submit');
// Admin dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');