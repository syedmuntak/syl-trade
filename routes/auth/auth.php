<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\RegisterController;

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth-districts', [RegisterController::class, 'districts'])->name('auth.districts');

Route::get('auth-upazilas', [RegisterController::class, 'upazilas'])->name('auth.upazilas');
Route::post('auth-register', [RegisterController::class, 'register'])->name('auth.register');
