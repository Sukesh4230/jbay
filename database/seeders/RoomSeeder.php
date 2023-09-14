<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::truncate();
        $names = [
            'Duke’s Pool Villa',
            'Beetle – The Tree House',
            'Regal Jacuzzi Villa',
            'Bougain Villa',
            'Pavilion Room',
            'Pent house'
        ];

        foreach ($names as $name) {
            Room::create(['name' => $name]);
        }
    }
}
