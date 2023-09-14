<?php

namespace Database\Seeders;

use App\Models\SpaService;
use Illuminate\Database\Seeder;

class SpaServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
