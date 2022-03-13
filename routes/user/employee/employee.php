<?php

use App\Http\Controllers\User\Employee\EmployeeProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('employee')->name('employee.')->group(function () {

    Route::get('profile/{id}/{slug}', [EmployeeProfileController::class, 'employee_profile'])->name('profile');

});
