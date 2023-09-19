<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'ID_LOCATION';
    public $timestamps = false;

    protected $fillable = [
        'LOCATION_NAME',
        'CITY',
        'PROVINCE',
        'LATITUDE',
        'LONGITUDE',
        'INSERT_USER',
        'INSERT_DATE',
        'UPDATE_USER',
        'UPDATE_DATE'
    ];
}
