<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
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
        $this->call(UserTableSeeder::class);

        PostFactory::new()->times(1000)
            ->sequence(
                ['created_at' => now()],
                ['created_at' => now()->subMonth()],
                ['created_at' => now()->subMonths(2)],
                ['created_at' => now()->subMonths(3)],
            )->create();
    }
}
