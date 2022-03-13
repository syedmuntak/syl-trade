<?php

use Illuminate\Support\Facades\Route;

Route::prefix('employee')->name('employee.')->group(function () {
    include_once 'dashboard/dashboard.php';
    include_once 'booking/booking.php';
});
