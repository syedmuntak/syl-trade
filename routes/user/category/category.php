<?php

use App\Http\Controllers\User\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('category')->name('category.')->group(function () {

    Route::get('', [CategoryController::class, 'index'])->name('index');
    Route::get('category-wise-profile/{id}/{slug}', [CategoryController::class, 'category_wise_profile'])->name('profile');

    Route::get('employee-search/', [CategoryController::class, 'search_employee'])->name('employee.search');

});
