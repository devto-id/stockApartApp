<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth:sales')->group(function () {
    Route::get('/sales/dashboard', [SalesController::class, 'dashboard'])->name('sales.dashboard');
    Route::get('/sales/apartments', [SalesController::class, 'listApartments'])->name('sales.apartments');
    Route::post('/sales/book', [SalesController::class, 'bookApartment'])->name('sales.book');
});

Route::middleware('auth:manager')->group(function () {
    Route::get('/manager/dashboard', [ManagerController::class, 'dashboard'])->name('manager.dashboard');
    Route::get('/manager/approvals', [ManagerController::class, 'listApprovals'])->name('manager.approvals');
    Route::post('/manager/approve', [ManagerController::class, 'approveBooking'])->name('manager.approve');
});

