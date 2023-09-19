<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RevisiPowerUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('power_units', function (Blueprint $table) {
            $table->id('ID_POWER_UNIT');
            $table->string('POWER_UNIT_NUM');
            $table->string('DESCRIPTION');
            $table->unsignedBigInteger('ID_CORPORATION');
            $table->unsignedBigInteger('ID_LOCATION');
            $table->unsignedBigInteger('ID_POWER_UNIT_TYPE');
            $table->char('IS_ACTIVE', 1);
            $table->unsignedBigInteger('INSERT_USER');
            $table->date('INSERT_DATE');
            $table->unsignedBigInteger('UPDATE_USER');
            $table->date('UPDATE_DATE');
            // Add more columns if needed

            $table->foreign('ID_CORPORATION')->references('ID_CORPORATION')->on('corporations');
            $table->foreign('ID_LOCATION')->references('ID_LOCATION')->on('locations');
            $table->foreign('ID_POWER_UNIT_TYPE')->references('ID_POWER_UNIT_TYPE')->on('power_unit_types');
        });
    }

    public function down()
    {
        Schema::dropIfExists('power_units');
    }
}
