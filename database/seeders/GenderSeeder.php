<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    // protected $connection = 'tenant';
    // protected $table = 'genders';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            [
                'name' => 'Female',
                'slug' => Str::slug('Female'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Male',
                'slug' => Str::slug('Male'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Other',
                'slug' => Str::slug('Other'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('genders')->insert($genders);
    }
}
