<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        if (DB::table('themes')->count() === 0) {
            DB::table('themes')->insert([
                [
                    'themename' => 'Default',
                    'themelayoutname' => 'Default',
                    'themeiframeurl'  => 'default',
                    'status' => '1',
                ],
                [
                    'themename' => 'Theme01',
                    'themelayoutname' => 'DarkGreeva',
                    'themeiframeurl'  => 'iframe01',
                    'status' => '0',
                ],
                [
                    'themename' => 'Theme02',
                    'themelayoutname' => 'DeskApp',
                    'themeiframeurl'  => 'iframe02',
                    'status' => '0',
                ],
                [
                    'themename' => 'Theme03',
                    'themelayoutname' => 'Multicart',
                    'themeiframeurl'  => 'iframe03',
                    'status' => '0',
                ]
            ]);
        }
        
    }
}
