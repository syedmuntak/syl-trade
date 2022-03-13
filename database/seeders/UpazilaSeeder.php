<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpazilaSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upazilas')->insert(
            [
                'district_id' => 1,
                'name' => 'Sylhet Sadar',
                'slug' => Str::slug('Sylhet Sadar'),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
