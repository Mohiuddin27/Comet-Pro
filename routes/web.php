<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminPageController;


Route::get('/admin-login',[AdminAuthController::class,'ShowLoginPage'])->name('admin.login.page');
Route::post('/admin-login',[AdminAuthController::class,'login'])->name('admin.login');

Route::get('/admin-dashboard',[AdminPageController::class,'ShowDashboard'])->name('admin.dashboard.page');