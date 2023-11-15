<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'YourName',
            'username' => 'admin',
            'password' => Hash::make('s^!5yG8I2T+5'),
            'created_at' => date("Y-m-d H-i-s"),
            'updated_at' => date("Y-m-d H-i-s")
        ]);
    }
}
