<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class user extends Seeder
{
    public function run(): void
    {
        DB::table('User')->insert([
            'username' => Str::random(10),
            'email' => Str::random(16).'@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
