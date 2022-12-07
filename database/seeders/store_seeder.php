<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class store_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store')->insert([
            [
                'nameStore' => 'Thift Store Jakarta',
                'place' => 'Kemang, Jakarta Pusat - Jawa Barat',
                'description' => 'Thift Store Jakarta adalah toko baju yang menyediakan baju dari berbagai brand sehingga kalian tidak akan sulit menemukan baju idaman yang kalian cari',
            ],
            [
                'nameStore' => 'Toko Baju Kita Surabaya',
                'place' => 'Gedangan, Surabaya - Jawa Timur',
                'description' => 'Thift Store Jakarta adalah toko baju yang menyediakan baju dari berbagai brand sehingga kalian tidak akan sulit menemukan baju idaman yang kalian cari',
            ],
            [
                'nameStore' => 'Terra Komputer',
                'place' => 'Bandung',
                'description' => 'Terra Komputer adalah toko yang menyediakan berbagai keperluan dan accessoris komputer serta disini kalian juga dapat servis komputer kalian yang mungkin sudah rusak',
            ],
            [
                'nameStore' => 'Shift Komputer',
                'place' => 'Cibubur, Bandung - Jawa Barat',
                'description' => 'Terra Komputer adalah toko yang menyediakan berbagai keperluan dan accessoris komputer serta disini kalian juga dapat servis komputer kalian yang mungkin sudah rusak',
            ],
            [
                'nameStore' => 'Smartphone Kediri',
                'place' => 'Ngadiluwih, Kediri - Jawa Timur',
                'description' => 'Smartphone Kediri adalah toko smartphone yang menyediakan berbagai smarthphone dari berbagai brand termasuk brand iphone sekalipun, jadi kalian tidak perlu jauh2 ke toko lain hanya untuk mencari smartphone karena disini sudah lengkap',
            ],
            [
                'nameStore' => 'Azam Cell',
                'place' => 'BadalPandean, Kediri - Jawa Timur',
                'description' => 'Smartphone Kediri adalah toko smartphone yang menyediakan berbagai smarthphone dari berbagai brand termasuk brand iphone sekalipun, jadi kalian tidak perlu jauh2 ke toko lain hanya untuk mencari smartphone karena disini sudah lengkap',
            ],
        ]);
    }
}
