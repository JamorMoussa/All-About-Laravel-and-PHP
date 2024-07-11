<?php

namespace App\Http\Controllers;

use App\Models\JsonDataModel;
use Tigo\Recommendation\Recommend;

class MovieRecommenderController extends Controller
{
    public function recommend($user_id)
    {
        // Fetch all ratings from the database
        $ratings = JsonDataModel::all();

        // Transform the data
        $table = [];
        foreach ($ratings as $rating) {
            $table[] = [
                'product_id' => $rating->movieId,
                'score' => $rating->rating,
                'user_id' => $rating->userId,
            ];
        }

        $client = new Recommend();
        $recommendations = $client->ranking($table, $user_id);


        $recommendedMovieIds = array_keys($recommendations);
        
        
        $movies = JsonDataModel::whereIn('movieId', $recommendedMovieIds)->get();

        $result = [];
        foreach ($movies as $movie) {
            $result[] = [
                'movieId' => $movie->movieId,
                'title' => $movie->title,
                'rating' => $recommendations[$movie->movieId],
            ];
        }

        $uniqueResult = array_values(array_unique($result, SORT_REGULAR));

        usort($uniqueResult, function($a, $b) {
            return $b['rating'] - $a['rating'];
        });

        return response()->json($uniqueResult);
    }
}
