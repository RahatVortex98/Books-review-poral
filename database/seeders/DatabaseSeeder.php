<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 25 books
        Book::factory(25)->create();

        // Create 5–10 random reviews per book
        Book::all()->each(function($book) {
            Review::factory(rand(5, 10))->create([
                'book_id' => $book->id,
            ]);
        });
    }
}
