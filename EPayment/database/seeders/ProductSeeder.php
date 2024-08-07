<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Basreng Products
            [
                'kode_produk' => 'BASRENKID0001',
                'nama' => 'Basreng Original dengan ukuran 110 gram',
                'deskripsi' => 'Camilan basreng original dengan rasa yang lezat.',
                'harga' => 10000,
                'kategori' => 'basreng',
                'stok' => 100,
                'ukuran' => '110 gram',
                'varian' => 'Original',
                'status' => 'tersedia',
                'create' => now(),
            ],
            [
                'kode_produk' => 'BASRENKID0002',
                'nama' => 'Basreng Pedas Lv1 dengan ukuran 110 gram',
                'deskripsi' => 'Camilan basreng pedas level 1 yang menggugah selera.',
                'harga' => 12000,
                'kategori' => 'basreng',
                'stok' => 50,
                'ukuran' => '110 Gram',
                'varian' => 'Pedas-lv1',
                'status' => 'tersedia',
                'create' => now(),
            ],
            [
                'kode_produk' => 'BASRENKID0003',
                'nama' => 'Basreng Balado dengan ukuran 220 gram',
                'deskripsi' => 'Basreng dengan rasa balado yang pedas dan nikmat.',
                'harga' => 15000,
                'kategori' => 'basreng',
                'stok' => 75,
                'ukuran' => '220 Gram',
                'varian' => 'Balado',
                'status' => 'tersedia',
                'create' => now(),
            ],
            // Mie Lidi Products
            [
                'kode_produk' => 'BASRENKID0004',
                'nama' => 'Mie Lidi Original dengan ukuran 80 gram',
                'deskripsi' => 'Mie lidi dengan rasa original yang gurih.',
                'harga' => 8000,
                'kategori' => 'mie-lidi',
                'stok' => 200,
                'ukuran' => '80 gram',
                'varian' => 'Original',
                'status' => 'tersedia',
                'create' => now(),
            ],
            [
                'kode_produk' => 'BASRENKID0005',
                'nama' => 'Mie Lidi Pedas Level 3 dengan ukuran 80 gram',
                'deskripsi' => 'Mie lidi pedas yang membuat ketagihan.',
                'harga' => 9000,
                'kategori' => 'mie-lidi',
                'stok' => 150,
                'ukuran' => '80 gram',
                'varian' => 'Pedas-lv3',
                'status' => 'tersedia',
                'create' => now(),
            ],
            // Makaroni Products
            [
                'kode_produk' => 'BASRENKID0006',
                'nama' => 'Makaroni Sapi Panggang dengan ukuran 110 gram',
                'deskripsi' => 'Makaroni dengan rasa Sapi Panggang yang creamy.',
                'harga' => 12000,
                'kategori' => 'makaroni',
                'stok' => 80,
                'ukuran' => '110 Gram',
                'varian' => 'Sapi-panggang',
                'status' => 'tersedia',
                'create' => now(),
            ],
            [
                'kode_produk' => 'BASRENKID0007',
                'nama' => 'Makaroni Balado dengan ukuran 220 gram',
                'deskripsi' => 'Makaroni dengan rasa balado yang pedas.',
                'harga' => 13000,
                'kategori' => 'makaroni',
                'stok' => 60,
                'ukuran' => '220 Gram',
                'varian' => 'Balado',
                'status' => 'tersedia',
                'create' => now(),
            ],
            [
                'kode_produk' => 'BASRENKID0008',
                'nama' => 'Basreng Pedas Daun Jeruk Level 2 ukuran fullsize (1kg) ',
                'deskripsi' => 'Basreng dengan rasa pedas yang dipadukan dengan daun jeruk menambhakan rasa pedas yang jauh lebih gurih dan wangi',
                'harga' => '45000',
                'kategori' => 'basreng',
                'stok' => '23',
                'ukuran' => '1 kg',
                'varian' => 'Pedas-lv2',
                'status' => 'tersedia',
                'create' => now(),
            ]
        ];

        DB::table('products')->insert($products);
    }
}
