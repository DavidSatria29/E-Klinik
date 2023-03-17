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

Route::get('/klinik', function () {
    return view ('eklinik');
});

Route::get('/login', function () {
    return view ('log');
});

Route::get('/', function () {
    return view ('welcome');
});

