<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $i) {
            Writer::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'bio' => $faker->paragraph(3),
            ]);
        }
    }
}
