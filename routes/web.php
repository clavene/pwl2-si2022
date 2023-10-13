<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('login', function () {
    return view('auth.user.login');
})->name('login');
Route::get('dashboard', function () {
    return view('user.dashboard');
})->name('dashboard');
Route::get('checkout/success', function () {
    return view('checkout.success');
});
Route::get('checkout/{camp}', function () {
    return view('checkout.create');
});
