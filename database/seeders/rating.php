<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class rating extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $ID_Post = DB::table('Post')->pluck('id');
        $ID_User= DB::table('User')->pluck('id');
        DB::table('Rating')->insert([
            'Rating' => rand(1,5),
            'fk_ID_User' => $faker->randomElement($ID_User),
            'fk_ID_Post' => $faker->randomElement($ID_Post)
        ]);
    }
}
