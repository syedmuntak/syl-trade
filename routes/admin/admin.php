<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    include_once 'district/district.php';
    include_once 'division/division.php';
    include_once 'upazila/upazila.php';
    include_once 'gender/gender.php';
    include_once 'religion/religion.php';
    include_once 'dashboard/dashboard.php';
    include_once 'category/category.php';
    include_once 'user/user.php';
    include_once 'booking/booking.php';
});
