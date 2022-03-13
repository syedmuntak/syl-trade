<?php

use App\Http\Controllers\User\IndexController;
use Illuminate\Support\Facades\Route;

Route::prefix('')->name('home.')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('payment', [IndexController::class, 'payment'])->name('payment');
    Route::Post('stripe', [IndexController::class, 'stripe'])->name('stripe');

    Route::get('bkash/{id}', [IndexController::class, 'bkash'])->name('bkash');
    Route::Post('bkashstore', [IndexController::class, 'bkashstore'])->name('bkashstore');

});
