<?php

use App\Http\Controllers\User\Contact\ContactController;
use Illuminate\Support\Facades\Route;

Route::prefix('contact')->name('contact.')->group(function () {

    Route::get('', [ContactController::class, 'index'])->name('index');

});