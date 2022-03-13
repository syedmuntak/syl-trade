<?php

use App\Http\Controllers\Admin\Division\DivisionController;
use Illuminate\Support\Facades\Route;

Route::prefix('division')->name('division.')->group(function () {

    Route::get('index', [DivisionController::class, 'index'])->name('index');
    Route::get('create', [DivisionController::class, 'create'])->name('create');
    Route::post('store', [DivisionController::class, 'store'])->name('store');
    Route::get('edit/{id}/{slug}', [DivisionController::class, 'edit'])->name('edit');
    Route::post('update', [DivisionController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [DivisionController::class, 'destroy'])->name('destroy');

});
