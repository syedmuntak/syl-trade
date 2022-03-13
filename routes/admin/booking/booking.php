<?php

use App\Http\Controllers\Admin\Booking\BookingController;
use Illuminate\Support\Facades\Route;

Route::prefix('bookings')->name('bookings.')->group(function () {
    Route::get('', [BookingController::class, 'index'])->name('index');
});
