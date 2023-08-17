<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::resource('/books', BookController::class);

Route::get('/about', function() {
    return view('site.about');
})->name('books.about');

Route::get('/', function () {
    return view('master');
});
