<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<3;$i++){
            Article::create([
                'tieude' => $faker->sentence(5),
                'ten_bhat' => $faker->name,
                'ma_tloai' => $faker->numberBetween(1, 3),
                'tomtat' => $faker->paragraph,
                'noidung' => $faker->paragraphs(3, true),
                'ma_tgia' => $faker->numberBetween(1, 3),
                'ngayviet' => $faker->dateTimeThisYear,
                'hinhanh' => $faker->imageUrl(200, 200, 'people', true),
            ]);
        }
    }
}
