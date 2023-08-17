<?php

namespace Database\Seeders;

use App\Models\UnitKegiatanMahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKegiatanMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnitKegiatanMahasiswa::factory(10)->create();
    }
}
