<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Redirect Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect(route('home'));
    });

    Route::get('/home', function () {
        return redirect(route('home'));
    });
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');




// User Routes
require __DIR__ . '/web/user/user.php';
