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
    return view('dashboard');
});

//routes to dashboard
Route::get('/dashboard.blade.php', function () {
    return view('dashboard');
});

//routes to ekspor
Route::get('/ekspor.blade.php', function () {
    return view('ekspor');
});

//routes to harga
Route::get('/harga.blade.php', function () {
    return view('harga');
});
