<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            'nama' => 'dr. Suprapto',
            'telepon' => '0812-3511-954',
            'alamat' => 'Jl. Griya Kartika 10 No. 39, Sidoarjo',
        ]);

        DB::table('dokters')->insert([
            'nama' => 'dr. Diwantara Anugrah',
            'telepon' => '0854-7710-1123',
            'alamat' => 'Jl. Raflessia No. 1, Tangerang',
        ]);

        DB::table('dokters')->insert([
            'nama' => 'dr. Sugeng Handoko',
            'telepon' => '0856-1122-3344',
            'alamat' => 'Jl. Ir. Soekarno No. 23, Semarang',
        ]);

        DB::table('dokters')->insert([
            'nama' => 'dr. David Anugrah',
            'telepon' => '0881-1231-9987',
            'alamat' => 'Jl. Sudirman No. 99, Denpasar',
        ]);

        DB::table('dokters')->insert([
            'nama' => 'dr. Ahmad Dzulfikar',
            'telepon' => '0881-1990-2023',
            'alamat' => 'Jl. Trisakti No.200, Surabaya',
        ]);

        DB::table('pasiens')->insert([
            'nama' => 'Budi Susanto',
            'telepon' => '0812-3456-7890',
            'alamat' => 'Jl. Merdeka No. 123, Jakarta',
        ]);

        DB::table('pasiens')->insert([
            'nama' => ' Siti Rahayu',
            'telepon' => '0856-1234-5678',
            'alamat' => 'Jl. Mawar No. 45, Bandung',
        ]);

        DB::table('pasiens')->insert([
            'nama' => 'Joko Prabowo',
            'telepon' => '0877-9876-5432',
            'alamat' => 'Jl. Raya Cendana No. 56, Surabaya',
        ]);

        DB::table('pasiens')->insert([
            'nama' => 'M. Satya Maharaja Duta',
            'telepon' => '0812-2211-1322',
            'alamat' => 'Jl. Asia No. 69, Medan',
        ]);

        DB::table('pasiens')->insert([
            'nama' => 'Putri Sri Andini',
            'telepon' => '0822-1213-1415',
            'alamat' => 'Jl. Gatot Subroto No. 45, Surabaya',
        ]);

        
    }
}
