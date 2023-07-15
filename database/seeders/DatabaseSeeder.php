<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach (range(1,10) as $index) {
            $this->call([
                user::class,
                publicity::class,
                post::class,
                rating::class,
                modification::class,
                publicitates::class
            ]);
        }
    }
}
