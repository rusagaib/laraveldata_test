<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::resource('/', ProdukController::class);

Route::get('/top10produk', [ProdukController::class, 'top_produk']);
Route::get('/top10customer', [ProdukController::class, 'top_customer']);
Route::get('/top10agent', [ProdukController::class, 'top_agent']);
