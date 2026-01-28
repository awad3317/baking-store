<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/recipes', function () {
    return view('recipes');
})->name('recipes');

Route::get('/recipe-details', function () {
    return view('recipe-details');
})->name('recipe.details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::view('/return-policy', 'return-policy')->name('return-policy');

Route::view('/terms', 'terms')->name('terms');
