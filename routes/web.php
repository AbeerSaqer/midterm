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
    return view('create_product');
});

//Route::get('/',[ProductController::class,'index']);
Route::post('/store',[ProductController::class,'store']);
Route::get('/create',[ProductController::class,'create']);
Route::delete('/delete/{id}',[ProductController::class,'delete']);
Route::post('/edit/{id}',[ProductController::class,'edit']);

