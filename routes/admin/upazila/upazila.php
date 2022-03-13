<?php
use App\Http\Controllers\Admin\Upazila\upazilaController;
use Illuminate\Support\Facades\Route;

Route::prefix('upazila')->name('upazila.')->group(function () {

    Route::get('index', [upazilaController::class, 'index'])->name('index');
    Route::get('create', [upazilaController::class, 'create'])->name('create');
    Route::post('store', [upazilaController::class, 'store'])->name('store');
    Route::get('edit/{id}/{slug}', [upazilaController::class, 'edit'])->name('edit');
    Route::post('update', [upazilaController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [upazilaController::class, 'destroy'])->name('destroy');
});
