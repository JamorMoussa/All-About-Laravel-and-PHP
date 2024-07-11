<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsonDataModel extends Model
{
    use HasFactory;

    public $table = "movies_json";

    public $fillable = [
        "movieId", 
        "userId", 
        "title",
        "rating"
    ];
}
