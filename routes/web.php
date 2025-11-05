<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return redirect()->route('books.index');
});

Route::get('/books/latest', [BookController::class, 'indexLatest'])->name('books.latest');
Route::get('/books/popular_last_month', [BookController::class, 'indexPopularLastMonth'])->name('books.popular');
Route::get('/books/popular_last_6_months', [BookController::class, 'indexPopularLast6Month'])->name('books.6popular');
Route::get('/books/highest_rated_last_month', [BookController::class, 'indexHighestRatedLastMonth'])->name('books.higestRated');
Route::get('/books/highest_rated_6_last_month', [BookController::class, 'indexHighestRated6LastMonth'])->name('books.higest6Rated');


Route::resource('books',BookController::class);



