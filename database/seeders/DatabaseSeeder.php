<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)
            ->sequence(['name' => 'admin', 'email' => 'admin@example.com', 'role' => 1], ['name' => 'user', 'email' => 'user@example.com', 'role' => 0])
            ->create();
    }
}
