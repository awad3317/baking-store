<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/shop', function () {
    return view('web.shop.index');
})->name('shop');

Route::get('/recipes', function () {
    return view('web.recipes.index');
})->name('recipes');

Route::get('/recipe-details', function () {
    return view('web.recipes.show'); // Note: Controller usually handles this, but updating this closure just in case it's used
})->name('recipe.details');

Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

Route::view('/policy', 'web.return-policy')->name('policy');

Route::view('/terms', 'web.terms')->name('terms');
