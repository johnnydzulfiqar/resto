<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('12345'),
                'pass' => '12345',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'pedagang',
                'username' => 'pedagang',
                'password' => bcrypt('12345'),
                'pass' => '12345',
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'manager',
                'username' => 'manager',
                'password' => bcrypt('12345'),
                'pass' => '12345',
                'role' => 'manajer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'password' => bcrypt('12345'),
                'pass' => '12345',
                'role' => 'pelanggan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);
    }
}
