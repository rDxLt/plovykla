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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'soon'])->name('soon');
Route::post('/subscribe', [\App\Http\Controllers\HomeController::class, 'subscribe'])->name('subscribe');

//Route::get('/', function () {
//    return view('welcome');
//});
