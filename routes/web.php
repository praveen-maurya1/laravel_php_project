<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.base');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/gallery', function () {
    return view('gallery');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', [UserController::class, 'viewContact']);

Route::post('/contact-submit', [UserController::class, 'addUser']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return 'User Dashboard';
    });
});
