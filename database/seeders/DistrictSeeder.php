<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    // protected $connection = 'landlord';
    // protected $table = 'districts';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            [
                'division_id' => 1,
                'name' => 'Sylhet',
                'slug' => Str::slug('Sylhet'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'division_id' => 1,
                'name' => 'Moulvibazar',
                'slug' => Str::slug('Moulvibazar'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'division_id' => 1,
                'name' => 'Habiganj',
                'slug' => Str::slug('Habiganj'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'division_id' => 1,
                'name' => 'Sunamganj',
                'slug' => Str::slug('Sunamganj'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
