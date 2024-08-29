<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('register', 'Auth.register')->name('register');
Route::post('/register', [UserController::class, 'register']);

// Admin dashboard
Route::middleware(['role:admin'])->group(function(){
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Collector dashboard
Route::middleware(['role:collector'])->group(function(){
Route::get('/collector/dashboard', [EmployeeController::class, 'index'])->name('collector.dashboard');
});

// Client dashboard
Route::middleware(['role:client'])->group(function(){
Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
});

