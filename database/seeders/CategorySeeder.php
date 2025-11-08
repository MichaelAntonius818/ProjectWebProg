<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Interactive Multimedia', 'description' => 'Focus on UX, UI, and user-centered design.'],
            ['name' => 'Software Engineering', 'description' => 'Learn agile methods and software design patterns.']
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
