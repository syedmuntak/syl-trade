<?php

use App\Http\Controllers\Common\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('profile')->name('profile.')->group(function () {

    Route::get('setting',[ProfileController::class,'index'])->name('index');
    Route::post('update',[ProfileController::class,'profile_update'])->name('update');
    Route::post('password/change',[ProfileController::class,'password_change'])->name('change.password');
    Route::post('employee-info/update',[ProfileController::class,'employee_info_update'])->name('employee.info.update');
    Route::post('employeer-info/update',[ProfileController::class,'employeer_info_update'])->name('employeer.info.update');

});
