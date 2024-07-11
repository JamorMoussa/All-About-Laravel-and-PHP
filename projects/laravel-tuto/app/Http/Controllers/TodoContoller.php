<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoContoller extends Controller
{
    public function show() {
        return Todo::all();
    }

    public function add_task(Request $request){

        $task = Todo::create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
        ]);

        return $request;
    }
}