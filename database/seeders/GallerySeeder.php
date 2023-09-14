<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::truncate();
        $names = [
            'Spa',
            'Restaurant',
            'Stay',
            'Activity',
            'Resort',
            'Amenities'
        ];
        foreach ($names as $name) {
            Gallery::create(['name' => $name]);
        }
    }
}
