<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->insert([
            [
                'ID_CORPORATION' => 1,
                'CORPORATION_NAME' => 'PT PUNINAR JAYA',
                'INSERT_USER' => 1,
                'INSERT_DATE' => '12/20/2018',
                'UPDATE_USER' => 2,
                'INSERT_DATE' => '12/20/2018',
            ],
            [
                'ID_CORPORATION' => 2,
                'CORPORATION_NAME' => 'PT. PUNINAR INFINITE RAYA',
                'INSERT_USER' => 1,
                'INSERT_DATE' => '12/20/2018',
                'UPDATE_USER' => 2,
                'INSERT_DATE' => '12/20/2018',
            ],
            // Add other records here...
        ]);
    }
}
