<?php

namespace Database\Seeders;

use App\Models\SpaService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpaServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        SpaService::truncate();
        $names = [
            'Abhyanga',
            'Shirodhara',
            'Shiro Abhyanga',
            'Pada Abhyanga',
            'Mukha lepam',
            'Udwarthanam',
            'Podikizhi',
            'Pizhichil',
            'Ayurvedic Pedicure',
            'Prishta Abhyanga'
        ];
        foreach ($names as $name) {
            SpaService::create(['name' => $name]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
