<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin user
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@handinhand.com',
            'password' => Hash::make('password'),
            'user_class' => 'admin',
        ]);

        // for volunteers
        \App\Models\User::factory(rand(100,200))->create();

    }
}
