<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Pasien::factory(30)->create();
        Pasien::insert([
            ['id' => 1, 'nama' => 'Ananda Naufal'],
            ['id' => 2, 'nama' => 'Budi Santoso'],
            ['id' => 3, 'nama' => 'Citra Dewi'],
            ['id' => 4, 'nama' => 'Dian Pratiwi'],
            ['id' => 5, 'nama' => 'Eka Wijaya'],
            ['id' => 6, 'nama' => 'Farid Ahmad'],
            ['id' => 7, 'nama' => 'Gita Putri'],
            ['id' => 8, 'nama' => 'Hadi Purnomo'],
            ['id' => 9, 'nama' => 'Ika Sari'],
            ['id' => 10, 'nama' => 'Joko Susanto'],
        ]);
    }
}
