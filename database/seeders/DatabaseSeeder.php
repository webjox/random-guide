<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = \App\Models\User::factory(10)->create();
        $places = \App\Models\Place::factory(10)->create();
        \App\Models\UserPlace::factory()
        ->count(10)
        ->state(new Sequence(
            fn (Sequence $sequence) => [
                'user_id' => $users->random()->id,
                'place_id' => $places->random()->id,
            ]
        ))
        ->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
