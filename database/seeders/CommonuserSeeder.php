<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CommonuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin User",
            'email' => "admin@summer.com",
            'password' => Hash::make('123456'),
            'type' => 1,
        ]);

        DB::table('users')->insert([
            'name' => "User",
            'email' => "user@summer.com",
            'password' => Hash::make('123456'),
            'type' => 0,
        ]);

        DB::table('users')->insert([
            'name' => "Manager User",
            'email' => "manager@summer.com",
            'password' => Hash::make('123456'),
            'type' => 2,
        ]);
    }
}
