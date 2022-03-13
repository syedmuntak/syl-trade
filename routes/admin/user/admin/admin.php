<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\AdminController;

Route::prefix('admins')->name('admins.')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::get('create', [AdminController::class, 'create'])->name('create');
    Route::post('store', [AdminController::class, 'store'])->name('store');
    Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('update', [AdminController::class, 'update'])->name('update');
    Route::get('{id}', [AdminController::class, 'destroy'])->name('destroy');
});
