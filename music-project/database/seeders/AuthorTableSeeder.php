<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<3;$i++){
            Author::create([
                'ten_tgia' => $faker->name,
                'hinh_tgia' => $faker->imageUrl(200, 200, 'people', true),
            ]);
        }
    }
}
