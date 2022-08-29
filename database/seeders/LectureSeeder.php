<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lecture;
use Illuminate\Support\Str;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Lecture::query()->create([
            'title'=>Str::random(10),
            'text'=>Str::random(50),
            'picture_path'=>'images/landscape.jpg'
        ]);
    }
}
