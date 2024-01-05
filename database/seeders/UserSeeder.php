<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakeData = [];

        for ($i = 1; $i < 10; $i++) {
            $fakeData[] = [
                'name' => 'user' . $i,
                'email' => 'user' . $i . '@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
            ];
        }
        DB::table('users')->insert($fakeData);
    }
}
