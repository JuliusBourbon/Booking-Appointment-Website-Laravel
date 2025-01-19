<?php

namespace Database\Seeders;

use App\Models\roomtype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data ke tabel roomtype
        roomtype::create([
            
                'typename' => 'Standard',
                'desc' => 'A basic room type offering essential amenities such as a comfortable bed, private bathroom, and complimentary Wi-Fi. Ideal for budget-conscious travelers seeking a clean and practical place to stay with all the necessary facilities for a good night’s rest.',
                'size' => '18-20',
                'img' => 'https://i.pinimg.com/236x/76/f9/22/76f9226619b99ab7c61345993a4c9475.jpg',
                'price' => 500000,
                'stock' => 10,
                'bed' => 'Single Bed',
                'smoking' => 'No Smoking Area',
                'person' => '1-2 Person',
                'bathroom' => '1 Bathroom',
            ]);
        roomtype::create([
                'typename' => 'Deluxe',
                'desc' => 'A more spacious and elegantly designed room with enhanced amenities. Features include a larger bed, upgraded furnishings, and additional conveniences such as a mini-fridge, flat-screen TV, and complimentary toiletries. Perfect for travelers looking for a more comfortable and refined experience.',
                'size' => '25-30',
                'img' => 'https://i.pinimg.com/736x/53/f2/40/53f240b1941a4d5ecfd179c7091d7d1a.jpg',
                'price' => 800000,
                'stock' => 10,
                'bed' => 'Double Bed',
                'smoking' => 'No Smoking Area',
                'person' => '2-4 Person',
                'bathroom' => '2 Bathroom',
        ]);
        roomtype::create([
                'typename' => 'Suite',
                'desc' => 'A luxurious accommodation with separate living and sleeping areas, offering premium services and exclusive features. Includes high-end furnishings, a larger bathroom with a bathtub, complimentary beverages, and concierge service. Designed to provide maximum comfort and an upscale experience for discerning guests.',
                'size' => '35-40',
                'img' => 'https://i.pinimg.com/736x/b4/0a/b3/b40ab3d69b000188c1391ec16ed26e27.jpg',
                'price' => 1000000,
                'stock' => 2,
                'bed' => '4 Bed',
                'smoking' => 'Available Smoking Area',
                'person' => '4-8 person',
                'bathroom' => '4 bathroom',
        ]);
        
    }
}
