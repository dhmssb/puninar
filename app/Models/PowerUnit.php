<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PowerUnit extends Model
{
    protected $table = 'power_units';
    protected $primaryKey = 'ID_POWER_UNIT';
    public $timestamps = false;

    protected $fillable = [
        'POWER_UNIT_NUM',
        'DESCRIPTION',
        'ID_CORPORATION',
        'ID_LOCATION',
        'ID_POWER_UNIT_TYPE',
        'IS_ACTIVE',
        'INSERT_USER',
        'INSERT_DATE',
        'UPDATE_USER',
        'UPDATE_DATE'
    ];
}
