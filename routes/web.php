<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TodoTaskController;
use App\Http\Controllers\PhotoController;
use Illuminate\Http\Controllers\Delete;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TodoTaskController::class, 'index']);

Route::post('/',[ TodoTaskController::class, 'store']);
Route::delete('/deleteTask/{id}',[ TodoTaskController::class, 'deleteTask']);
// Route::post('/', function () {
//     return 'ini untuk post';
// });
