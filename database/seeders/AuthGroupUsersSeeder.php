<?php

namespace Database\Seeders;

use App\Models\AuthGroup;
use App\Models\AuthGroupUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class AuthGroupUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            AuthGroupUser::create([
                'user_id' => $i,
                'auth_group_id' => 2
            ]);
        }

        AuthGroupUser::where('user_id', 1)->update(['auth_group_id' => 1]);

        User::where('id', 1)->update(
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('12345678'),
            ]
        );
    }
}
