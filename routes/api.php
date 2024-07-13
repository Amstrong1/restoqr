<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(RestoController::class)->group(function () {
    Route::get('get_menu_and_restaurant_info/{tableId}','get_menu_and_restaurant_info');
   
});
