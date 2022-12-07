<?php

namespace Database\Seeders;

use App\Models\product_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name' => 'Baju Santai Erigo Full Size',
                'category_model_id' => 1,
                'store_id' => 1,
                'price' => 54.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 2450,
                'merk' => 'Erigo',
                'img' => 'baju1.png'
            ],
            [
                'name' => 'Baju Koko Lebaran',
                'category_model_id' => 1,
                'store_id' => 2,
                'price' => 54.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 2450,
                'merk' => 'Erigo',
                'img' => 'baju1.png'
            ],
            [
                'name' => 'Baju Flanel Kekinian',
                'category_model_id' => 1,
                'store_id' => 2,
                'price' => 54.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 2450,
                'merk' => 'Erigo',
                'img' => 'celana-2.png'
            ],
            [
                'name' => 'Redmi Note 9',
                'category_model_id' => 2,
                'store_id' => 5,
                'price' => 2.100,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 450,
                'merk' => 'Redmi',
                'img' => 'hp-1.png'
            ],
            [
                'name' => 'Realme Narzo 30A',
                'category_model_id' => 2,
                'store_id' => 6,
                'price' => 5.100,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 450,
                'merk' => 'Realme',
                'img' => 'hp-2.png'
            ],
            [
                'name' => 'Samsung S2022',
                'category_model_id' => 2,
                'store_id' => 5,
                'price' => 2.100,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 450,
                'merk' => 'Samsung',
                'img' => 'hp-1.png'
            ],
            [
                'name' => 'Iphone 11 Pro Max',
                'category_model_id' => 2,
                'store_id' => 6,
                'price' => 11.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 96,
                'merk' => 'Iphone',
                'img' => 'hp-2.png'
            ],
            [
                'name' => 'Laptop Dell 2550PH',
                'category_model_id' => 4,
                'store_id' => 3,
                'price' => 8.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 130,
                'merk' => 'Dell',
                'img' => 'laptop-1.png'
            ],
            [
                'name' => 'Asus TUF Gaming Zero',
                'category_model_id' => 4,
                'store_id' => 4,
                'price' => 8.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 130,
                'merk' => 'Asus',
                'img' => 'laptop-2.png'
            ],
            [
                'name' => 'Acer Aspire A1545',
                'category_model_id' => 4,
                'store_id' => 4,
                'price' => 8.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 130,
                'merk' => 'Acer',
                'img' => 'laptop-1.png'
            ],
            [
                'name' => 'Macbook Air 256GB',
                'category_model_id' => 4,
                'store_id' => 3,
                'price' => 8.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 20,
                'merk' => 'Macbook',
                'img' => 'laptop-2.png'
            ],
            [
                'name' => 'Celana Pendek Pria',
                'category_model_id' => 3,
                'store_id' => 1,
                'price' => 25.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 3400,
                'merk' => 'Kulot',
                'img' => 'celana-2.png'
            ],
            [
                'name' => 'Celana Panjang Pria',
                'category_model_id' => 3,
                'store_id' => 1,
                'price' => 30.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 3450,
                'merk' => 'Kulot',
                'img' => 'celana-3.png'
            ],
            [
                'name' => 'Redmi Note 9',
                'category_model_id' => 2,
                'store_id' => 6,
                'price' => 3.100,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 240,
                'merk' => 'Redmi',
                'img' => 'hp-1.png'
            ],
            [
                'name' => 'Acer Aspire A1545',
                'category_model_id' => 4,
                'store_id' => 4,
                'price' => 8.000,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic explicabo alias recusandae vel repudiandae possimus impedit blanditiis iste similique.',
                'kondisi' => 'Baru',
                'stock' => 130,
                'merk' => 'Acer',
                'img' => 'laptop-1.png'
            ],
        ]);
    }
}
