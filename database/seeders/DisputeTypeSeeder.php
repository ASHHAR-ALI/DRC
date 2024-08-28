<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DisputeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (DB::table('dispute_type_settings')->count() === 0) {
            DB::table('dispute_type_settings')->insert([
                [
                    'dispute_type_name' => 'Money/Loan',
                ],

                [
                    'dispute_type_name' => 'Home',
                ],

                [
                    'dispute_type_name' => 'Land',
                ],

                [
                    'dispute_type_name' => 'Vehicle',
                ],

                [
                    'dispute_type_name' => 'Assault',
                ],

                [
                    'dispute_type_name' => 'Others',
                ]

            ]);
        }
    }
}
