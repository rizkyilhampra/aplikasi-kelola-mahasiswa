<?php

namespace Database\Seeders;

use App\Models\AnggotaUKM;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaUKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AnggotaUKM::factory(10)->create();
    }
}
