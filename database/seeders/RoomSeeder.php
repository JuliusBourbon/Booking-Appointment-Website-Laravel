<?php
namespace Database\Seeders;

use App\Models\Room;  // Import model Room
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::create([
            'roomnumber' => '101',
            'roomtypeid' => 1,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '102',
            'roomtypeid' => 1,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '103',
            'roomtypeid' => 1,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '201',
            'roomtypeid' => 2,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '202',
            'roomtypeid' => 2,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '203',
            'roomtypeid' => 2,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '301',
            'roomtypeid' => 3,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '302',
            'roomtypeid' => 3,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '303',
            'roomtypeid' => 3,
            'status' => 'available'
        ]);

        Room::create([
            'roomnumber' => '304',
            'roomtypeid' => 3,
            'status' => 'available'
        ]);
    }

}
