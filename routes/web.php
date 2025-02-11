<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CategoryController::class,'index']);
Route::get('/category-create',[CategoryController::class,'create']);
Route::get('/category-trash',[CategoryController::class,'trash']);

Route::post('/category-store',[CategoryController::class,'store']);

Route::get('/category-edit/{id}',[CategoryController::class,'edit']);
Route::put('/category-update/{id}',[CategoryController::class,'update']);

Route::get('/category-delete/{id}',[CategoryController::class,'destroy']);
