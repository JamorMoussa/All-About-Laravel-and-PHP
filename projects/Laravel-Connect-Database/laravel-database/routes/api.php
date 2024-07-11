<?php

use App\Http\Controllers\TodoContoller;
use Illuminate\Routing\Route;

Route::post('/add', [TodoContoller::class, 'add_todo']);

?>

