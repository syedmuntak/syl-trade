<?php
use App\Http\Controllers\User\Hire\HireController;
use Illuminate\Support\Facades\Route;

Route::prefix('hire')->name('hire.')->middleware('auth')->group(function () {
    Route::get('{id}/{slug}',[HireController::class,'index'])->name('index');
    Route::post('store', [HireController::class, 'store'])->name('store');
});
