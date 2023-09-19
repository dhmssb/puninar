<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerUnitSeeder extends Seeder
{
    public function run()
    {
        DB::table('power_units')->insert([
            [
                'ID_POWER_UNIT' => 1,
                'POWER_UNIT_NUM' => 'B 9914 SYM',
                'DESCRIPTION' => 'HINO WINGBOX/FM 260 JD',
                'ID_CORPORATION' => 1,
                'ID_LOCATION' => 1,
                'ID_POWER_UNIT_TYPE' => 1,
                'IS_ACTIVE' => 'Y',
                'INSERT_USER' => 1,
                'INSERT_DATE' => '20/12/2018',
                'UPDATE_USER' => 2,
                'UPDATE_DATE' => '21/12/2018',
            ],
            // Add other records here...
        ]);
    }
}
