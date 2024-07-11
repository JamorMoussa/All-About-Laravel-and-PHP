<?php

use App\Http\Controllers\MovieRecommenderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/recommend/{userId}', [MovieRecommenderController::class, 'recommend']);