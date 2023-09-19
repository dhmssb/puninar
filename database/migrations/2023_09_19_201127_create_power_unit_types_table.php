<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerUnitTypesTable extends Migration
{
    public function up()
    {
        Schema::create('power_unit_types', function (Blueprint $table) {
            $table->id('ID_POWER_UNIT_TYPE');
            $table->string('POWER_UNIT_TYPE_XID');
            $table->string('DESCRIPTION');
            $table->unsignedBigInteger('INSERT_USER');
            $table->date('INSERT_DATE');
            $table->unsignedBigInteger('UPDATE_USER');
            $table->date('UPDATE_DATE');
            // Add more columns if needed
        });
    }

    public function down()
    {
        Schema::dropIfExists('power_unit_type');
    }
}
