<?php

use App\Http\Controllers\Employee\Booking\BookingController;
use Illuminate\Support\Facades\Route;

Route::prefix('bookings')->name('bookings.')->group(function () {

    Route::get('',[BookingController::class,'index'])->name('index');
    Route::get('{id}/status-update',[BookingController::class,'change_status'])->name('change.status');

});
