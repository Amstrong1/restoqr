<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('/migrate', function () {
    Artisan::call('migrate');
    dd('migrated!');
});
Route::get('/reboot', function () {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    dd('All done!');
});