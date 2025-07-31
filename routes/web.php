<?php

use App\Http\Controllers\EntranceController;
use App\Http\Controllers\BookListController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\LibraryController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/books',[BookController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('books', BookController::class);
Route::resource('bookslist', BookListController::class);
Route::resource('entrances', EntranceController::class);

