<?php

use App\Http\Controllers\Admin\District\DistrictController;
use Illuminate\Support\Facades\Route;

Route::prefix('district')->name('district.')->group(function () {

    Route::get('index', [DistrictController::class, 'index'])->name('index');
    Route::get('create', [DistrictController::class, 'create'])->name('create');
    Route::post('store', [DistrictController::class, 'store'])->name('store');
    Route::get('edit/{id}/{slug}', [DistrictController::class, 'edit'])->name('edit');
    Route::post('update', [DistrictController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [DistrictController::class, 'destroy'])->name('destroy');

});
