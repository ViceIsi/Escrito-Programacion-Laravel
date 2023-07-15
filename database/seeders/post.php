<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class post extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();
        $ID_Publicity= DB::table('Publicity')->pluck('id');
        DB::table('Post')->insert([
            'Title' => Str::random(20),
            'Body' => Str::random(100),
            'Author' => Str::random(10),
            'fk_ID_Publicity' => $faker->randomElement($ID_Publicity)
        ]);
    }
}
