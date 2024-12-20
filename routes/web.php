<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});

Route::get('/app', [PageController::class, 'index_app'])->name('app');
Route::get('/create', [PageController::class, 'index_create'])->name('create');
Route::get('/subscription', [PageController::class, 'index_subs'])->name('subscription');
Route::get('/add_backrooms', [PageController::class, 'index_add_backrooms'])->name('add_backrooms');