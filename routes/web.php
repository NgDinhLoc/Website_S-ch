<?php

use App\Http\Controllers\Front;
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

Route::get('/', [Front\ShopController::class, 'index']);
Route::get('/about', [Front\HomeController::class, 'about']);
Route::get('/author', [Front\HomeController::class, 'author']);
Route::get('/book', [Front\HomeController::class, 'book']);
Route::get('/contact', [Front\HomeController::class, 'contact']);
Route::get('/shop/product/{id}', [Front\ShopController::class, 'show']);
