
<?php

use Illuminate\Support\Facades\Route;

include_once 'home/home.php';

Route::prefix('user')->name('user.')->group(function () {
    include_once 'category/category.php';
    include_once 'contact/contact.php';
    include_once 'employee/employee.php';
    include_once 'employee/hire.php';
});
