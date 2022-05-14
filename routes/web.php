<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthorsController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthorsController::class)->group(function () {
    Route::get('authors', 'index');
    Route::get('authors/{id}', 'show');
    Route::post('authors', 'store');
    Route::put('authors/{id}', 'update');
    Route::delete('authors/{id}', 'destroy');
    Route::get('authors/search/{query}', 'search');
});
