<?php

namespace Database\Seeders;

use App\Models\review;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        review::create([
            'nama' => 'John Doe',
            'email' => 'john.doe@example.com',
            'review' => 'The hotel provided an excellent experience during my stay. The rooms were spacious, the bed was extremely comfortable, and the amenities were top-notch. I particularly loved the pool area, which offered a relaxing atmosphere. Highly recommended for anyone looking for a luxury getaway.',
            'rating' => 10,
            'created_at' => now()->subDays(5),
            'updated_at' => now(),
        ]);

        review::create([
            'nama' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'review' => 'I was really impressed with the customer service at this hotel. The staff went above and beyond to make sure all my needs were met. The food served at the restaurant was absolutely delicious, and the location was perfect for sightseeing. Would definitely stay here again!',
            'rating' => 9,
            'created_at' => now()->subDays(10),
            'updated_at' => now(),
        ]);

        review::create([
            'nama' => 'Robert Brown',
            'email' => 'robert.brown@example.com',
            'review' => 'The hotel offers a very clean and well-maintained environment. The housekeeping staff did an excellent job keeping the room spotless every day. The free Wi-Fi was fast, and the business facilities were very convenient for my work trip. Highly satisfied with my stay.',
            'rating' => 8,
            'created_at' => now()->subDays(15),
            'updated_at' => now(),
        ]);

        review::create([
            'nama' => 'Emily Johnson',
            'email' => 'emily.johnson@example.com',
            'review' => 'This was my first time staying at this hotel, and it exceeded all my expectations. The breakfast buffet had a wide variety of options, and everything was fresh and tasty. The staff was friendly and always available to assist with any requests. Truly a memorable stay.',
            'rating' => 10,
            'created_at' => now()->subDays(20),
            'updated_at' => now(),
        ]);

        review::create([
            'nama' => 'Michael Lee',
            'email' => 'michael.lee@example.com',
            'review' => 'The location of the hotel is fantastic, situated close to major attractions and public transportation. The room was modern, with a great view of the city skyline. Although the gym facilities could use some improvement, overall, it was a great experience.',
            'rating' => 8,
            'created_at' => now()->subDays(25),
            'updated_at' => now(),
        ]);
    }


}
