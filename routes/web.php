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

Route::get('/portfolio')->name('portfolio');
Route::get('/portfolio/{portfolio}')->name('portfolio.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/portfolio/create')->name('portfolio.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/portfolio')->name('portfolio.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/portfolio/{portfolio}/edit')->name('portfolio.edit');
Route::middleware(['auth:sanctum', 'verified'])->put('/portfolio/{portfolio}')->name('portfolio.update');
Route::middleware(['auth:sanctum', 'verified'])->delete('/portfolio/{portfolio}')->name('portfolio.delete');