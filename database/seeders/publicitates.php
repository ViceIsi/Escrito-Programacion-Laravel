<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class publicitates extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $ID_User = DB::table('User')->pluck('id');
        $ID_Publicity= DB::table('Publicity')->pluck('id');
        DB::table('Publicitates')->insert([
            'fk_ID_Publicity' => $faker->randomElement($ID_Publicity),
            'fk_ID_User' => $faker->randomElement($ID_User)
        ]);
    }
}
