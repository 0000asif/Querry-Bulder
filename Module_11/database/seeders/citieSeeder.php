<?php

namespace Database\Seeders;

use App\Models\citie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class citieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = File::get(path: 'database/json/city.json');
        $cities = collect(json_decode($json));

        $cities->each(function ($citie){
            citie:: create([
                "city_name" => $citie->city_name,
            ]);
        });

    }
}
