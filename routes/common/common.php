<?php

use Illuminate\Support\Facades\Route;

Route::prefix('common')->name('common.')->group(function () {
    include_once 'profile/profile.php';
});
