<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PowerUnitType extends Model
{
    protected $table = 'power_unit_types';
    protected $primaryKey = 'ID_POWER_UNIT_TYPE';
    public $timestamps = false;

    protected $fillable = [
        'POWER_UNIT_TYPE_XID',
        'DESCRIPTION',
        'INSERT_USER',
        'INSERT_DATE',
        'UPDATE_USER',
        'UPDATE_DATE'
    ];
}
