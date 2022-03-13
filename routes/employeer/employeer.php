<?php

use Illuminate\Support\Facades\Route;

Route::prefix('employeer')->name('employeer.')->group(function () {
    include_once 'dashboard/dashboard.php';
    include_once 'booking/booking.php';

});
