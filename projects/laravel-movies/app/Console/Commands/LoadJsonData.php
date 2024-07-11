<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\JsonDataModel;
use Illuminate\Support\Facades\File;

class LoadJsonData extends Command
{
    protected $signature = 'load:json {file}';
    protected $description = 'Load JSON data and save it to the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $filePath = $this->argument('file');

        if (!File::exists($filePath)) {
            $this->error("File does not exist.");
            return 1;
        }

        $jsonData = File::get($filePath);
        $data = json_decode($jsonData, true);

        if ($data === null) {
            $this->error("Invalid JSON file.");
            return 1;
        }

        foreach ($data as $item) {
            JsonDataModel::create([
                'movieId' => $item['movieId'],
                'userId' => $item['userId'],
                'title' => $item['title'],
                'rating' => $item['rating']
            ]);
        }

        $this->info("Data loaded successfully.");
        return 0;
    }
}
