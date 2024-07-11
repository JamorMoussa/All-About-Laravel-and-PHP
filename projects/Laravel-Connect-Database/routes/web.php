<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoContoller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/csrf-token', function() {
    return response()->json(['csrf_token' => csrf_token()]);
});

Route::get('/show', [TodoContoller::class, 'show']);
Route::post('/add', [TodoContoller::class, 'add_todo']);