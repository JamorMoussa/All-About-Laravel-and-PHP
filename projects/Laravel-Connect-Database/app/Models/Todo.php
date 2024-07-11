<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public $table = "todo";
    public $fillable = [
                    "title",
                    "description"
                ];
}
