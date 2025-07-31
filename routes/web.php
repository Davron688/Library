<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/books',[BookController::class, 'index']);

