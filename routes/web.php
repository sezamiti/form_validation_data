<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts/app');
})->name('home');

Route::get('/register', function () {
    return view('layouts/app');
});
//Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);





//Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->name('register');
//

Route::view('/message', 'message')->name('message');

