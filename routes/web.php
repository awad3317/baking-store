<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| 1. Public Web Routes (مجموعة الموقع العام)
|--------------------------------------------------------------------------
| هذه الروابط متاحة للجميع (زوار ومستخدمين) ولا تتطلب تسجيل دخول.
|
*/

Route::group([], function () {
    
    // الصفحة الرئيسية
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // قسم المتجر
    Route::get('/shop', function () {
        return view('web.shop.index');
    })->name('shop'); 

    // قسم الوصفات
    Route::get('/recipes', function () {
        return view('web.recipes.index');
    })->name('recipes');

    Route::get('/recipe-details', function () {
        return view('web.recipes.show');
    })->name('recipe.details');

    // صفحات المعلومات (تواصل معنا، الشروط، السياسة)
    Route::get('/contact', function () {
        return view('web.contact');
    })->name('contact');
    
    Route::view('/policy', 'web.return-policy')->name('policy');
    Route::view('/terms', 'web.terms')->name('terms');

    // السلة (متاحة للجميع عادة)
    // Route::get('/cart', function () {
    //     return view('web.partials.cart-drawer'); // أو web.cart.index حسب ترتيبك
    // })->name('cart.index');


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
