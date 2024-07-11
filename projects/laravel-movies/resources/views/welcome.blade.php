<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use App\Models\JsonDataModel;
use Tigo\Recommendation\Recommend;

    $ratings = JsonDataModel::all();

    $table = [];
    foreach ($ratings as $rating) {
        $table[] = [
            'product_id' => $rating->movieId,
            'score' => $rating->rating,
            'user_id' => $rating->userId,
        ];
    }

    $user_id = 5; // The user for whom you want recommendations

    $client = new Recommend();
    $recommendations = $client->ranking($table, $user_id);

    print_r($recommendations);


    ?>
</body>
</html>