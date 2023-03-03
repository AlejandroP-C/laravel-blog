<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alejandro Portalés Cerveró',
            'email' => 'alexportalescervero@gmail.com',
            'password' => bcrypt('alejandro')
        ])->assignRole('Admin');

        User::factory(2)->create();
    }
}
