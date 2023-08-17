<?php

namespace Database\Seeders;

use App\Models\AuthGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Admin',
                'description' => 'Admin group'
            ],
            [
                'name' => 'User',
                'description' => 'User group'
            ]
        ];

        foreach ($groups as $group) {
            AuthGroup::create($group);
        }
    }
}
