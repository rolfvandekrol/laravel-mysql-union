<?php

namespace Database\Seeders;

use App\Models\Foo;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $a = Foo::create([
            'a' => 'a',
        ]);
        $a->bars()->create([
            'b' => fake()->randomLetter(),
        ]);
        $a->bazs()->create([
            'b' => fake()->randomLetter(),
        ]);

        $b = Foo::create([
            'a' => 'b',
        ]);
        $b->bars()->create([
            'b' => fake()->randomLetter(),
        ]);
        $b->bazs()->create([
            'b' => fake()->randomLetter(),
        ]);
    }
}
