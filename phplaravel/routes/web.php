<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/prepaid', function () {
    return view('prepaid');
})->name('prepaid');

Route::post('/submit','App\Http\Controllers\Submit@save');

Route::middleware(['auth:sanctum', 'verified'])->get('/product', function () {
    return view('product');
})->name('product');

Route::post('/submitt','App\Http\Controllers\Submit@simpan');

Route::get('/history', 'App\Http\Controllers\View@gabung');

Route::get('/success', 'App\Http\Controllers\View@liatin');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/success', function () {
    return view('success');
})->name('success');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/payorder', function () {
    return view('payorder');
})->name('payorder');