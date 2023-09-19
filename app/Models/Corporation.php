<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corporation extends Model
{
    protected $table = 'corporations';
    protected $primaryKey = 'ID_CORPORATION';
    public $timestamps = false;

    protected $fillable = [
        'CORPORATION_NAME',
        'INSERT_USER',
        'INSERT_DATE',
        'UPDATE_USER',
        'UPDATE_DATE'
    ];
}
