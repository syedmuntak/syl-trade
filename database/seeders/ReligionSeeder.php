<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    // protected $connection = 'tenant';
    // protected $table = 'religions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = [
            [
                'name' => 'Buddhism',
                'slug' => Str::slug('Buddhism'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Christianity',
                'slug' => Str::slug('Christianity'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hinduism',
                'slug' => Str::slug('Hinduism'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Islam',
                'slug' => Str::slug('Islam'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('religions')->insert($religions);
    }
}
