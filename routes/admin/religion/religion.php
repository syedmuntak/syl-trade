<?php

use App\Http\Controllers\Admin\Religion\ReligionController;
use Illuminate\Support\Facades\Route;

Route::prefix('religion')->name('religion.')->group(function () {

    Route::get('index', [ReligionController::class, 'index'])->name('index');
    Route::get('create', [ReligionController::class, 'create'])->name('create');
    Route::post('store', [ReligionController::class, 'store'])->name('store');
    Route::get('edit/{id}/{slug}', [ReligionController::class, 'edit'])->name('edit');
    Route::post('update', [ReligionController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [ReligionController::class, 'destroy'])->name('destroy');

});
