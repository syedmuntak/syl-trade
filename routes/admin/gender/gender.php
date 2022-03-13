<?php

use App\Http\Controllers\Admin\Gender\GenderController;
use Illuminate\Support\Facades\Route;

Route::prefix('gender')->name('gender.')->group(function () {

    Route::get('index', [GenderController::class, 'index'])->name('index');
    Route::get('create', [GenderController::class, 'create'])->name('create');
    Route::post('store', [GenderController::class, 'store'])->name('store');
    Route::get('edit/{id}/{slug}', [GenderController::class, 'edit'])->name('edit');
    Route::post('update', [GenderController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [GenderController::class, 'destroy'])->name('destroy');

});
