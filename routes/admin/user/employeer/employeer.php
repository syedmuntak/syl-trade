<?php

use App\Http\Controllers\Admin\Users\EmployeerController;
use Illuminate\Support\Facades\Route;

Route::prefix('employeers')->name('employeers.')->group(function () {
    Route::get('', [EmployeerController::class, 'index'])->name('index');
});
