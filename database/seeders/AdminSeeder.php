<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        if (DB::table('admins')->count() === 0) {
            DB::table('admins')->insert([
                'name' => 'DRC Admin',
                'email' => 'admin'.'@gmail.com',
                'password' => Hash::make('admin123'),
                'phone' => '+92 3211345678',
                'address' => 'Lahore, Pakistan',
                'cnic' => '3520122334455',
            ]);
        }
        
    }
}
