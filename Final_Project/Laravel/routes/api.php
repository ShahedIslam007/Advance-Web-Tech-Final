<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products/list',[ProductController::class,'APIList']);
Route::post('/products/list',[ProductController::class,'APIPost']);
Route::put('/updateProduct/{id?}', [ProductController::class, 'updateProduct']);
Route::delete('/deleteProduct/{id?}', [ProductController::class, 'deleteProduct']);


Route::get('/registration/{id?}', [CustomerController::class, 'ShowCustomer']);
Route::post('/registercustomer', [CustomerController::class, 'addCustomer']);
Route::put('/updatecustomer/{id?}', [CustomerController::class, 'updateCustomer']);
Route::delete('/deleteCustomer/{id?}', [CustomerController::class, 'deleteCustomer']);

