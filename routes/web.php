<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', [ContactController::class, 'store']);
Route::POST('/contact', [ContactController::class, 'store']);

