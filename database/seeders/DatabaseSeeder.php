<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::create([
             'firstname' => 'ali',
             'lastname' => 'alizade',
             'number' => '09396125117',
             'email' => 'test@example.com',
             'password' => '12341234',
             'area' => '1',
             'address' => 'hamedan',
             'group_id' => null,
         ]);
         User::create([
             'firstname' => 'admin',
             'lastname' => 'admin',
             'number' => '09181111111',
             'email' => 'admin@panel.com',
             'password' => '12341234',
             'role' => '2',
             'area' => '1',
             'address' => 'hamedan',
             'group_id' => null,
         ]);
    }
}
