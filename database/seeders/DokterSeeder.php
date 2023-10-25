<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::insert([
            ['id' => 1, 'nama' => 'Drs Rahyani'],
            ['id' => 2, 'nama' => 'Dr. Siti Hidayati'],
            ['id' => 3, 'nama' => 'Dr. Bambang Susilo'],
            ['id' => 4, 'nama' => 'Dra. Fitriani'],
            ['id' => 5, 'nama' => 'Dr. Hadi Pratama'],
            ['id' => 6, 'nama' => 'Drs. Ari Wibowo'],
            ['id' => 7, 'nama' => 'Dra. Rini Suryani'],
            ['id' => 8, 'nama' => 'Dr. Adi Prabowo'],
            ['id' => 9, 'nama' => 'Dra. Dewi Sartika'],
            ['id' => 10, 'nama' => 'Dr. Joko Susanto'],
        ]);
    }
}
