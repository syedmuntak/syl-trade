<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\EmployeeController;

Route::prefix('employees')->name('employees.')->group(function () {
    Route::get('', [EmployeeController::class, 'index'])->name('index');
});
