<?php

use Illuminate\Support\Facades\Route;

Route::prefix('users')->name('users.')->group(function () {
    require_once 'admin/admin.php';
    require_once 'employee/employee.php';
    require_once 'employeer/employeer.php';
});
