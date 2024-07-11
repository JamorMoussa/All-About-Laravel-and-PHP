<?php

use App\Http\Controllers\TodoContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', function(){
    return response()->json(["token" => csrf_token()]);
});

Route::get('/show', [TodoContoller::class, 'show']);
Route::post('/add', [TodoContoller::class, 'add_task']);
