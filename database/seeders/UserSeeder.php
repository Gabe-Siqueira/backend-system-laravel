<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "root",
            'email' => "root@root.com",
            'email_verified_at' => now(),
            'password' => bcrypt('P@ssw0rd'),
            'created_at' => now(),
        ]);
    }
}
