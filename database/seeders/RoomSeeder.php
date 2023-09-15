<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
