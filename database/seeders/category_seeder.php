<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'nameCategory' => 'Baju',
                'categories_icon' => 'icon-baju'
            ],
            [
                'nameCategory' => 'Handphone',
                'categories_icon' => 'icon-hp'
            ],
            [
                'nameCategory' => 'Celana',
                'categories_icon' => 'icon-celana'
            ],
            [
                'nameCategory' => 'Laptop',
                'categories_icon' => 'icon-laptop'
            ],
        ]);
    }
}
