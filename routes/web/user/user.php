<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('users', 'index')->name('users.index');
        Route::post('users/store', 'store')->name('users.store');
        Route::get('users/edit', 'edit')->name('users.edit');
        Route::post('users/update', 'update')->name('users.update');
        Route::post('users/delete', 'delete')->name('users.delete');
    });
});
