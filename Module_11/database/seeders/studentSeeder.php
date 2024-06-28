<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::create([

        //     "name"=> "Asif Hossain",
        //     "email"=> "asif@gmail.com",
        // ]);

        // $students= collect(
        // [
        //     [
        //         "name"=> "Nafiz",
        //         "email"=> "nafiz@gmail.com",
        //     ],
        //     [
        //         "name"=> "Anamul",
        //         "email"=> "anamul@gmail.com",
        //     ],
        //     [
        //         "name"=> "Jhon",
        //         "email"=> "jhon@gmail.com",
        //     ]
        // ]

        //     );

        //     $students->each(function ($student) {
        //         student::insert($student);
        //     });



        $json = File::get(path:'database/json/student.json');
        $students = collect(json_decode($json));

        $students->each(function ($student) {
            student::create([
                "name"=> $student->name,
                "email"=> $student->email,
                "age"=> $student->age,
                "city"=> $student->city,
            ]);
                });


        
    }
}
