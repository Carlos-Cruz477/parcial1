<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/books', [BookController::class, 'index']);
    Route::post('/loans', [LoanController::class, 'store']);


});
