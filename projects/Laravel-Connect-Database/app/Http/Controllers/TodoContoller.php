<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Queue\Attributes\WithoutRelations;

class TodoContoller extends Controller
{
    public function show(){
        return Todo::all();
    }

    public function add_todo(Request $request){
        
        $todo = Todo::create([
            'title' => $request->input("title"), 
            'description' => $request->input("description"), 
        ]);
        return $request;


        // return response()->json($todo, 201);
    }
}
