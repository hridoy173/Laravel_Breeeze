<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth')->group(function(){

    Route::get('/product',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product',[ProductController::class,'destroy'])->name('product.destroy');

});