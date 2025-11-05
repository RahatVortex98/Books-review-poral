<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US'); // Ensures English readable text
        return [
           'book_id' => Book::factory(),
            'review'  => $faker->realText(20),  // readable text
            'rating'  => $faker->numberBetween(1,5),
             // Random created_at within last 6 months
            'created_at' => Carbon::now()->subMonths(rand(0,6))->subDays(rand(0,30)),
            'updated_at' => now(),
        ];
    }
    public function good(){
        return $this->state(function(array $attributes){
            return [
                'rating'=>fake()->numberBetween(4,5),
            ];
        });
    }
    public function average(){
        return $this->state(function(array $attributes){
            return [
                'rating'=>fake()->numberBetween(2,3),
            ];
        });
    }
    public function bad(){
        return $this->state(function(array $attributes){
            return [
                'rating'=>fake()->numberBetween(1,2),
            ];
        });
    }
}
