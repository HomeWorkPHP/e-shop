<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
           [
               'email' => 'admin@admin.com',
               'first_name' => 'Admin',
               'last_name' => '1',
               'password' => Hash::make('password'),
               'created_at' => now(),
               'updated_at' => now()
           ],
            [
                'email' => 'doandavid+admin@admin.com',
                'first_name' => 'Admin',
                'last_name' => '2',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
