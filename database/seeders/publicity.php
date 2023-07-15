<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class publicity extends Seeder
{
    public function run(): void
    {
        DB::table('Publicity')->insert([
            'ADName' => Str::random(10),
            'URL' => 'https://'.Str::random(50).'.com',
        ]);
    }
}
