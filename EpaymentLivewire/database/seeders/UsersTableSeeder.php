<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     [
        //         'nama' => 'John Doe',
        //         'no_telpon' => '08123456789',
        //         'alamat' => 'Jl. Contoh Alamat No. 1',
        //         'jenis_kelamin' => 'Laki-laki',
        //         'tanggal_lahir' => '1990-01-01',
        //         'tempat_lahir' => 'Jakarta',
        //         'role' => 'admin',
        //         'email' => 'john.doe@gmail.com',
        //         'password' => Hash::make('password'),
        //         'image' => 'default.jpg',
        //     ],
        //     [
        //         'nama' => 'Jane Doe',
        //         'no_telpon' => '08123456788',
        //         'alamat' => 'Jl. Contoh Alamat No. 2',
        //         'jenis_kelamin' => 'Perempuan',
        //         'tanggal_lahir' => '1991-02-02',
        //         'tempat_lahir' => 'Bandung',
        //         'role' => 'user',
        //         'email' => 'jane.doe@gmail.com',
        //         'password' => Hash::make('password'),
        //         'image' => 'default.jpg',
        //     ]
        // ]);
    }
}
