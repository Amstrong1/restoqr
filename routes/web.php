<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\VariationController;




Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/soon', function () {
    return view('soon');
})->name('soon');

Route::middleware('auth')->group(function () {
    Route::resource('article', ArticleController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('menu', MenuController::class);
    Route::get('order/pending', [OrderController::class, 'pending'])->name('order.pending');
    Route::get('order/in-progress', [OrderController::class, 'inProgress'])->name('order.progress');
    Route::resource('order', OrderController::class);
    Route::resource('place', PlaceController::class);
    Route::resource('structure', StructureController::class);
    Route::resource('variation', VariationController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('quiz', QuizController::class);

    Route::put('/social', [SocialController::class, 'update'])->name('social.update');
    Route::put('/banner', [BannerController::class, 'update'])->name('banner.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/site/{any}', function () {
    return view('site');
})->where('any', '.*');

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
