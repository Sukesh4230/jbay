<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Gallery::truncate();
        $names = [
            'Spa',
            'Restaurant',
            'Stay',
            'Activity',
            'Resort',
            'Amenities',
        ];
        foreach ($names as $name) {
            Gallery::create(['name' => $name]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
