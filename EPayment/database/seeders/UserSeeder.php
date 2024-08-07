<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Tria Yunita',
                'no_telpon' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 1',
                'jenis_kelamin' => 'perempuan',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-01-01',
                'role' => 'Super Admin',
                'email' => 'triaynta@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => null,
            ],
            [
                'name' => 'M Rifaul Ardiyanto',
                'no_telpon' => '081234567891',
                'alamat' => 'Jl. Merdeka No. 2',
                'jenis_kelamin' => 'perempuan',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1992-02-02',
                'role' => 'Admin',
                'email' => 'ardiyanto@gmail.com',
                'password' => Hash::make('password456'),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => null,
            ],
        ]);
    }
}
