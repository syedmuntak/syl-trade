<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    // protected $connection = 'landlord';
    // protected $table = 'divisions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert(
            [
                'name' => 'Sylhet',
                'slug' => Str::slug('Sylhet'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
