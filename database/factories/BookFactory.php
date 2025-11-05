<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // ✅ Correct variable name: FakerFactory (not FakeFactory)
        $faker = FakerFactory::create('en_US'); // Ensures English readable text

        return [
            // ✅ realText() generates readable English text
            // 3 is too short — use 20 or 30 for more natural phrases
            "title" => $faker->realText(10),
            "author" => $faker->name(),
        ];
    }
}
