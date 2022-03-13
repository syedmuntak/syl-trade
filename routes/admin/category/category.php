<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('category')->name('category.')->group(function () {

    Route::get('index', [CategoryController::class, 'index'])->name('index');
    Route::get('create', [CategoryController::class, 'create'])->name('create');
    Route::post('store', [CategoryController::class, 'store'])->name('store');
    Route::get('edit/{id}/{slug}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('update', [CategoryController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');

});
