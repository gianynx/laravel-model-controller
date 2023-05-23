<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index'])->name('pages.home');

Route::get('/discover', function () {
    return view('pages.discover');
})->name('pages.discover');

Route::get('/rates', function () {
    return view('pages.rates');
})->name('pages.rates');

Route::get('/programmation', function () {
    return view('pages.programmation');
})->name('pages.programmation');

Route::get('/location', function () {
    return view('pages.location');
})->name('pages.location');

Route::get('/movies/{id}', [BookController::class, 'show'])->name('pages.show');
