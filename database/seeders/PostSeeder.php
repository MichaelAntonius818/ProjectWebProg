<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Writer;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $categories = Category::all();
        $writers = Writer::all();

        foreach ($categories as $category) {
            foreach (range(1, 5) as $i) {
                Post::create([
                    'title' => $faker->sentence,
                    'content' => $faker->paragraph(10),
                    'category_id' => $category->id,
                    'writer_id' => $writers->random()->id,
                ]);
            }
        }
    }
}
