<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/orders', [OrderController::class, 'get_orders']);
Route::get('/order/{order}', [OrderController::class, 'get_order']);
Route::get('/order/{order}/detail', [OrderController::class, 'get_order_with_details']);
