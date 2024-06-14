<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Lead::factory(10)->create();

        User::factory(100)->create()->each(function ($user) {
            Lead::factory(10)->create(['user_id' => $user->id]);
        });
    }
}
